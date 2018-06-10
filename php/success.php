<script>
$( function() {
  $( "#form-message" ).dialog({
    autoOpen: true,
    show: {
      effect: "blind",
      duration: 1000
    },
    hide: {
      effect: "explode",
      duration: 1000
    }
  });
} );
</script>
<div id="form-message" class="container-fluid">
  <h1>Message Sent!</h1>
  <p>I received the following:<br> Name:
    <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br> Email:
    <?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?><br> Message:
    <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?><br>
  </p>
</div>
