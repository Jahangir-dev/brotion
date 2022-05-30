<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login </title>
  </head>
  <body>
     

    <div class="container mt-3">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div style="text-align: center;">
                         @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
                  
                  
                  
                    @if(\Session::has('message'))
             <div class="container">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div class="alert alert-success" style="text-align: center;">
                         Your password has been changed!.
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
             
                 
                  @endif
                  
                @if(\Session::has('success'))
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-2">
                              
                          </div>
                          <div class="col-lg-8">
                               <div class="alert alert-success">
                          Kindly Check Your Email<br>
                          A Verification Email Is Sent On Your Email.
                      </div>
                          </div>
                          <div class="col-lg-2">
                              
                          </div>
                      </div>
                  </div>
                  @endif
                  
                  @if(\Session::has('warning'))                  
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-2">
                               
                          </div>
                          <div class="col-lg-8">
                                <div class="alert alert-warning" style="    color: #020201;
                                    background-color: #2ce55d;;
                                    border-color: #faebcc;
                                    text-align: center;">
                          {{\Session::get('warning')}}
                      </div>
                          </div>
                          <div class="col-lg-2">
                               
                          </div>
                      </div>
                  </div>
                 @endif 
                 
                 
                  @if(\Session::has('danger'))
             <div class="container">
                  <div class="row">
                      <div class="col-lg-2">
                          
                      </div>
                      <div class="col-lg-8">
                           <div class="alert alert-success" style="text-align: center;">
                          Username & Password combination doesnot not match. Please try again.
                      </div>
                      </div>
                      <div class="col-lg-2">
                          
                      </div>
                     
                  </div>
             </div>
             
                 
                  @endif

    <section class="">
        <div class="container">
       <div class="row ">
       <form method="post" action="{{route('login-post')}}">
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card email-padding mb-5">
            <div class="card-body">
              <div class="col-lg-12 mb-3">
                <img src="{{asset('asset/images/newlogo.png')}}" style="display:block;margin-right: auto;margin-left: auto;">
              </div>
              <div class="col-lg-12 text-center">
                <h4 style="color: #5a9dff;">Login Into The System:</h4>
                
              </div>
              
              <div class="col-lg-12 mt-5">
                <label class="mb-3"><strong>Email:</strong></label>
                <input type="email" name="email" class="form-control" >
                
              </div>
              <div class="col-lg-12 mt-3 mb-3">
                <label class="mb-3"><strong>Password:</strong></label>
                <input type="password" name="password" class="form-control" >
                
              </div>

              <div class="col-lg-12 mt-5">
                <button class="btn btn-primary login-button" type="submit">Login</button>
              </div>
              <div class="col-lg-12 mt-3">
                <a href="{{route('forgot-password')}}" style="color: black;float: right;" >Forgot Password?</a>
              </div>
          

            <div class="col-lg-12 text-center mb-3 signin-top">
              <a href="{{route('register')}}" style="text-decoration: none;"> If You are not registered Please: <strong style="color:black">Sign Up</strong></a>
            </div>
              <div class="col-lg-12 text-center mt-3">
                <div class="d-inline">
                  <a href="" style="margin-right: 20px;"><label>English</label></a>
                </div>
                <div class="d-inline">
                  <a href=""><label>Arabic</label></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        </form>
        
        
      </div>     
        </div>
      
      


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('sweetalert::alert')

  </body>
</html>