<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>02 - Form
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body style="">
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--4" style="background:rgba(255,255,255,0.9);color:#000;">
		<?php

		if (isset($_POST['fname'])) {

			echo "<div style=\"text-align:center;font-size:7em;\">Hello, " . $_POST['fname'] . " </div>";

		}
		else{

			echo '<form name="myForm" action="index.php" onsubmit="return validateForm()" method="post">
			<div class="siimple-form">
			<div class="siimple-form-title">Send a comment</div>
			<div class="siimple-form-detail">Fill the form to contact us.</div>
			<div class="siimple-form-field">
				<div class="siimple-form-field-label">Your name</div>
				<input type="text" class="siimple-input siimple-input--fluid" placeholder="Your name" name="fname" >
			</div>
			<div class="siimple-form-field">
				<input class="siimple-btn siimple-btn--blue" type="submit"  value="Send">
			</div>
			</div>
			</form>';

		}

?>
        </div>
      </div>
    </div>
	<script>
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
	</script>
  </body>
</html>
