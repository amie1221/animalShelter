<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


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
  <h2 class="py-2 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> Reach Us thru this Form</h2> 
</div>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container text-center">
    <div class="row vertical-offset-500">
      <div class="col-lg-4 col-lg-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
          </div>
        
<div class="container pt-5" style="max-width: 1000px">

        <!-- Alert User -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action="{{ route('storeForm') }}">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">

                <!-- Show error -->
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">

                <!-- Show error -->
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif                
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">

                <!-- Show error -->
                @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif                                
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">

                <!-- Show error -->
                @if ($errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif                 
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>

                <!-- Show error -->
                @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif                    
            </div>

            <input type="submit" name="send" value="Send" class="btn btn-lg btn-success btn-block">
        </form>
    </div>
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
<div class="container text-center">
      
        <h4 class="py-1 bg-Light text-dark rounded"><i class="far fa-comment-dots"></i> </h4>    
   <h4>   <a href="{{route('home')}}" class="py-1 bg-Light text-light rounded"><i class="fab fa-buromobelexperte"></i></i> Go back to Home </h4></a></h5>  
</div>
</body>
</html>