<?php

class Package extends Controller
{
	public function index($package = null)
	{
		$pricingModel = $this->model('PricingModel');
		$brackets = $pricingModel->getPricingInfo();

    switch ($package) {
      case 'standard':
        $title = 'Standard Package';
				$offerList = $brackets['standard']['list'];
				$price = $brackets['standard']['price'];
        break;
      case 'premium':
        $title = 'Premium Package';
        break;
      case 'platinum':
        $title = 'Platinum Package';
        break;

      default:
        $title = 'Choose a Package';
        break;
    }
		$this->view('pages/package', array('title' => $title, 'list' => $offerList, 'price' => $price));
	}
}
