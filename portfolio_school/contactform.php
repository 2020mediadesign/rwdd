<?PHP
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");
$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');
$formproc->EnableCaptcha($captcha);
$formproc->AddRecipient('thomas@2020mediadesign.com'); //<<---email address
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');
$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
   $formproc->RedirectToURL("thank-you.php");
   }
}
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Thomas Ryan</title>
<link href="style/contact_style.css" rel="stylesheet" type="text/css">
<!-- Include Print CSS -->
<link rel="stylesheet" href="style/print.css" type="text/css" media="print" />
<script type='text/javascript' src='js/gen_validatorv31.js'></script>
<script type='text/javascript' src='js/fg_captcha_validator.js'></script>
<link href="favicon.ico" rel="SHORTCUT ICON" />
</head>

<body>

<h1><span>Thomas Ryan</span></h1>

<div id="container">

<table cellspacing="0" class="contactTable">
<tbody><tr><td class="contact1a">&nbsp;</td><td colspan="2"></td></tr>
<tr>
<td class="contact1">

<div class="contactMessage"><strong>Hello Guv'nor!.</strong></div>
<img src="images/contact_me.jpg" class="mainImage">

</td>
<td class="contact2">

<p><span>763 X-Campbell Rd.Pittsboro, NC 27312</span>
<p><span><a href="mailto:thomas@2020mediadesign.com">thomas@2020mediadesign.com</a>
</span>
</p>
<p><span><a href="http://twitter.com/RyanMediaGroup">Twitter: @RyanMediaGroup </a>
</span>
</p></td>
<td class="homeNav">
<ul>
<li><a href="ThomasRyan.htm">Home</a></li>
<li><a href="about_me.html">About Me</a></li>
<li><a href="contactform.php">Contact</a>*</li>
</ul>
</td>
</tr>
<tr>
<td class="contact1a">&nbsp;</td>
<td colspan="2"></td></tr>
</tbody>
</table>

<div style="clear: both">
</div>
</div>
<br>
<br>
<div id="container1">


    <p class="section">Contact us or leave a comment:</p>
    <p class="section">&nbsp; </p>
<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'
enctype="multipart/form-data">

<fieldset >
<legend></legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container'>
    <label for='photo' >File Upload:</label><br/>
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>
<div class='container'>
    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>
	<br class="clear" />
    <p class="pstatement"><a href="terms_and_conditions.html">Privacy/Terms of use statment</a></p>
  </div>

<div style="clear: both">
</div>
</div>


</body>
</html>