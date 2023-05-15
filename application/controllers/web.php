<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "";
        $this->load->view('v_index', $data);
    }

    public function about()
    {
        $data[''] = "";
        $this->load->view('v_about', $data);
    }

    public function paket()
    {
        $data['judul'] = "";
        $this->load->view('v_paket', $data);
    }

    public function contact()
    {
        $data['judul'] = "";
        $this->load->view('v_contact', $data);
    }

    public function gallery()
    {
        $data['judul'] = "";
        $this->load->view('v_gallery', $data);
    }

    public function login()
    {
        $data['judul'] = "";
        $this->load->view('v_login', $data);
    }
    public function register()
    {
        $data['judul'] = "";
        $this->load->view('v_register', $data);
    }
    public function terms()
    {
        $data['judul'] = "";
        $this->load->view('v_termandconditions', $data);
    }
    public function forgotp()
    {
        $data['judul'] = "";
        $this->load->view('v_forgotpassword', $data);
    }
}