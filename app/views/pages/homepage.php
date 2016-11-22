<?php getHeader(); ?>
<div class="jumbotron block-bg--light-gray">
  <div class="container">
    <h1>Make a difference
      <br><span class="text-uppercase">ORG Websites</span></h1>
    <p class="jumbotron-p">We make Non-Profit websites that are beautiful, simple, and affordable.</p>
    <p><a class="btn btn-primary btn-lg" href="/offer" role="button">Learn more about our $10 Offer!</a></p>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <h2>About Our $10/per month Websites</h2>
    <div class="max-center">
      <?php getComponent('basicPricingAbout'); ?>
    </div>
  </div>
</div>

<?php getShared('whatwedo'); ?>

<div class="container">
  <div class="row text-center">
    <h2>More About ORG Websites</h2>
    <div class="max-center">
      <?php getComponent('aboutText'); ?>
    </div>
  </div>
</div>
<div class="container-fluid contact-wrap">
  <div class="row max-center max-center--lg text-center">
    <h2>Create your new blog or website now!</h2>
    <div>
      <a class="btn btn-primary btn-lg" href="/pricing" role="button">Get Started!</a>
      <a class="btn btn-default btn-lg" href="/contact" role="button">Contact Us</a>
    </div>
  </div>
</div>
<?php getFooter(); ?>
