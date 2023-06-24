<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Users</title>
</head>

<body>
    <?php
    include_once('dashboard.php');
    ?>
    <div class="main">
        <?php
        include_once('connection.php');
    $sql = "SELECT COUNT(*) AS total_users FROM register";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalUsers = $row["total_users"];
    } else {
        $totalUsers = 0;
    }
    
    // Step 3: Close the database conection
    mysqli_close($con);
    ?>
        <h1>Total Users: <?php echo $totalUsers; ?></h1>
    </div>

</body>

</html>