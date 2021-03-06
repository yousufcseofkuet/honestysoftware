<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Welcome to honesty software";
        $this->load->view('home', $data);
    }

    public function aboutus() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "About us";
        $this->load->view('header', $data);
        $this->load->view('about', $data);
    }

    public function career() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Career";
        $this->load->view('header', $data);
        $this->load->view('career', $data);
    }

    public function threecolumn() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Domain hosting  | Price";
        $this->load->view('header', $data);
        $this->load->view('pricing-threecol', $data);
    }

    public function blog() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Blog";
        $this->load->view('header', $data);
        $this->load->view('blog', $data);
    }

    public function services() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Our services";
        $this->load->view('header', $data);
        $this->load->view('services', $data);
    }

    public function process() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Our Process";
        $this->load->view('header', $data);
        $this->load->view('process', $data);
    }

    public function contact() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Contact with us";
        $name = $this->input->post('name');
        $phn = $this->input->post('phone');
        $email = $this->input->post('email');
        $data['name'] = $name;
        $data['phn'] = $phn;
        $data['email'] = $email;
        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('phn', $phn);
        $this->session->set_userdata('email', $email);
        $data['saved'] = '';
        $this->load->view('header', $data);
        $this->load->view('contact', $data);
    }

    public function projectfourcol() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('project-fourcol', $data);
    }

    public function projectthreecol() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('project-threecol', $data);
    }

    public function sendmail() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Sent mail";
        $name = $this->input->post('name');
        $phn = $this->input->post('phone');
        $email = $this->input->post('email');
        $sub = $this->input->post('subject');
        $msg = $this->input->post('message');
        $this->load->library('email');
        $this->email->from($email, $name);
        $this->email->to('yousuf.gdls@gmail.com');
        $this->email->cc('sajidkhan382067@gmail.com');
        $this->email->subject($sub);
        $this->email->message($msg . $phn);
        $relt = $this->email->send();
        $saved = "Your mail sent successfully. Thank you for contact with us";
        $this->session->set_userdata('saved', $saved);
        $this->load->view('header', $data);
        $this->load->view('contact', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */