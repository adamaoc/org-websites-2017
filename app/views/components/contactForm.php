<form action="/post/" method="post" id="contactForm">
  <div class="form-group">
    <label for="contactName">Full Name</label>
    <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="contactEmail">Email address</label>
    <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Your message</label>
    <textarea class="form-control" rows="3" name="message"></textarea>
  </div>
  <div style="display: none;">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="flag">
    <p>Humans: please leave this field blank.</p>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>
