<?php

class halaman_utama extends CI_Controller {


function php() {
$this->load->view('konten');
}
function css() {
$this->load->view('css');
}
function javascript() {
$this->load->view('page_javascript');
}

function codeigniter() {
$this->load->view('page_codeigniter');
}

function html5() {
$this->load->view('page_html5');
}

function mysql() {
$this->load->view('page_mysql');
}

function mailget() {
$this->load->view('page_mailget');
}
function others() {
$this->load->view('page_others');
}
}
?>