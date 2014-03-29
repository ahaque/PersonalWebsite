<html>
<head>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<!-- Wrapping the Recaptcha create method in a javascript function -->
<script type="text/javascript">
   function showRecaptcha(element) {
     Recaptcha.create("6Lfj2PASAAAAAMuGj1RCF6ZDcunHB2f5Ec9BHLtl", element, {
       theme: "red",
       callback: Recaptcha.focus_response_field});
   }
</script>
</head>

<body>
<div id="recaptcha_div"></div>
<input type="button" value="New reCAPTCHA" onclick="showRecaptcha('recaptcha_success');"></input>

<div id="recaptcha_success">albert.haque@live.com</div>

<br><br>
<form method="post" action="check.php">
<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$pubkey = "6Lfj2PASAAAAAMuGj1RCF6ZDcunHB2f5Ec9BHLtl"; // Public API Key
echo recaptcha_get_html($pubkey); // Display reCAPTCHA
?>
<input type="submit" value="Check" />
</form>

</body>


</html>