
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Declarator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your constructor code here
    }

    public function index() {

        $this->load->view('declarator/events_page');

    }

    // Add more methods as needed

}