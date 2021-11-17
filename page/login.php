<?php

require 'dbconnection.php';
if (isset($_POST['email']) and isset($_POST['pass']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM users WHERE email='$email' AND userpass='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['name']=$row["fname"];
        }
      }
    if ($count == 1){
        $_SESSION['loggedin']=TRUE;
        $_SESSION['email'] = $email;
        //header('location: user-profile.php');
        echo "<script>alert('Successfully loggedin for your Profile')</script>"; 
    
        echo '<script>';
        echo 'window.location.href = "user-profile.php";';
        echo '</script>'; 
    
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
        
    echo '<script>';
    echo 'window.location.href = "index.php";';
    echo '</script>';
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../css/style3.css" rel="stylesheet" type="text/css">
    
    <link href="https://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- <link href="../css/style.css" rel="stylesheet" type="text/css"> -->
    <style>
        .text-section {
            position: absolute;
            text-align: left;
            width: 45%;
            top: 12.5%;
            left: 48%;
            font-family: Myriad Pro;
            display:inline-block;
            -webkit-transform:scaleX(1.1); /* Safari and Chrome */
            -moz-transform:scaleX(1.1); /* Firefox */
            -ms-transform:scaleX(1.1); /* IE 9 */
            -o-transform:scaleX(1.1); /* Opera */
            transform:scaleX(1.1);
        }

        .third-line {
            padding: 0px;
            margin-top: 0vh;
            margin-bottom: 0.5rem;
            line-height: 1.2;
            font-size: 2.2801302931596092vw; /*35 px*/
            color: #000000;
            font-weight: bold;
        }

        /* @media  screen and (max-width: 1200px), screen and (max-height: 700px) {
            .text-section{
                position: absolute;
                top: 59%;
                left: 10%;
            }
        } */
    </style>
    <title>Login Employee - ERP</title>
</head>

<body>
    <img id="welcomePageImg" src="../images/Login(Employee).jpg">
    <div class="text-section">
        <div class="third-line">
            Welcome to the My Digital Dude's family<br>
            as an Employee.
        </div>
    </div>
    <div class="form login">
        <div class="form-title">
            <h1>Login</h1>
        </div>

        <div class="form-content">
            <h1>Username</h1>
            <i class="fa fa-id-badge fa-2x"></i>
            <input type="text" name="username" id="username" placeholder="Enter your Username">
        
            <h1>Password</h1>
            <i class="fa fa-lock fa-2x"></i>
            <input type="password" name="password" id="password" placeholder="Enter your Password">
        
            <!-- <input type="checkbox" id="ForgotPasswordLink" name="ForgotPasswordLink" value="true"> -->
            <div class="ForgotPassword"><label for="ForgotPasswordLink"><a href="" class="ForgotPasswordLink">Forgot Password?</a></label></div>
        
            <button type="submit" name="login" value="submit">Login</button>
            
            <p>Or Sign up using</p>
            <!-- <div class="links">
                <div class="flex-item" style="align-items: right;"><a href="#" class="icons fab fa-facebook"></a></div>
                <div class="flex-item" style="align-items: center;"><a href="#" class="icons fab fa-google-plus-g"></a></div>
                <div class="flex-item" style="align-items: left;"><a href="#" class="icons fab fa-twitter"></a></div>
            </div> -->
            <script>

            function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
                console.log('statusChangeCallback');
                console.log(response);                   // The current login status of the person.
                if (response.status === 'connected') {   // Logged into your webpage and Facebook.
                    document.getElementById('logout').style.display = 'block';
                } else {                                 // Not logged into your webpage or we are unable to tell.
                console.log("logged in");
                }
            }

            window.fbAsyncInit = function() {
                FB.init({
                appId      : '148900780766390',
                cookie     : true,                     // Enable cookies to allow the server to access the session.
                xfbml      : true,                     // Parse social plugins on this webpage.
                version    : 'v12.0'           // Use this Graph API version for this call.
                });


                FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
                statusChangeCallback(response);        // Returns the login status.
                });
            };

            function loginUsingFacebook(){
                FB.login(function(response) {
                    console.log(response);
                    if (response.status === 'connected') {
                        document.getElementById('logout').style.display = 'block';
                    } else {
                    // The person is not logged into your webpage or we are unable to tell. 
                    }
                }, {scope: 'public_profile,email'});
            }

            function logout(){
                FB.logout(function(response) {
                    // Person is now logged out
                });
            }
            </script>

            <div class="links">
                <a href="#" onclick="loginUsingFacebook();" class="icons fab fa-facebook"></a>
                <a href="#" class="icons fab fa-google-plus-g"></a>
                <a href="#" class="icons fab fa-twitter"></a>
                <a id="logout" href="login.php" onclick="logout();" class="icons">logout</a>
            </div>
        </div>   
    </div>

    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>

</html>