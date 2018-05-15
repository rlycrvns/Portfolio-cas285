      <form method="post" action="  " id="inquiryForm">
        <h2>Get in touch</h2>

        <p>
         <label for="name">Name</label>
          <input type="text" name="name" id="name" maxlength="30" minlength="2" type="text" required>
        </p>

        <p>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </p>

        <p>
          <label for="subject">Subject</label>
          <input type="text" name="subject" id="subject" maxlength="20" minlength="2" required>

        <p>
          <label for="message">Your message</label>
          <textarea name="message" id="message" rows="5" required></textarea>
        </p>

        <input class="submit" type="submit" value="Submit">
      </form>
<script>
$("#inquiryForm").validate();
</script>
