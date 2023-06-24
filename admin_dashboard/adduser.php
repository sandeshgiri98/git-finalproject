<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../register/userregister.css">
  <style>
    .error {
      display: none;
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }

    .error.active {
      display: block;
      border-radius: 3px;
      border-color: red;
    }
  </style>
</head>
<body>
    <?php
    include('dashboard.php')
    ?>
  <div class="form-content">
    <form id="registration-form" action="user_redirect.php" method="POST" onsubmit="return validateForm()">
      <h3>Add User</h3>
      
      <div class="textfield">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter Your Name">
        <div class="error" id="name-error">Please enter a valid name</div>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter Your Email">
        <div class="error" id="email-error">Please enter a valid email address</div>

        <label for="contact">Contact No</label>
        <input type="tel" id="contact" name="contact" required placeholder="Enter Your Phone Number">
        <div class="error" id="contact-error">Please enter a valid phone number</div>

        <label for="dob">Date of birth</label>
        <input type="date" id="dob" name="dob" required>
        <div class="error" id="dob-error">Please enter your date of birth</div>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Password">
        <div class="error" id="password-error">Use at least 8 characters with special characters like @, !, or # and numbers like 1, 2, or 3</div>
        
        <label for="repassword">Repassword</label>
        <input type="password" id="repassword" name="repassword" required placeholder="Confirm your password">
        <div class="error" id="repassword-error">Password and Repassword doesn't match.</div>
      
        <label for="role">Role</label>
        <select name="role" id="role" class="roles" required>
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="admin">Admin</option>
        </select>
        
      </div>
      <input type="submit" name="submit" value="Add User" class="form-button">
    </form>
  </div>
  <script src="user-validation.js"></script>
  


  </script>
    </body>
    </html>