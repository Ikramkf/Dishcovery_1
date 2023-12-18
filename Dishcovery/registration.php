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
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register</title>

            <!-- CSS -->
            <link rel="stylesheet" href="\Dishcovery\css\\style.css">

            <!-- Boxicons CSS -->
            <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    
                            
        </head>
        <body>
            <section class="container forms">
                <div class="form login">
                    <div class="form-content">
                        <header>Register</header>
                        <?php
                            if(isset($_POST["submit"])){
                                $fullName = $_POST["fullname"];
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                $confirmPassword = $_POST["confirm_password"];

                                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                                $errors = array();

                                if (empty($fullName) OR empty($email) OR empty($password) OR empty($confirmPassword)){
                                    array_push($errors,"All fields are required");

                                }
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    array_push($errors,"Email must be a valid email");
                                }
                                if(strlen($password)<8){
                                    array_push($errors,"Password must be at least 8 characters");
                                }
                                if($password !== $confirmPassword){
                                    array_push($errors,"Password does not match");
                                }

                                require_once "database.php";
                                $sql = "SELECT * FROM users WHERE email = '$email'";
                                $result = mysqli_query($conn, $sql);
                                $rowCount = mysqli_num_rows($result);
                                
                                if( $rowCount > 0 ){
                                    array_push($errors,"Email already exists");
                                }
                                
                                if(count($errors)>0){
                                    foreach($errors as $error){
                                        echo "<div class='alert alert-danger'>$error</div>";
                                    }
                                }
                                else{
                                    $sql = "INSERT INTO users(full_name, email, password) VALUES
                                    (?, ?, ?)";
                                    $stmt = mysqli_stmt_init($conn);
                                    $preparestmt = mysqli_stmt_prepare($stmt, $sql);

                                    if($preparestmt){
                                        mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                                        mysqli_stmt_execute($stmt);
                                        echo "<div class='alert alert-success'>Registration successful</div>";
                                    }
                                    else {
                                        die("Something went wrong");
                                        echo "<div class='alert alert-danger'>Registration failed</div>";
                                    }

                                }
                                

                            }
                        ?>
                        <form action="registration.php" method="post">
                            <div class="field input-field">
                                <input type="text" name="fullname" placeholder="Full Name: " class="input">
                            </div>
                            
                            <div class="field input-field">
                                <input type="email" name="email" placeholder="Email: " class="input">
                            </div>

                            <div class="field input-field">
                                <input type="password" name="password" placeholder="Password: " class="password">
                                <i class="bx bx-hide eye-icon"></i>
                            </div>
                            <div class="field input-field">
                                <input type="password" name="confirm_password" placeholder="Confirm Password: " class="password">
                            </div>

                            <div class="form-btn">
                                <input type="submit" value="Register" name="submit">
                            </div>
                        </form>

                        <div class="form-link">
                            <span>Already have an account? <a href="login.php" class="link login-link">Login</a></span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- JavaScript -->
            <script src="js/script.js"></script>


            
        </body>
    </html>
    