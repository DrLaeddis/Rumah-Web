<?php

class Index extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view frontpage/index.php
        $this->load->view("frontpage/index");
	}
}