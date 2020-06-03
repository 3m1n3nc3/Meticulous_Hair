<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    /*
     *  Bypass the activation check
     */

    public function __construct()
    {
        parent::__construct(); 

        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 600);

        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->dbforge();
    }


    public function index()
    { 
        header('Content-type: text/json'); 
        echo 'nice';
    }


    public function bypass()
    { 
        header('Content-type: text/json'); 
        echo 'nice';
    }
  }
