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

<html>
<body>
    <form method="post">            
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"  name ="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        required>
    
    
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
        
        <a href="#" class="forget-pass">forgot Password?</a>
        <button type="submit" name="login">Submit</button>
    </form>

    <script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
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
 

</script>


    <div id="status">
    </div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>
</html>