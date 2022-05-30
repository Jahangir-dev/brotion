<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/forgotpassword.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forgot Password </title>
  </head>
  <body>


    <section class="mt-5">
      <div class="row ">
       <div class="col-lg-2 col-md-2 col-sm-1">
         
       </div>
        <div class="col-lg-8 col-md-8 col-sm-10">
          <div class="card email-padding mb-5">
            <div class="card-body">
                <div class="col-lg-12 mb-3">
                <img src="{{asset('asset/images/newlogo.png')}}" style="display:block;margin-right: auto;margin-left: auto;">
              </div>
              <div class="col-lg-12 text-center">
                <h4 style="color: #5a9dff;">Forgot Password:</h4>
                
              </div>
              <form method="post"  action="{{ route('forget-password-post') }}">
                  @csrf
                
              <div class="col-lg-12 mt-3">
                <label class="mb-3"><strong>Email:</strong></label>
                <input type="email" name="email" class="form-control" required>
                
              </div>

              <div class="col-lg-12 mt-5">
                <button class="btn btn-primary login-button" type="submit">Forgot Password</button>
              </div>
              
            </form>

            <div class="col-lg-12 text-center mb-3 signin-top">
              <a href="{{route('login')}}" style="text-decoration: none;"> Go back: <strong style="color:black">Login</strong></a>
            </div>
              
            </div>
            
          </div>
        </div>
        <div class="col-lg-2 col-sm-1">
          
        </div>
        
      </div>
      


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 @include('sweetalert::alert')
  </body>
</html>