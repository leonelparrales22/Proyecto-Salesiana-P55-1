<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temperatura extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function GraficoTemperatura(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/GraficoTemperatura.php');
        $this->load->view('encabezados/footer.php');
    }

    function TablaTemperatura(){
        $this->load->view('encabezados/header.php');
        $this->load->view('temperatura/TablaTemperatura.php');
    }
}
?>