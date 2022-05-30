<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/register.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register </title>
  </head>
  <body>


    <section class="mt-5">
      <div class="row ">
       <div class="col-lg-2 col-md-2 col-sm-1">
         
       </div>
        <div class="col-lg-8 col-md-8 col-sm-10">
        
        @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif


          <div class="card mb-5">
            <div class="card-body">
                <div class="col-lg-12 mb-3">
                <img src="{{asset('asset/images/newlogo.png')}}" style="display:block;margin-right: auto;margin-left: auto;">
              </div>
              <div class="col-lg-12 text-center">
                <h4 style="color: #5a9dff; margin-bottom: 50px;margin-top: 20px;">Register Into The System:</h4>
                
              </div>
              <form method="post" action="{{route('register-save')}}" enctype="multipart/form-data">
                @csrf
              <div class="row">
               <div class="col-lg-12">
                
                <label class="mb-3"><strong>Representative  Name:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="name" name="name" class="form-control mb-3"   value="{{ old('name') }}">
                
               </div>
                
               
              </div>


              <div class="row">
               <div class="col-lg-6">
             
                <label class="mb-3"><strong>Email:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-3" >
                
                
               </div>
                
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Confirm Email:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="email" name="confirm_email" value="{{ old('confirm_email') }}" class="form-control mb-3" >
                
              </div>   
              
              </div>

              <div class="row">
               <div class="col-lg-12">
              
                <label class="mb-3"><strong>Company Name:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control mb-3" >
                
              </div>   
               
                
               
              </div>

              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Position:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="position" value="{{ old('position') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>Phone No:</strong> <span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="text" name="phone" value="{{ old('phone') }}" maxlength="15" onkeypress="return onlyNumber(event)" class="form-control mb-3" >
                
              </div>
              </div>

              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Landline Number:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="landline_number" maxlength="15" onkeypress="return onlyNumber(event)" value="{{ old('landline_number') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>Building Number:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="building_number" maxlength="15" onkeypress="return onlyNumber(event)" value="{{ old('building_number') }}" class="form-control mb-3" >
                
              </div>
              </div>



              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Street Name:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="street_number" value="{{ old('street_number') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>District Name:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="district_name" value="{{ old('district_name') }}" class="form-control mb-3" >
                
              </div>
              </div>

              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Zip Code:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="zip_code" maxlength="15" onkeypress="return onlyNumber(event)" value="{{ old('zip_code') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>City Name:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="text" name="city_name" value="{{ old('city_name') }}" class="form-control mb-3" >
                
              </div>
              </div>

              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Company Logo:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="file" name="company_logo" value="{{ old('company_logo') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>Upload Commercial Registration:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="file" name="commercial_registration" value="{{ old('commercial_registration') }}" class="form-control mb-3" >
                
              </div>
              </div>
              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Address:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="text" name="address" value="{{ old('address') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>Upload VAT Certificate:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Not Mandatory)</span></label>
                <input type="file" name="vat_certificate" value="{{ old('vat_certificate') }}" class="form-control mb-3" >
                
              </div>
              </div>

              <div class="row">
               <div class="col-lg-6">
              
                <label class="mb-3"><strong>Password:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="password" name="password" value="{{ old('password') }}" class="form-control mb-3" >
                
               
               </div>
                
               <div class="col-lg-6">
                <label class="mb-3"><strong>Confirm Password:</strong><span style="margin-left:10px;color: red;font-size: 12px;">(Mandatory)</span></label>
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control mb-3" >
                
              </div>
              </div>
              
              

              <div class="col-lg-12 mt-5">
                <button class="btn btn-primary login-button" type="submit">Register</button>
              </div>
              
            </form>

            <div class="col-lg-12 text-center mb-3 signin-top">
              <a href="{{route('welcome')}}" style="text-decoration: none;">  Alread have account?  <strong style="color:black">Login here</strong></a>
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
        <div class="col-lg-2 col-sm-1">
          
        </div>
        
      </div>
      


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function onlyNumber(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
        }
    return true;
}
    </script>
    @include('sweetalert::alert')


  </body>
</html>