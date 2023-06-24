<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="popup.css">
    <style>
    .admin_popup,
    .teacher_popup,
    .student_popup {
        background: #fff;
        border-radius: 5px;
        max-width: 300px;
        text-align: center;
        margin: 70px auto;
        padding: 40px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>


    <div id="ssuccess-popup" class="student_popup" style="display: none;">
        <img src="../photoes/tick.gif" alt="Image Not found">
        <h2>Login Successful!</h2>
        <p>Welcome to Student page.</p>
    </div>
    <div id="tsuccess-popup" class="teacher_popup" style="display: none;">
        <img src="../photoes/tick.gif" alt="Image Not found">
        <h2>Login Successful!</h2>
        <p>Welcome to Teacher page.</p>
    </div>
    <div id="asuccess-popup" class="admin_popup" style="display: none;">
        <img src="../photoes/tick.gif" alt="Image Not found">
        <h2>Login Successful!</h2>
        <p>Welcome to Admin page.</p>
    </div>
    <div id="error-popup" style="display: none;">
        <img src="../photoes/wrong.gif" class="invalid" alt="Image Not found">
        <h2 class="incorrect">Incorrect <br>Email or Password</h2>
        <p>Please try again.</p>
    </div>

    <!-- PHP for the login popup -->
    <?php
    session_start();
    // Start the session

    include("../register/connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailQuery = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $emailExe = mysqli_query($con, $emailQuery);

    if (mysqli_num_rows($emailExe) > 0) {
        // Successful login
        $row = mysqli_fetch_assoc($emailExe);
        $userType = $row['role'];

        //last login time update
        $userId = $row['id'];
        $updateQuery = "UPDATE register SET last_login_time = CURRENT_TIMESTAMP WHERE id = $userId";
        mysqli_query($con, $updateQuery);

        // Store user information in session variables
        $_SESSION['user_id'] = $userId;
        $_SESSION['role'] = $userType;
        $_SESSION['user_name'] = $row['name'];

        // Redirect based on user type
        if ($userType == 'admin') {
            echo "<script>
                document.getElementById('asuccess-popup').style.display='block';
                setTimeout(function(){ 
                    window.location.href='../admin_dashboard/totalusers.php'; 
                }, 1600);
            </script>";
            exit(); // Stop further execution
        } elseif ($userType == 'teacher') {
            echo "<script>
                document.getElementById('tsuccess-popup').style.display='block';
                setTimeout(function(){ 
                    window.location.href='../teacher_dashboard/teacherdashboard.php'; 
                }, 1600);
            </script>";
            exit(); // Stop further execution
        } elseif ($userType == 'student') {
            echo "<script>
                document.getElementById('ssuccess-popup').style.display='block';
                setTimeout(function(){ 
                    window.location.href='../user_dashboard/homepage.php'; 
                }, 1600);
            </script>";
            exit(); // Stop further execution
        }
    } else {
        // Incorrect email or password
        echo "<script>
            document.getElementById('error-popup').style.display='block';
            setTimeout(function(){
                window.location.href='login.php'; 
            }, 1000);
        </script>";
        exit(); // Stop further execution
    }
    ?>

</body>

</html>

