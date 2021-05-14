<!doctype html>
<html>
  <head>
    <title> Personnel </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!--Custom stylesheet -->
    <style type="text/css">
      .vertical-offset-100{
        padding-top:100px;
      }
      .footer {
  padding: 10px;
  text-align: center;
  background: #6495ED;
  color: white;
}
    </style>
  </head>
<div class="container text-center">
  <h1 class="py-5 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
  <h2 class="py-2 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> Personnel/Admin Log in Form </h2>    
</div>
<td>
</td>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container text-center">
    <div class="row vertical-offset-100">
      <div class="col-lg-4 col-lg-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Log in to continue</h1>
          </div>
          {{Form::open(['route' => 'check']) }}

        @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
            <fieldset>
              <div class="form-group form-group-lg">
            {{ Form::label('Email', null, ['class' => 'control-label']) }}
            {{ Form::text('email',null,array('class'=>'form-control','id'=>'email'))}}
          <!--   @if ($errors->has('email')) -->
         <!--        <span class = "text-danger">{{ $errors->first('email') }}</span> -->
           <!--  @endif -->
              </div>
              <div class="form-group form-group-lg">
            {{ Form::label('Password', null, ['class' => 'control-label']) }}
            {{ Form::text('password',null,array('class'=>'form-control','id'=>'password'))}}
            <!-- @if ($errors->has('password'))
                <span class = "text-danger">{{ $errors->first('password') }}</span>
            @endif -->

              </div>
              <input class="btn btn-lg btn-success btn-block" name="login" type="submit" value="Login">
         <!--      <input class="btn btn-lg btn-success btn-block" name="register" type="submit" value="Create Account"> -->
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
<div class="container text-center">
      
        <h4 class="py-1 bg-Light text-dark rounded"><i class="far fa-comment-dots"></i> Email: amieclaire.pimentel@tup.edu.ph </h4>    
       <!--  <a href="../index.php" > --><h4 class="py-1 bg-Light text-light rounded"><i class="fab fa-buromobelexperte"></i></i> Go back to Home </h4></a></h5>  
</div>
</body>
</html>