<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'core/Frontend_controller.php';

class Home extends Frontend_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
        $this->load->model('Gallery_model');

    }

    public  function index(){
        $data = array(
            "title" => $this->getTitle()
        );

        $this->load->view('frontend/home' , $data);
    }





}
