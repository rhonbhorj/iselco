<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once(APPPATH . 'excelReader/excel_reader2.php');
require_once(APPPATH . 'excelReader/SpreadsheetReader.php');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_repo');
    }

    public function index()
    {
        $data['rows'] = $this->model_repo->select_all_data();
        $this->load->view('excel', $data);
    }

    public function getfile()
    {

//


        if (isset($_POST['import'])) {
            $fileName = $_FILES['excel']['name'];
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = date('Y.m.d') . ' - ' . date('h.i.sa') . '.' . $fileExtension;
            $targetDirectory = 'uploads/' . $newFileName;

            move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

            error_reporting(0);
            ini_set('display_errors', 0);

            $reader = new SpreadsheetReader($targetDirectory);

            foreach ($reader as $key => $row) {
                $data['name'] = $row[0];
                $data['age'] = $row[1];
                $data['country'] = $row[2];
                $this->model_repo->insert_data($data);
            }

            echo "
                <script>
                    alert('Successfully Importeds ".  $targetDirectory."');
                    window.location.href = '" . base_url() . "';
                </script>
            ";
        }
    }
}
