<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
1036367419391-54d05je4ddpgf46p5nmg6qicre6vhipv.apps.googleusercontent.com
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleep Tracker</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer>
      gapi.load('auth2',function(){
        gapi.auth2.init();
      });
    </script>
      gapi.load('auth2',function(){
        gapi.auth2.init();
      });
    <meta name="google-signin-client_id" content="1036367419391-54d05je4ddpgf46p5nmg6qicre6vhipv.apps.googleusercontent.com">

</head>

<body>
    <header>
        <img src="assets/Logo.png" alt="Not Available">
        <a href="#" class="logo">SLEEPTRACKER</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
    </header>
    <div class="container">
        <div class="card" id="card1">
            <h1>Plan your Sleep and Control your progress with us online</h1>
            <img src="assets/image1.jpg" alt="Not Available" id="logo2">
        </div>
        <div class="card" id="card2">
            <h1>Sign-Up</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

                <div id="upperInput" class="form-group">
                    <label for="name" class="label">FULL NAME : </label>
                      <input type="text" placeholder="Enter your full name" name="name" id="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                      <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label for="email" class="label">MAIL ADDRESS : </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div>
                    <label for="pass" class="label">PASSWORD : </label>
                    <input type="password" name="password" id="pass" placeholder="Enter Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <button id="btn-signUp" class="btn" onclick="login_signUp()">Sign-Up</button>
                <button id="btn-Login" class="btn" onclick="signUP_login()">Login</button>
            </form>
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        <div class="card" id="card3">
            <h1>Why <span id="span1">SLEEP TRACKER</span>?</h1>
            <p>
                Sleep is an essential function1 that allows your body and mind to recharge, leaving you refreshed and alert when you wake up. Healthy sleep also helps the body remain healthy and stave off diseases. Without enough sleep, the brain cannot function properly. This can impair your abilities to concentrate, think clearly, and process memories.
            </p>
            <p>
                Most adults require between seven and nine hours3 of nightly sleep. Children and teenagers need substantially more sleep, particularly if they are younger than five years of age. Work schedules, day-to-day stressors, a disruptive bedroom environment, and medical conditions can all prevent us from receiving enough sleep. A healthy diet and positive lifestyle habits can help ensure an adequate amount of sleep each night – but for some, chronic lack of sleep may be the first sign of a sleep disorder.
            </p>
        </div>
        <div class="card" id="card4">
            <img src="assets/image2.png" alt="Not Available" id="logo3">
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
