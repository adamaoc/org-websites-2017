<?php

class PricingModel
{
	public $pricing = array(
    'base' => array(
      'price' => '10.00',
      'title' => 'Special Offer',
      'details' => 'Base package to get you going!',
      'link' => 'offer',
      'list' => array(
        'Shared Web Hosting',
        'Basic WordPress install',
				'Premium Security Setup',
        'Intro to WordPress',
        'Choose between hundreds of templates'
      )
    ),
    'standard' => array(
      'price' => '25.00',
      'title' => 'Standard',
      'details' => 'Standard Package gives you more one-on-one time and a bigger foundation to start on.',
      'link' => 'package/standard',
      'list' => array(
        'Shared Web Hosting',
        'Basic WordPress install',
				'Premium Security Setup',
        'Standard 5 Page Setup',
        'One-on-one consulting',
        'Intro to WordPress',
        'Choose between hundreds of templates',
      )
    )
  );

  public function getPricingInfo()
  {
    return $this->pricing;
  }
}



// 'premium' => array(
//   'price' => '100.00',
//   'title' => 'Premium',
//   'details' => 'Make your site even more special with a custom design.',
//   'link' => 'package/premium',
//   'list' => array(
//     'Pro Web Hosting',
//     'Custom Design',
//     'Standard 5 Page Setup',
//     'One-on-one consulting',
//     'Intro to WordPress'
//   )
// ),
// 'platinum' => array(
//   'price' => '200.00',
//   'title' => 'Platinum',
//   'details' => 'Make your site even more ingaging with a custom design and our fastest web hosting plan.',
//   'link' => 'package/platinum',
//   'list' => array(
//     'Pro Web Hosting',
//     'Custom Design',
//     'Custom Plugins',
//     'Unlimited Pages',
//     'One-on-one consulting',
//     'Intro to WordPress'
//   )
// )
