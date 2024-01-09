<?php
class Project extends CI_controller
{
    public function runner()
    {

        $this->load->view('common/login');
    }
    public function sign()
    {
        $this->load->view('register');
    }
    public function registry()
    {
        $this->load->view('register.php');
    }
    public function header()
    {
        $this->load->view('common/header.php');
    }
    public function home()
    {
        $this->load->view('common/mini.php');
    }
    public function login()
    {
        $this->load->view('common/login.php');
    }
    public function result()
    {
        $this->load->view('common/form.php');
    }
    public function about()
    {
        $this->load->view('common/about.php');
    }
    public function gallery()
    {
        $this->load->view('common/gallery.php');
    }
    public function form()
    {
        $this->load->view('data.php');
    }
    public function contact()
    {
        $this->load->view('common/contact.php');
    }
    public function head()
    {
        $this->load->view('common/head.php');
    }
}

?>