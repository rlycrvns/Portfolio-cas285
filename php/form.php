<form method="post" action="" id="inquiryForm">
  <div class="row">
    <div class="form-group col-md">
      <label for="name">Name:</label>
      <input class="form-control" type="text" name="name" id="name" required>
    </div>

    <div class="form-group col-md">
      <label for="email">Email:</label>
      <input class="form-control" type="email" name="email" id="email" placeholder="I will never share your email with anyone." required>
    </div>
</div>
  <div class="form-group">
    <label for="message"></label>
    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message..." required></textarea>
  </div>

  <input id="submit-button" class="submit btn btn-dark" type="submit" value="Submit">
  <br>
  <br>
</form>
