<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="teacher.css" />
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <img src="usser.gif" />
        <span class="nav-item">Teacher</span>
      </div>
      <div class="greeting">
        <div id="greeting-message"></div>
        <div id="username"></div>
      </div>
    </div>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="wel_dash.php">
              <i class="fas fa-sharp fa-solid fa-gauge"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Complaints</span>
            </a>
          </li>
          <li>
            <a href="#" id="product_report">
              <i class="fas fa-database"></i>
              <span class="nav-item">Product Details</span>
            </a>
          </li>
          <li>
            <a href="#" id="product_report">
            <i class="fas fa-solid fa-user-pen"></i>
              <span class="nav-item">Add/Remove User</span>
            </a>
          </li>
          <li>
            <a href="../admin_dashboard/add_product.php" id="product-link">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Products</span>
            </a>
          </li>
          <li>
            <a href="../admin_dashboard/userdetails.php" id="user_details">
              <i class="fas fa-cog"></i>
              <span class="nav-item">User Details</span>
            </a>
          </li>
          <li>
            <a href="../login/login.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>
  </body>
</html>
