<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
  />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/profile.css')}}">
  <script src="https://kit.fontawesome.com/e342930ad0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    </style>
    <title>Place new order-3</title>
</head>
<body>
<section style="background-color:#1c76b9;">
      @include('frontendtemplate.navbarn')
    </section>
    <div class="d-flex justify-content-center mt-5">
        <img src="./assets/images/logo2.png" alt=""
        width="15%" height="auto">
    </div>
    <div class="TEXT-COLOR d-flex justify-content-center">
        <h2>Register yourself here...!</h2>
    </div>
    <div class="register-container-bootom-part">

        <div class="register-container-bootom-part-content">
            <div class="TEXT-COLOR h5">
                <label for="">
                    Please Select Trade role
                </label>
              
            </div>

            <div class="d-flex  flex-column  flex-md-row  gap-3 mt-3">
                <div class="d-flex gap-2">
                    <div class="TEXT-COLOR h5">
                        <label for="buyer">Buyer</label>
                    </div>
                    <div>
                        <input type="radio" name="radio1" id="buyer">
                    </div>
                </div>
            
                <div class="d-flex gap-2">
                    <div class="TEXT-COLOR h5">
                        <label for="seller">Seller</label>
                    </div>
                    <div>
                        <input type="radio" name="radio1" id="seller">
                    </div>
                </div>
            
                <div class="d-flex gap-2">
                    <div class="TEXT-COLOR h5">
                        <label for="both">Both</label>
                    </div>
                    <div>
                        <input type="radio" name="radio1" id="both">
                    </div>
                </div>
                    
            </div>

            <div class="d-flex  flex-column  flex-md-row gap-5 mt-4">
                <div>
                    <label class="TEXT-COLOR h5" for="rep_name">
                        Representative Name:
                    </label>
                
                <div>
                    <input class="INPUT_LARGE input_blk " type="text" name="" id="rep_name">
                </div>

                </div>


            <div>
                <label class="TEXT-COLOR h5" for="comp_name">
                    Company Name:
                </label>
            <div>
                <input class="INPUT_LARGE input_blk" type="text" name="" id="comp_name">
            </div>

            </div>

             

        </div>


            <div class="d-flex  flex-column  flex-md-row mt-4">
                <div>
                    <label class="TEXT-COLOR h5" for="rep_name">
                        Email Address:
                    </label>
                
                <div>
                    <input class="INPUT_LARGE input_blk " type="text" name="" id="rep_name">
                </div>

                </div>

        </div>


        <div class="d-flex  flex-column  flex-md-row gap-5 mt-4">
            <div>
                <label class="TEXT-COLOR h5" for="log_pass">
                    Login Password:
                </label>
            
            <div>
                <input class="INPUT_LARGE input_blk " type="password" name="" id="log_pass">
            </div>

            </div>


        <div>
            <label class="TEXT-COLOR h5" for="conf_pass">
                Confirm Password:
            </label>
        <div>
            <input class="INPUT_LARGE input_blk" type="password" name="" id="conf_pass">
        </div>

        </div>

         

    </div>


        <div class="d-flex  flex-column  flex-md-row gap-5 mt-4">
            <div>
                <label class="TEXT-COLOR h5" for="mob_no">
                    Mobile number:
                </label>
            
            <div>
                <input class="INPUT_LARGE input_blk " type="number" name="" id="mob_no">
            </div>

            </div>


        <div>
            <label class="TEXT-COLOR h5" for="tle_no">
                Telephone Number:
            </label>
        <div>
            <input class="INPUT_LARGE input_blk " type="number" name="" id="tle_no">
        </div>

        </div>

         

    </div>


        <div class="mt-4">
            <div>
                <label class="TEXT-COLOR h5" for="ext_no">
                    Extension number:
                </label>
            
            <div>
                
                <input class="INPUT_LARGE input_blk " type="number" name="" id="ext_no">
            </div>

            </div>
      </div>
      <div class="mt-4">
          <img src="./assets/images/rich-smith-lVVs5skyWoo-unsplash.png" alt="">
          <p  class="TEXT-COLOR h5 mt-1">Company Logo</p>
      </div>
      
      <div>
        <label class="TEXT-COLOR h5" for="">
            Terms and conditions:
        </label>

      </div>
      <div class="d-flex gap-3 TEXT-COLOR h5">
          <div>
              <p>Do you agree with terms and conditions?</p>
          </div>
          <div class="d-flex gap-2">
              <div>
                  <input style="color: green;" type="checkbox" name="" id="">
              </div>
              <div>
                  <p>Agree</p>
              </div>
          </div>
      </div>







      <div class="BUTTON-CONTAINER">
      <a href="/welcome"> <button  class="BTN" onclick="">Register
        </button></a>

        
    </div>

        
           
    
        </div>
    </div>


    @include('frontendtemplate.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://kit.fontawesome.com/f46361531e.js" crossorigin="anonymous"></script>

<script>
var countre=1;
function add_more_field(){
countre+=1
    html='<div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3" id="row" >\
    <div class="col-1 d-flex flex-column">\
        <div>\
            <label for="">No.'+countre+'</label>\
        </div>\
    </div>\
    <div class="col-11 gap-3 d-flex flex-column flex-md-row">\
    <div class="">\
        <label class="fw-bold h5 TEXT-COLOR" for="item">Item</label>\
        <div>\
            <input class="INPUT_MEDIUM" type="text" name="product'+countre+'"  id="item">\
        </div>\
    </div>\
    <div>\
        <div>\
            <label class="fw-bold h5 TEXT-COLOR" for=""> Description</label>\
        </div>\
        <div>\
        <textarea class=" TEXT-COLOR" name="product'+countre+'"  id="" cols="50" rows="3"></textarea>\
        </div>\
    </div>\
    <div>\
        <div>\
            <label class="fw-bold h5 TEXT-COLOR" for=""> Quality</label>\
        </div>\
        <div>\
           <input class="INPUT_MEDIUM" type="text" name="product'+countre+'"  id="">\
        </div>\
    </div>\
    </div>\
    </div>\
    '
    var form=document.getElementById('product_form')
    form.innerHTML+=html;
}
function remove(button){
    console.log(button)
    let number=button.id;
    let row = document.getElementById('row')
    row.remove();
}
</script>

</body>
</html>