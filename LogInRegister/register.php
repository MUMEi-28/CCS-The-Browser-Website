<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">

        <div class="box form-box">

        <?php
            include("php/config.php");

            if (isset($_POST["submit"])) {  // "submit" is lowercase to match the form input

                $username = $_POST["username"];
                $email = $_POST["email"];
                $age = $_POST["age"];
                $password = $_POST["password"];
                
                // Check if the email already exists
               // $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
                $verify_query = mysqli_query($conn, "SELECT Email FROM users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) 
                {
                    echo "<div class='message'>
                        <p>This email is already in use. Try another one!</p>
                    </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                } 
                else 
                {
                    // Hash the password before saving
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    // Insert the new user
                    $insert_query = "INSERT INTO users (Username, Email, Age, Password) 
                                     VALUES ('$username', '$email', '$age', '$hashed_password')";
                                     
                    mysqli_query($conn, $insert_query) or die("Error occurred");

                    echo "<div class='message'>
                              <p>Registration successful!</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
                }
            }
        ?>


            <h1>Register</h1>
            <form action="" method="post" autocomplete="off">

                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="LogIn" autocomplete="off" required>
                </div>

                <div class="links">
                    Already a member? <a href="logIn.php">Sign In</a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
