<?php getHeader(); ?>
<div class="page-header">
  <h1>Contact Us <small>let us know your thoughts</small></h1>
</div>
<div class="container">
  <div class="row">
    <p>Interested in getting a more customized website or just have more questions about who we are and what we do, feel free to shoot us a message here.</p>

    <div class="alert alert-danger" role="alert" style="display:none;" id="sendError">
      Oops, there seems to have been a problem. Make sure you filled everything out correctly and try again.
    </div>
    <?php getComponent('contactForm'); ?>
    <div class="alert alert-success" style="display:none;" id="sendSuccess">
      <p>Thanks, we'll be getting back to you ASAP!</p>
    </div>
  </div>
</div>
<script>
  var hash = window.location.hash;
  switch (hash) {
    case '#error':
    case '#sendError':
      // show error alert
      var sendErrorElement = document.getElementById('sendError');
      sendErrorElement.style.display = 'block';
      break;
    case '#success':
      // hide form //
      var contactForm = document.getElementById('contactForm');
      contactForm.style.display = 'none';
      // show success message //
      var sendSuccessElement = document.getElementById('sendSuccess');
      sendSuccessElement.style.display = 'block';
      break;
    default:

  }
</script>
<?php getFooter(); ?>
