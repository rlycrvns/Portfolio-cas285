
<form method="post" action="  " id="inquiryForm">
  <div class="form-group">
   <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" id="name" type="text" required>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <small id="emailHelp" class="form-text text-muted">I will never share your email with anyone else.</small>
    <input class="form-control" type="email" name="email" id="email" required>
  </div>

  <div class="form-group">
    <label for="subject">Subject:</label>
    <input class="form-control" type="text" name="subject" id="subject" required>
  </div>

  <div class="form-group">
    <label for="message"></label>
    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message..." required></textarea>
  </div>

  <input id="submit-button" class="submit btn btn-dark" type="submit" value="Submit">
  <br>
  <br>
</form>
<script>
$(document).ready(function () {
  $("#inquiryForm").validate();
});
</script>
