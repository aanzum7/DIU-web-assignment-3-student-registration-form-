<?php 
  include('insert.php') 
?>
<html>
<head>
  <title>Registration Form</title>
  <link rel = "stylesheet"
   type = "text/css"
   href = "form.css"/>
</head>
<body>
     <div class="container">  
  <form id="contact" action="home.php" method="post">
    <h3>Student Registration</h3>
    <h4>Register here,If you are not registered yet</h4>
   
    <fieldset>
      <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="name" placeholder="Username" value="<?php echo $name; ?>"required>
    <?php if (isset($name_error)): ?>
      <span><?php echo $name_error; ?></span>
    <?php endif ?>
    </div>
    </fieldset>

    <fieldset>
     <div <?php if (isset($id_error)): ?> class="form_error" <?php endif ?> >
      <input type="text" name="id" placeholder="Student Id" value="<?php echo $id; ?>"required>
      <?php if (isset($id_error)): ?>
        <span><?php echo $id_error; ?></span>
      <?php endif ?>
    </div>
    </fieldset>


    <fieldset>
      <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"required>
      <?php if (isset($email_error)): ?>
        <span><?php echo $email_error; ?></span>
      <?php endif ?>
    </div>
    </fieldset>


    <fieldset>
      <div <?php if (isset($phone_error)): ?> class="form_error" <?php endif ?> >
      <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"required>
      <?php if (isset($phone_error)): ?>
        <span><?php echo $phone_error; ?></span>
      <?php endif ?>
    </div>
    <fieldset>
      <select name="slot" class="slots">
        <option value="slot 1">Slot:1- 8am To 10pm</option>
        <option value="slot 2">Slot:2- 11am To 1pm</option>
        <option value="slot 3">Slot:3- 2pm To 4pm</option>
      </select>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Register</button> 
    </fieldset>



    <fieldset>
      <div class="footer">
        <p>all rights reserved by @VEER IT.<i class="fa fa-heart-o"></i></p>
    </div>  
    </fieldset>

  </form>
</div>
</body>
</html>

 

  
