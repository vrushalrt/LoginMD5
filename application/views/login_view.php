<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>

   <h1>Login with CodeIgniter</h1>
   
   <?php echo validation_errors(); ?>
   
   <?php echo form_open('verifylogin'); ?>

     <label>Username:</label>
     <input type="text" size="20" name="username" class="input"/>
     <br/>
     <label>Password:</label>
     <input type="password" size="20" name="password" class="input" />
     <br/>
     <input type="submit" value="Sign In" name="submit" class="submit" />
    <?php echo anchor('verifylogin/signup', 'Create Account'); ?>
     
   <?php echo form_close(); ?>

 </body>
</html>