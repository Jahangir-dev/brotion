<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/account.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Account Setting</title>
  </head>
  <body>
@include('frontendtemplate.topnavbar')
<section>
  <div class="row bottomnav">
    <div class="col-lg-12">
      <h3>Account Setting</h3>
      
    </div>
    
  </div>
</section>
<div class="container mt-3">
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


  <input type="hidden" name="token" value="{{$user->token}}">
<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="col-lg-12">
          <h5 class="personal-info">Personal Information</h5>
        </div>
        <form method="post" action="{{route('user-personal-info-save')}}">
          @csrf
  
        <div class="col-lg-12 mt-3">
          <textarea class="form-control" cols="5" rows="5" name="personalinfo" placeholder="Personal Information.....">{{$user->personal_info}}</textarea><label></label>
        </div>
        <div class="col-lg-12">
          <button type="submit" class="new-password">Save</button>
        </div>  
        </form>
        
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <form method="post" action="{{route('user-profile-update')}}" enctype="multipart/form-data">
  @csrf
        <div class="col-lg-12">
          <div class="d-inline-block">
            <i class="fa fa-user icon fa-5x " ></i>
          </div>
          <div class="d-inline-block email-setting">
            <label class="personal-info">Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-2 col-md-3 col-sm-2">
            
          </div>
          <div class="col-lg-10 col-md-8 col-sm-8 mobile-phone">
         
            <div class="d-inline-block">
               <label class="personal-info"> Mobile Phone</label>
              <input type="text" value="{{$user->phone}}" name="phone" class="form-control" >
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-12">
      <hr style="height:2px">
    </div>
    
  </div>
  
  
</section>
<section class="mt-5">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="col-lg-12">
      <h5 class="personal-info">Password</h5>  
      </div>
      <div class="col-lg-12 mt-3">
        <label>You can change your password here.Please follow password requirements</label>
      </div>
      
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="col-lg-12">
        <label>New Password</label>
        <input type="password" name="new_password" class="form-control mt-3">
        
      </div>

      <div class="col-lg-12 mt-3 mb-3">
        <label>Repeat Password</label>
        <input type="password" name="password_confirmation" class="form-control mt-3">
        
      </div>
      
    </div>
    
  </div> 
  </div>

  <div class="row">
    <div class="col-lg-12">
      <hr style="height:2px;">
    </div>
    
  </div>
  
  
</section>


<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
          <div class="col-lg-12">
            <h5 class="personal-info">Profile</h5>
          </div>
          <div class="col-lg-12">
            <label>You can change you profile info here </label>
          </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="col-lg-12">
          <h5 >Gender</h5>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="radio" id="male" name="gender" value="Male" {{ ($user->gender=="Male")? "checked" : "" }}>
             <label for="male">Male</label>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
             <input type="radio" id="female" name="gender" value="Female" {{ ($user->gender=="Female")? "checked" : "" }}>
             <label for="female">Female</label>
          </div>
        </div>


        <div class="col-lg-12 mt-3">
          <h5>Account Type</h5>
        </div>

         <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="radio" id="individual" name="account_type" value="Individual" {{ ($user->account_type=="Individual")? "checked" : "" }}>
             <label for="individual">Individual</label>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
             <input type="radio" id="establishment" name="account_type" value="Establishment" {{ ($user->account_type=="Establishment")? "checked" : "" }}>
             <label for="establishment">Establishment</label>
          </div>
        </div>


        <div class="col-lg-12 mt-5">
          <label class="mb-3">Region</label>
          <input type="text" name="region" class="form-control" value="{{$user->region}}">
          
        </div>
        <div class="col-lg-12 mt-3">
          <label class="mb-3">City</label>
          <input type="text" name="city" class="form-control" value="{{$user->city}}">
          
        </div>

        <div class="col-lg-12 mt-5 mb-5">
          <button type="submit" class="new-password">Update Profile</button>
        </div>











      </div>
      
    </div>
    
  </div>
  
</section>

</form>


@include('frontendtemplate.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>