
<html>
	<head>
			<title>Sign Up</title>
	</head>
	<body>

<?php //$this->load->view('includes/header'); ?>

<h1>Create an Account!</h1>
<fieldset>
<legend>Personal Information</legend>
<?php
   
echo form_open('verifylogin/create_member2');

echo form_input('first_name', set_value('first_name', 'First Name'));
echo form_input('last_name', set_value('last_name', 'Last Name'));
echo form_input('email_address', set_value('email_address', 'Email Address'));
?>
</fieldset>

<fieldset>
<legend>Login Info</legend>
<?php
echo form_input('username', set_value('username', 'Username'));
echo form_input('password', set_value('password', 'Password'));
echo form_input('password2', 'Password Confirm');

echo '<br>';
echo form_submit('submit', 'Create Acccount');
?>

<?php //echo validation_errors('<p class="error">'); ?>
</fieldset>

<?php //$this->load->view('includes/tut_info'); ?>

<?php // $this->load->view('includes/footer'); ?>



</body>
</html>