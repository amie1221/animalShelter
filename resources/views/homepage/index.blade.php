?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wonder Pets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
/* Style the body */
}
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 20px;
}

/* Header/logo Title */
.header {
  padding: 50px;
  text-align: center;
  background: #6495ED;
  color: white;
}
/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.row {
  content:"";
  display:table;
  Clear:both;
}
/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: #779ECB;
  padding: 20px;
}
/* Footer */
.footer {
    padding: 10px;
  text-align: center;
  background: #6495ED;
  color: white;
}

.pet-container {
	width: 90%;
	margin-left: 5%;
	margin-top: 20px;
	padding-top: 20px;
	display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-flow: wrap;
	background-color: #CCCCFF;
}
}
.data-container{
        height: 60%;
        width: 22%;
        background-color: #779ECB;
        margin: 5px;
        margin-bottom: 40px;
        align-items: center;
        align-content: center;
        justify-content: space-between; 
        border: 5px solid black;
    }

 .navbar:hover {
    	box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
    	background-color: #003366	;

    }
    .thumbnail:hover {
    	box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
    	background-color: #89CFF0		;

    }

    .img1{
        height: flex;
        width: flex;
    }

    img{
        margin-top: 20px;
       margin-left: 33px;
       border-radius: 50%;
       border: 1
       px #0F4D92;
    }

    .thumbnail{
        height: flex;
        width: flex;
        background-color: #779ECB;
        margin: 5px;
        margin-bottom: 40px;
        align-items: right;
        align-content: right;
        justify-content: space-between; 
        border: 5px solid #87CEEB;
        font-family:Comic bold, sans-serif bold;
        text-align:center;
    }
    .texts {
      font-family:Comic bold, sans-serif bold;
      text-align:center;
      margin: 5px;
      margin-bottom: 40px;
    }

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <!--Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="header">
<h1 class="py-4 text-light"><i class="fas fa-dog"></i>    Wonder Pets    <i class="fas fa-cat"></i></h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> Please help us save lives! <i class="fas fa-people-carry"></i></h2>    
</div>
<div class="navbar">
<a href="login/logout.php" class="active">Log in</a>
  <a href="FrontpageCat.php"><h5><i class="fas fa-cats"></i>Adopt Cats</a></h5>
  <a href="FrontpageDog.php"><h5><i class="fas fa-dogs"></i>Adopt Dogs</a></h5>
  <a href="index.php" class="right"><h5>HOME</a></h5>
</div>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="text">
          <h4>Seek for the caretaker incharge if the lovely cat/dog caught your attention.</h4>
          <h5><i>Note: Make sure to remember the pets name upon inquiring.</i></h5>
        </div>
      </div>
      <br><br>
      <!-- Retrieving information from query  -->
      <!-- <div class="row">
        <?php
          foreach ($animals as $animal) {
            echo '<div class="col-md-3">
                    <div class="thumbnail">
                        <img src="./animal/images/'.$animal['aniImage'].'" alt="'.$animal['pet_name'].'" style="height:200px;max-width:200px;width: expression(this.width > 200 ? 200: true);">
                        <div class="caption">
                          <p><h5>Pet Name: <b>'.$animal['pet_name'].'</b></h5></p>
                          <p>
                              Breed: <b>'.$animal['breed'].'</b><br>
                              Size: <b>'.$animal['size'].'</b><br>
                              Pet Type: <b>'.$animal['pet_type'].'</b><br>
                              Rescuer: <b>'.$animal['resFullName'].'</b><br>
                              Actioned By: <b>'.$animal['empFullName'].'</b><br>
                              Date Rescued: <b>'.$animal['date_added'].'</b><br>
                              Health Status: <b>'.$animal['hstatus'].'</b>
                          </p>
                        </div>
                    </div>
                  </div>';
          }
        ?> -->
      </div>
    </div>
    <div class="footer">
<div class="container text-center">
        <h4 class="py-1 bg-Light text-dark rounded"><i class="far fa-comment-dots"></i> Email: amieclaire.pimentel@tup.edu.ph </h4>    
</div>
  </body>
</html>