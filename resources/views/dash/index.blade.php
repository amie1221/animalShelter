<?php 
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location:login.php');
}
?>

<!doctype html>
<html>
  <head>
  <style>
  .footer {
  padding: 10px;
  text-align: center;
  background: #6495ED;
  color: white;
  font color: Black;
  text color:Black;
}
.navbar {
  overflow: hidden;
  background-color:#1A2421;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  font color: white;
  text color:white;
}
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
}
.navbar a:hover {
  background-color: #6495ED;
  color: white;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: #6495ED;
}

</style>
    <title> Control Panel </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </head>
  <div class="container text-center">
    <h1 class="py-5 bg-dark  text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
    <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> CONTROL PANEL!! </h2>    
  </div>
  <body>
  	<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>Welcome!! <b><i> {{ $LoggedUserinfo['first_name']}} </b></i> Here you can see the control panel data. <br><br> Click here to 
  <a href="{{route('home')}}" class="btn btn-danger"> Log out and return to home</a></h4>
  <h4> </h4>
        </div>
      </div>
      <!-- Will show CRUD for Dogs and Cats -->
      <br><br>
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">Animal CRUD</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Add Animals</i>
              </div><br><br>
              <a href="{{route('animal.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for Views of Animals with Rescuer and Adopter -->
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">All VIEWS</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  SUMMARY OF THE WHOLE SYSTEM</i>
              </div><br><br>
              <!-- <a href="{{route('animal.index')}}" class="small-box-footer"> -->
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">ADOPTION</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Adopt Dog/Cat</i>
              </div><br><br>
            <a href="{{route('adoptline.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Will show CRUD for adopters -->
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">ADOPTERS CRUD</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Add Adopters </i>
              </div><br><br>
            <a href="{{route('adopter.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for Employee -->
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">PERSONNEL CRUD</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Add Personnel</i>
              </div><br><br>
             <a href="{{route('personnel.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for rescuers -->
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">RESCUERS CRUD</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Add Rescuer</i>
              </div><br><br>
             <a href="{{route('rescuer.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for Donators -->
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">========</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star"> ========</i>
              </div><br><br>
           <!--  <a href="{{route('animal.index')}}" class="small-box-footer"> -->
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Will show CRUD for Cash donation -->
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">========</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  ========</i>
              </div><br><br>
           <!--    <a href="{{route('animal.index')}}" class="small-box-footer"> -->
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for Health/ Diseases -->
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">ANIMAL DISEASES CRUD</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star">  Add animal diseases </i>
              </div><br><br>
              <a href="{{route('disease.index')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Will show CRUD for Material Donations -->
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">Emails</div>
            <div class="panel-body">
              <div class="icon">
              <i class="fa fa-star"> Check Emails</i>
              </div><br><br>
              <a href="#" class="small-box-footer">
             <a href="{{route('conlist')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Provides user to back up and restore system application -->
    <div class="navbar">
<div class="container text-center">
        <h4 class="py-1 bg-Light text-light rounded"><i class="far fa-comment-dots"></i> Email: admin@shelter_amie </h4>
        <a href="anim_shelterbackup.php"><h4 class="py-1 bg-Light text-light rounded"><i class="fas fa-cloud-download-alt"></i></i> placeholder </h4></a></h5>
        <a href="anim_shelterrestore.php"><h4 class="py-1 bg-Light text-light rounded"><i class="fas fa-cloud-upload-alt"></i></i> placeholder </h4></a></h5>   
  </body>
</html>