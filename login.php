<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />

  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title>
  <link rel="stylesheet" href="./dist/css/loginstyle.css" />
</head>

<body>
  <!-- partial:index.partial.html -->
  <?php
  $servername = "localhost";
  $database = "qespl";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];


    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$name' AND `password` = '$password'") or die(mysqli_error($errr));
    $fetch = mysqli_fetch_assoc($query);
    $row = mysqli_num_rows($query);

    if ($row > 0) {
      session_start();

      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $fetch["id"];
      $_SESSION["username"] = $fetch["username"];
      $_SESSION["user_al"] = $fetch["user_al"];


      header('location:index.php');
    } else {
  ?>
      <script>
        window.addEventListener('load', function() {
          swal({
              title: "Wrong",
              text: "Email or Password",
              icon: "error",
              button: "OK!",
            })
            .then((okey) => {
              if (okey) {
                window.location.href = "login.php";
              }
            });
        })
      </script>
  <?php

    }
  }
  ?>
  <section>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>

    <div class="signin">
      <div class="content">
        <div class="img_div"> <img class="login_logo" src="./dist/img/quick_logo_big.png"></div>

        <h2>Sign In</h2>
        <form action="" method="post" style="width: 90%">
          <div class="form">
            <div class="inputBox">
              <input type="text" name="name" required placeholder="User Name" /> 
            </div>

            <div class="inputBox">
              <input type="password" name="password" required placeholder="Password" /> 
            </div>



            <div class="inputBox">
              <input type="submit" name="submit" value="Login" />
            </div>

        </form>
      </div>
    </div>
    </div>
    <script defer src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </section>
  <!-- partial -->
</body>

</html>