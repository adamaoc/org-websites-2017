<?php getHeader(); ?>
<div class="page-header">
  <h1>Pricing <small>pick a package</small></h1>
  <p class="lead">Be sure and also check out our $10 Offer!</p>
</div>
<div class="container">
  <div class="row">
    <h2>What will it cost to get your website up and running?</h2>
    <div class="max-width">
      <p>At ORG-Websites, we know how difficult it is to manage money for non-profits. You want as much going back out as you're taking in and sometimes a beautiful website is way down on your list. We want to make it as cheap and easy to get you started. All of our packages include at least one scheduled one-on-one consultation to help share our knowledge with you. Web sites are based on the WordPress platform, unless otherwise specified with the Platinum package, and we provide an introduction video to help get you started off right!</p>
      <p>Check out our pricing lists below and if you have any questions please do not hesitate to shoot us an email.</p>
      <p>Thanks.</p>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-sm-6 col-md-3"><?php getComponent('pricingBox', $data['base']); ?></div>
    <div class="col-sm-6 col-md-3"><?php getComponent('pricingBox', $data['standard']); ?></div>
  </div>
  <div class="row text-center">
    <p>Make sure you read our <a href="./terms">Terms of Service</a> as we reserve the right to take your site down if we feel you've violated them.</p>
  </div>
  <div class="container">
    <div class="row">
      <h2>Interested in something more custom?</h2>
      <div class="max-width">
        <p>If you're interested in something a little more custom we can handle that as well. Please feel free to contact us via our <a href="./contact">contact form</a> and we'll have a conversation about what you need.</p>
      </div>
    </div>
</div>
<?php getFooter(); ?>
