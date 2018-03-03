<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/Admin_controller.php';

class Author extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Author_Model");
        $this->load->library("Uuid");

    }

    public function index()
    {
        $this->load->view("admin/author/list_authors", null);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $view_data = array(
                "data" => array(
                    "action" => ACTION_CREATE,
                )
            );
            $this->load->view("admin/author/author_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "first_name" => $this->input->post("first_name"),
                    "last_name" => $this->input->post("last_name"),
                    "email" => $this->input->post("email"),
                    "created_date" => Calendar::currentDateTime()
                );

                $result['success']  = $this->Author_Model->save($data);
            } else {
                foreach ($_POST as $key => $value) {
                    $result['messages'][$key] = form_error($key);
                }
            }

            // response to client
            echo json_encode($result);
        }
    }

    public function update($author_id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $arr_result = $this->Author_Model->getById($author_id);
            $view_data = array(
                "data" => array(
                    "action" => ACTION_UPDATE,
                    "row" => $arr_result
                )
            );
            $this->load->view("admin/author/author_entry", $view_data);

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $result = array('success' => false, 'messages' => array());

            $this->validateForm();

            if ($this->form_validation->run()) {
                $data = array(
                    "first_name" => $this->input->post("first_name"),
                    "last_name" => $this->input->post("last_name"),
                    "email" => $this->input->post("email"),
                    "updated_date" => Calendar::currentDateTime()
                );

                $result['success']  = $this->Author_Model->update($data, $author_id);

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
            $result['success'] = $this->Author_Model->delete($id);
            echo json_encode($result);
        }
    }

    public function loadAuthorDataTable()
    {
        $data = $this->Author_Model->loadAuthorDataTable();
        echo json_encode($data);
    }

    public function validateForm()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "FirstName", "trim|required");
        $this->form_validation->set_rules("last_name", "LastName", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }



}
