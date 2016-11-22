<?php

class Home extends Controller
{
	public function index($post = null)
	{
		$this->view('pages/homepage');
	}
}
