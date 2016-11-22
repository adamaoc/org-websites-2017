<?php

class Pricing extends Controller
{
	public function index()
	{
		$pricingModel = $this->model('PricingModel');
		$brackets = $pricingModel->getPricingInfo();

		$this->view('pages/pricing', $brackets);
	}
}
