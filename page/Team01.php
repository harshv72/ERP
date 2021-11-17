<?php

 require 'dbconnection.php';
 $email=$_SESSION['email'];
 if(!isset($_SESSION['email']))
 {
  echo "<script>alert('URL NOT FOUND')</script>"; 
  echo '<script>';
  echo 'window.location.href = "index.php";';
  echo '</script>';

 }
 else{
 $query = "SELECT * FROM users WHERE email = '$email' ";
 $result = mysqli_query($con, $query);
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $name=$row["fname"].' ' . $row['lname'];
      $designation = $row['designation'];
      $profilephoto = $row['profilephoto'];
      $availibility_status = $row['availibility_status'];
      $user_id = $row['id'];
      $availibility_status_last_updated_on = $row['availibility_status_last_updated_on'];
    }
  } 
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <title>Team01</title>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark d-flex flex-row" style="background-color: black; width: 100%;">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="../images/logo.png" alt="My Digital Dudes">
            </a>
        </div>
        <div class="container-fluid">
            <div class="d-flex flex-row justify-content-center bd-highlight"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- <a class="navbar-brand" href="#">
                            <img src="../images/logo.png" alt="My Digital Dudes" height="30px" width="20px">
                        </a> -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Interns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn btn-outline-success">Contact Us</button></a>
                        </li>    
                    </ul>
                </div>
            </div>
        </div>
    </nav>
  
    <div class="navbar-spacer">
        &nbsp;
    </div>
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/logo.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/logo.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/logo.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/logo.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fourth slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    
    <div class="container justify-content-center">
    
        <div class="services">
          
            <p>Performance</p>
            <div class="row" style="width: 80%;margin-left: 100px;">
            
                <div class="col"  width="100%">
                  
                    <div class="d-flex flex-column bd-highlight mb-3" style="padding-top: 0px;padding-bottom: 0px;" >
                        <div class="p bd-highlight" style="display: flex;justify-content: center; margin-bottom: 0px; margin-top: 0px;">
                          <div class="card mb-2" style="max-width: 80%;height: 100%; background-color: white; border: none;z-index: -2;">
                            <div class="row g-0">
                              <div class="col-md-3">
                                <div class="img-leaf" style="position:absolute;top:0px;left: 20px;background-color: #8ACFB3;width:200px;height:200px;border-radius: 0px 500px 500px 500px;z-index: -1;"></div>
                                <img src="<?php echo $profilephoto; ?>" class="img-fluid" style="position:absolute;top:10px;left:30px;width:200px;height:200px;border-radius: 0px 500px 500px 500px;" alt="...">    
                              </div>
                              
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title" style="text-align: left; font-size: 20px; color: gray; font-weight: 550; margin-bottom: 0px;"><?php echo $name;?></h5>
                                  <h3 class="card-designation" style="text-align: left; font-size: 18px;color: #8ACFB3; font-weight: 550; margin-bottom: 30px;"><?php echo $designation;?></h3>
                                  <p class="card-text" style="text-align: left; color: grey;font-weight: 100;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                              </div>
                            </div>

                           
                            
                            
                          </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            
            
            <div class="row" style="width: 80%;margin-left: 200px;">
                <div class="col"  width="100%">
                  <div class="row g-0" style="text-align: left;">
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="font-size: 25px;margin-right: 50px;margin-left: 20px; vertical-align: middle;" checked>
                        <label class="form-check-label" for="inlineRadio1" style="font-size:20px;color: gray; font-weight: 550;padding-top: 5px;">Free</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" style="font-size: 25px;margin-right: 50px;margin-left: 20px; vertical-align: middle;">
                        <label class="form-check-label" for="inlineRadio2" style="font-size:20px;color: gray; font-weight: 550;padding-top: 5px;">Leave</label>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0" style="text-align: left;">
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" style="font-size: 25px;margin-right: 50px;margin-left: 20px; vertical-align: middle;">
                        <label class="form-check-label" for="inlineRadio3" style="font-size:20px;color: gray; font-weight: 550;padding-top: 5px;">Holiday</label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" style="font-size: 25px;margin-right: 50px;margin-left: 20px; vertical-align: middle;">
                        <label class="form-check-label" for="inlineRadio4" style="font-size:20px;color: gray; font-weight: 550;padding-top: 5px;">Working</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>  
          </div>
    </div>
    <script>
              $('input[type=radio][name=inlineRadioOptions]').change(function() {
              if (this.value == 'option1') {
                alert("Free thai gyo");
              }
              else if (this.value == 'option2') {
                alert("On leave");
              }
          });
    </script>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%;background-color: lightgray;">
      <div class="services">
          <p style="font-size: 18px;color: black; height: 30px;align-items: center;font-weight: 550;padding-top: 3px;">Ongoing Project</p>
      </div>
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">1. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm-4" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:20%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">50%</p>
          </div>
          <div class="col-sm-6" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;padding-top: 5px;">
            <div class="progress" style="width: 50%; background-color: #d9fbea;border-radius: 15px;">
              <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #3fec93;border-radius: 15px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">2. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm-4" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:20%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">50%</p>
          </div>
          <div class="col-sm-6" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;padding-top: 5px;">
            <div class="progress" style="width: 50%; background-color: #d9fbea;border-radius: 15px;">
              <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #3fec93;border-radius: 15px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>
        


    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%;background-color: lightgray;">
      <div class="services">
          <p style="font-size: 18px;color: black; height: 30px;align-items: center;font-weight: 550;padding-top: 3px;">Project Done</p>
      </div>
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">1. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
        </div>
        
      </div>  
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">2. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
        </div>
        
      </div>  
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%;background-color: lightgray;">
      <div class="services">
          <p style="font-size: 18px;color: black; height: 30px;align-items: center;font-weight: 550;padding-top: 3px;">Learning</p>
      </div>
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">1. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <input type="date" style="width:25%;height:80%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;padding:5px;" placeholder="DD/MM/YYYY">
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
          <input type="date" style="width:25%;height:80%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;padding:5px;" placeholder="DD/MM/YYYY">
          </div>
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm-4" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <input type="text" style="width:20%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">
          </div>
          <div class="col-sm-6" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;padding-top: 5px;">
            <div class="progress" style="width: 50%; background-color: #d9fbea;border-radius: 15px;">
              <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #3fec93;border-radius: 15px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <div class="container justify-content-center" style="width:80%">
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="font-size: 18px;color: grey; align-items: center;font-weight: 550;padding-top: 0px;margin-bottom: 0px;">2. (Project Name) Starting date and Ending date</p><br>
          </div>  
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
          <div class="col-sm" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:25%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">DD/MM/YYYY</p>
          </div>
        </div>
        <div class="row justify-content-center" style="display: flex; justify-content: center; padding-bottom: 0px;">
          <div class="col-sm-4" style="display: flex; justify-content: right;text-align: center; padding-left: 0px;padding-right: 0px;">
            <p style="width:20%;font-size: 18px;color: grey; box-shadow:1px 1px 1px gray;text-align: center;font-weight: 100;margin-right:10px;">50%</p>
          </div>
          <div class="col-sm-6" style="display: flex; justify-content: left;text-align: center; padding-left: 0px;padding-right: 0px;padding-top: 5px;">
            <div class="progress" style="width: 50%; background-color: #d9fbea;border-radius: 15px;">
              <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #3fec93;border-radius: 15px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%;background-color: lightgray;">
      <div class="services">
          <p style="font-size: 18px;color: black; height: 30px;align-items: center;font-weight: 550;padding-top: 3px;">Employee Under you</p>
      </div>
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <p style="width: 80%;font-size: 18px;color: gray; text-align:center;align-items: center;font-weight: 550;padding-top: 3px;">
        1. Name (View profile)<br>
        2. Name (View profile)<br>
      </p>
    </div>

    

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%;background-color: lightgray;">
      <div class="services">
          <p style="font-size: 18px;color: black; height: 30px;align-items: center;font-weight: 550;padding-top: 3px;">Intern under you</p>
      </div>
    </div>

    <div class="container justify-content-center" style="margin-bottom: 50px; width: 100%; display: flex;justify-content: center;">
      <p style="width: 80%;font-size: 18px;color: gray; text-align:center;align-items: center;font-weight: 550;padding-top: 3px;">
        1. Name (View profile)<br>
        2. Name (View profile)<br>
      </p>
    </div>

    

    <div class="container justify-content-center" style="background-color: whitesmoke; margin-bottom: 0px;">
      <div class="services">
          <p style="color: grey;">Follow Us</p>
      </div>

      <div class="row" style="display: flex; justify-content: center; padding-bottom: 5px;">
        <div class="col" style="text-align: center;">
          <img src="../images/Social media icons/facebook.png" class="img-fluid rounded" style="width: 30px;height: 30px;margin-right: 30px;margin-bottom: 10px;" alt="...">
          <img src="../images/Social media icons/linkedin.png" class="img-fluid rounded" style="width: 30px;height: 30px;margin-right: 30px;margin-bottom: 10px;" alt="...">
          <img src="../images/Social media icons/instagram.png" class="img-fluid rounded" style="width: 30px;height: 30px;margin-right: 30px;margin-bottom: 10px;" alt="...">
          <img src="../images/Social media icons/twitter.png" class="img-fluid rounded" style="width: 30px;height: 30px;margin-right: 30px;margin-bottom: 10px;" alt="...">
          <img src="../images/Social media icons/youtube.png" class="img-fluid rounded" style="width: 30px;height: 30px;margin-right: 30px;margin-bottom: 10px;" alt="...">
        </div>
      </div>
    
    </div>

    <div class="container justify-content-center" style="background-color: black; margin-top: 0px; margin-bottom: 0px;">

      <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5" style="color: white;">
        <img src="../images/logo.png" class="img-fluid rounded" style="position:absolute;left:0px;width: 420px;height: 200px;" alt="...">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="text-align: left;padding-top: 210px;">
            <!-- Content -->
            
            
            <h6 class="fw-bold mb-4">
              About Us
            </h6>
            <p style="color: grey;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            </p>
          
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fw-bold mb-4" style="margin-top: 50px;">
              Services
            </h6>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">App Development</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Web Development</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">UI/UX Design</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Digital Marketing</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Maintainance</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Training</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">ERP and CRM</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fw-bold mb-4" style="margin-top: 50px;">
              Useful links
            </h6>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Home</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Team</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Employees</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Interns</a>
            </p>
            <p style="color: grey;">
              <a href="#!" class="text-reset" style="text-decoration: none;">Products</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="fw-bold mb-4" style="margin-top: 50px;">
              Subscribe for more info
            </h6>
            <p>
              <div class="subscribe-input-container" style="display: -ms-flexbox;display: flex;width: 100%;margin-bottom: 30px;">
                <input type="email" name="email" id="email" placeholder="Email" style="width: 150px;padding: 2px;outline: none;border: none;">
                <i class="fa fa-envelope icon" style="padding: 5px;background: white;color: grey;text-align: center;"></i>
              </div>
              
              
            
            </p>

            <p>
              <button type="button" class="btn btn-success" style="background-color: #8ACFB3;border: none;color: black;">Subscribe</button>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>