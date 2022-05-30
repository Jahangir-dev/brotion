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
    <title>Reset Password </title>
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
              
              <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                 <input type="hidden" name="token" value="{{ $token }}">
                 
                 
              <div class="col-lg-12 mt-3">
                <label class="mb-3"><strong>Email:</strong></label>
               <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
              </div>
                 
                 
                
              <div class="col-lg-12 mt-3">
                <label class="mb-3"><strong>Password:</strong></label>
                <input type="password" id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
              </div>
              <div class="col-lg-12 mt-3">
                <label class="mb-3"><strong>Confirm Password:</strong></label>
                 <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
              </div>

              <div class="col-lg-12 mt-5">
                <button class="btn btn-primary login-button" type="submit">Reset Password</button>
              </div>
              
            </form>

              
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