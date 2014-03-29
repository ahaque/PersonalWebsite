<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$privkey = "6Lfj2PASAAAAAIUgOSXdELQh4pKJPHy8rNE13JMc "; // Private API Key
$verify = recaptcha_check_answer($privkey, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);

if ($verify->is_valid) {
  # Enter Success Code
  echo "albert.haque@live.com";
}
else {
  # Enter Failure Code
  echo "You did not enter the correct words.  Please try again.";
}
?>