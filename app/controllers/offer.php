<?php

class Offer extends Controller
{
	public function index()
	{
		$pricingModel = $this->model('PricingModel');
		$brackets = $pricingModel->getPricingInfo();
		$this->view('pages/offer', array(
																'list' => $brackets['base']['list'],
																'price' => $brackets['base']['price']
															));
	}
}
