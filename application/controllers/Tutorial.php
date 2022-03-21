<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Tutorial::index',
            'content' => 'Hello Index'
        );
        $this->load->view('Tutorial/header', $data);
        $this->load->view('Tutorial/content', $data);
        $this->load->view('Tutorial/footer', $data);
    }

    public function second()
    {
        $data = array(
            'title' => 'Tutorial::second',
            'content' => 'Hello Second'
        );

        $this->load->view('Tutorial/header', $data); // view/Tutorial 에 header.php
        $this->load->view('Tutorial/content', $data); // view/Tutorial 에 content.php
        $this->load->view('Tutorial/footer', $data);  // view/Tutorial 에 footer.php
    }
}

