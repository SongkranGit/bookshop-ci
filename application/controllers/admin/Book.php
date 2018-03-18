<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/Admin_controller.php';

class Book extends Admin_Controller
{

    private $upload_path;
    private $upload_path_cover_image;

    function __construct()
    {
        parent::__construct();
        $this->load->model("Book_model");
        $this->load->model("Book_category_model");
        $this->load->library("Uuid");
        $this->upload_path = realpath(APPPATH . '../uploads/book');
        $this->upload_path_cover_image = realpath(APPPATH . '../uploads/book/cover_image');
    }

    public function index()
    {
        $this->load->view("admin/book/list_books", null);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view_data = array(
                "data" => array(
                    "action" => ACTION_CREATE,
                    "book_categories" => $this->Book_category_model->getAll()
                )
            );

            $this->load->view("admin/book/book_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "book_category_id" => $this->input->post("book_category_id"),
                    "book_name" => $this->input->post("book_name"),
                    "description" => $this->input->post("description"),
                    "page_count" => $this->input->post("page_count"),
                    "price" => $this->input->post("price"),
                    "published" => intval($this->input->post("published")),
                    "published_date" => Calendar::con2MysqlDate($this->input->post("published_date")),
                    "created_date" => Calendar::currentDateTime()
                );

                dump($data);

                // Upload Cover image
               $cover_image_file_name =  $this->uploadCoverImage();
               if($cover_image_file_name != ''){
                   $data["cover_image"] = $cover_image_file_name;
               }

                // Upload Book
               $book_file_name = $this->uploadBook();
               if($book_file_name != ''){
                    $data["book_file_name"] = $book_file_name;
               }

                $isSuccess = $this->Book_model->save($data);


            } else {
                foreach ($_POST as $key => $value) {
                    $result['messages'][$key] = form_error($key);
                }
            }

            // response to client
            echo json_encode($result);
        }
    }

    public function update($book_id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view_data = array(
                "data" => array(
                    "action" => ACTION_UPDATE,
                    "book_categories" => $this->Book_category_model->getAll(),
                    "book" => $this->Book_model->getById($book_id)
                )
            );
            $this->load->view("admin/book/book_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "book_category_id" => $this->input->post("book_category_id"),
                    "book_name" => $this->input->post("book_name"),
                    "description" => $this->input->post("description"),
                    "isbn" => $this->input->post("isbn"),
                    "page_count" => $this->input->post("page_count"),
                    "price" => $this->input->post("price"),
                    "published_date" => $this->input->post("published_date"),
                    "published" => intval($this->input->post("published")),
                    "updated_date" => Calendar::currentDateTime()
                );

                $isSuccess = $this->Book_model->update($data, $book_id);
                if ($isSuccess) {
                    $list_image_uuid = $this->input->post("list_image_uuid");
                    $this->updateArticleImages($list_image_uuid, $book_id);
                    $result['success'] = true;
                }
            } else {
                foreach ($_POST as $key => $value) {
                    $result['messages'][$key] = form_error($key);
                }
            }

            // response to client
            echo json_encode($result);
        }

    }
    
    public function delete($id)
    {
        $result = array('success' => false);
        if ($id != "") {
            $result['success'] = $this->Book_model->delete($id);
            echo json_encode($result);
        }
    }

    public function loadBooksDataTable()
    {
        $data = $this->Book_model->loadBooksDataTable();
        echo json_encode($data);
    }

    public function updateOrderSeq()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $response = array('success' => false, 'messages' => array());
            $data = array(
                "order_seq" => $this->input->post("order_seq")
            );
            $response["success"] = $this->Book_model->update($data, $this->input->post("rowId"));
            echo json_encode($response);
        }
    }

    public function validateForm()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("published_date", "Publish Date", "trim|required");
        $this->form_validation->set_rules("book_name", "BookName", "trim|required");
        $this->form_validation->set_rules("description", "Description", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }

    public function deleteImage()
    {
        $file = $this->input->post("file");
        if ($file && file_exists($this->upload_path . "/" . $file)) {
            @unlink($this->upload_path . "/" . $file);
            @unlink($this->upload_path . "/" . "thumb_" . $file);
        }

        //delete from database
        $this->Article_images_model->deleteByImageName($file);
    }

    private function uploadCoverImage()
    {
        if (!empty($_FILES)) {
            $prefix_thumb_image = "thumb_";
            $uuid = $this->uuid->v4();
            $file_post = "cover_image_file";

            // config upload
            $config ['upload_path'] = $this->upload_path_cover_image;
            $config ['allowed_types'] = 'jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = true;
            $config['file_name'] = $uuid;

            // load Upload library
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_post)) {
                echo $this->upload->display_errors();
            } else {
                // uploaded data
                $data_uploaded = $this->upload->data();

                // Thumbnail Cover Image
                $new_thumb_image = $prefix_thumb_image . strtolower($data_uploaded["file_name"]);
                $file_path = $this->upload_path_cover_image . "/" . $new_thumb_image;
                $this->load->library("SimpleImage");
                $img = new SimpleImage();
                $img->load($data_uploaded["full_path"])
                    ->thumbnail(500, 380, 'center')
                    ->save($file_path);

                return $new_thumb_image;
            }
        } else {
            echo "file not found";
            return "";
        }
    }


    private function uploadBook(){
        if (!empty($_FILES)) {
            $uuid = $this->uuid->v4();
            $file_post = "book_file";

            // config upload
            $config ['upload_path'] = $this->upload_path;
            $config ['allowed_types'] = 'pdf';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = true;
            $config['file_name'] = $uuid;

            // load Upload library
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_post)) {
                echo $this->upload->display_errors();
            } else {
                // uploaded data
                $data_uploaded = $this->upload->data();
                return $data_uploaded['file_name'];
            }
        } else {
            echo "file not found";
            return "";
        }
    }

}
