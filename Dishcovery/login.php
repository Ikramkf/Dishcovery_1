<?php
    session_start();
    if (isset($_SESSION["user"])){
        header("Location: index.php");
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="\Dishcovery\css\\style.css"/>

    <!-- Boxicons CSS-->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"
/>
  </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <?php
                        if (isset($_POST["login"])){
                            $email = $_POST["email"];
                            $password = $_POST["password"];
                            
                            require_once "database.php";

                            $sql = "SELECT * FROM users WHERE email = '$email'";

                            $result = mysqli_query($conn, $sql);
                            if ($result){
                                if (mysqli_num_rows($result) == 1) {
                                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    if (password_verify($password, $user["password"])) {

                                        session_start();

                                        $_SESSION["user"] = "yes";

                                        header("Location: index.php");
                                        die();
                                    } else {
                                        echo "<div class='alert alert-danger'>Incorrect password</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-danger'>Email does not match</div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger'> Query failed. </div>";
                            }
                    

                        }

                    ?>
                    <form action="login.php" method="post">
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class="bx bx-hide eye-icon"></i>
                        </div>

                        <div class="form-btn">
                            <input type="submit" class="btn btn-primary" value="Login" name="login">
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="registration.php" class="link signup-link">Sign Up</a></span>
                    </div>
                </div>

            </div>
        </section>
            <!-- JavaScript -->
            <script src="js/script.js"></script>
    </body>
</html>