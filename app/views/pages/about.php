<?php getHeader(); ?>
<div class="page-header">
  <h1>About <small>ORG Websites</small></h1>
  <p class="lead">We've helped many organizations begin to get the word out about their passion for helping.</p>
</div>
<div class="container">
  <div class="row">
    <h2>Our Mission:</h2>
    <p>To provide an affordable outlet to help non-profit organizations to quickly and easily get their message out to the masses.</p>

    <h2>Our Values:</h2>
    <ul>
      <li>We honor free speech</li>
      <li>We act with a servant's heart</li>
      <li>We strive for excellence</li>
      <li>We stand for individual rights and freedoms</li>
    </ul>

    <h2>About Us:</h2>
    <?php getComponent('aboutText'); ?>
  </div>
  <div class="row text-center">
    <h3>Get Started Now!</h3>
    <a href="./pricing" class="btn btn-primary btn-lg">Check out our Plans</a>
  </div>
</div>
<?php getShared('whatwedo'); ?>
<?php getFooter(); ?>
