<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title></title>
		</head>
	<body>

		<?php
		  include('./partials/navbar.php');
		?>


<div class="tab-pane" id="paginaFormulario" role="tabpanel">
	<div class="container">
		<form>
		                <div class="form-group row">
		                  <div class="col-sm-2">
												  <label for="exampleFormControlInput1">Email:</label>
		                    </div>

		                    <div class="col-sm-10 col-lg-4 ">
		                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
		                    </div>

		                    <div class="col-sm-12">
		                      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email.</small>
		                    </div>
		                  </div>

		                  <div class="form-group row col-form-label">

		                  <div class="col-sm-2">
		                    <label for="exampleFormControlTextarea1">Nombre:</label>
		                  </div>
		                  <div class="col-sm-10 col-lg-4">
		                    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Roberte">
		                  </div>
		                </div>


		                <div class="form-group row col-form-label">

		                  <div class="col-sm-2">
		                    <label for="exampleFormControlTextarea1">Saludo:</label>
		                  </div>

		                  <div class="col-sm-10 col-lg-7">
		                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="qué hacé turbina!" style="resize:none;"></textarea>
		                  </div>
		                </div>

		                <div class="form-group row col-form-label">

		                  <div class="col-sm-2">
		                   <label for="exampleFormControlTextarea1">Aclaraciones:</label>
		                  </div>

		                  <div class="col-sm-10 col-lg-7">
		                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contexto en que se usa, forma de contestarlo, o cualquier otra aclaración." style="resize:none;"></textarea>
		                  </div>
		                </div>


		                <button type="submit" class="btn btn-primary" id="botonSubmitFormulario">Enviar mi saludo!</button>

  </form>
 </div>
</div>
<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://facebook.us19.list-manage.com/subscribe/post?u=c88e7cde78f6a0935c89e8720&amp;id=451d170c9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group size1of2">
	<label for="mce-BIRTHDAY-month">Birthday </label>
	<div class="datefield">
		<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> /
		<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span>
		<span class="small-meta nowrap">( mm / dd )</span>
	</div>
</div>	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c88e7cde78f6a0935c89e8720_451d170c9a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
