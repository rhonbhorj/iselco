
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketmanager extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your constructor code here
    }

    public function index() {

        $pages = "events_page";

        if(!file_exists(APPPATH.'views/marketmanager/'.$pages.'.php')){
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('marketmanager/'.$pages.'.php');
        $this->load->view('templates/footer');
    }

    // Add more methods as needed

}