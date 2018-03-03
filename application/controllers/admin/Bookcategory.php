<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/Admin_controller.php';

class BookCategory extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Book_Category_Model");
        $this->load->library("Uuid");

    }

    public function index()
    {
        $this->load->view("admin/bookCategory/list_book_categories", null);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view_data = array(
                "data" => array(
                    "action" => ACTION_CREATE,
                )
            );
            $this->load->view("admin/bookCategory/book_category_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "name" => $this->input->post("name"),
                    "created_date" => Calendar::currentDateTime()
                );

                $result['success']  = $this->Book_Category_Model->save($data);
            } else {
                foreach ($_POST as $key => $value) {
                    $result['messages'][$key] = form_error($key);
                }
            }

            // response to client
            echo json_encode($result);
        }
    }

    public function update($book_category_id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $arr_result = $this->Book_Category_Model->getById($book_category_id);
            $view_data = array(
                "data" => array(
                    "action" => ACTION_UPDATE,
                    "row" => $arr_result
                )
            );
            $this->load->view("admin/bookCategory/book_category_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "name" => $this->input->post("name"),
                    "updated_date" => Calendar::currentDateTime()
                );

                $result['success']  = $this->Book_Category_Model->update($data, $book_category_id);

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
            $result['success'] = $this->Book_Category_Model->delete($id);
            echo json_encode($result);
        }
    }

    public function loadBookCategoryDataTable()
    {
        $data = $this->Book_Category_Model->loadBookCategoryDataTable();
        echo json_encode($data);
    }

    public function validateForm()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "Name", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }



}
