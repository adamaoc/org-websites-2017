<?php getHeader(); ?>
<div class="page-header">
  <h1>Our Special Offer <small>making it simple and affordable</small></h1>
  <p class="lead">We've helped many organizations begin to get the word out with our easy and affordable $10 Offer.</p>
</div>
<div class="container">
  <div class="row" style="border-bottom: 1px solid #ddd;">
    <div class="col-md-5">
      <img src="./public/images/bens-heart-responsive.jpg" alt="Special Offer hero image" style="max-width:100%;" />
    </div>
    <div class="col-md-7">
      <?php getComponent('basicPricingAbout'); ?>
    </div>
  </div>
  <div class="row" style="border-bottom: 1px solid #ddd;">
    <p class="text-center">Use the button below to subscribe. <br>This will redirect you to our PayPal portal and give us the info we need to get in touch with you. </p>
    <?php getComponent('10button'); ?>
  </div>
  <div class="row">
    <h3 class="text-center">What you get:</h3>
    <ul class="center-list">
      <li>Provide your own domain</li>
    <?php foreach ($data['list'] as $value) : ?>
      <li><?= $value ?></li>
    <?php endforeach; ?>
    </ul>
    <h2 class="text-center">$<?= $data['price'] ?> <small>p/m subscription</small></h2>
  </div>
</div>
<?php getShared('whatwedo'); ?>
<?php getFooter(); ?>
