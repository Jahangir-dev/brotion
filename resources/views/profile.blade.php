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
    <title>Profile</title>
    <style type="text/css">
    </style>
  </head>
  <body>
  <section style="background-color:#1c76b9;">
      @include('frontendtemplate.navbarn')
    </section>
<div class=" d-flex justify-content-center mt-4" style="position: relative;">
    
    <img src="{{asset('asset/images/mountains.png')}}" alt="" width="90%" height="auto">

    <div class=" home-top-part border border-dark rounded-circle overflow-hidden d-flex justify-content-center align-items-center">

        <img class=" test img-1" src="{{asset('asset/images/wordpress.png')}}" alt="" >

        <label class="d-flex justify-content-center align-items-center" for="uplode">
            <span><img class="img-2" src="{{asset('asset/images/ic_photo_camera_24px.png')}}" alt="pic" style="width: 2rem;"></span>
        </label>
        <input class="d-none" type="file" name="uplode" id="uplode">
    </div>

</div>

<div class="container mt-4 ">
    <div class="row">
        <div class="col-3 ">

        </div>
        <div class="mt-4 col-6 d-flex justify-content-center align-items-center gap-2">
            <div>
                <h4>John Smith</h4>
            </div>
            <div class=" d-flex justify-content-center align-items-center gap-1">
                <i class="fa fa-calendar-o "style="font-size:24px"></i>
                <p class="d-block m-0 ">Joined by May 2020</p>
            </div>
        </div>
        <div class=" col-3 d-flex justify-content-end align-items-center mt-1"> 
            <button type="button" class="btn btn-outline-primary">
                Buyer & Seller
            </button>
         </div>

    </div>
</div>

<div class="col-12 d-flex justify-content-center align-items-center mt-2 gap-1">
    <div class="d-flex gap-2">
        <div>
            <img src="{{asset('asset/images/email.png')}}" alt="" width="20px">
        </div>
        <div>
            <p>johnsmith@gmail.com</p>
        </div>

    </div>
    <div class="d-flex gap-3">
        <div>
            <img src="{{asset('asset/images/Group 16946.png')}}" alt="" width="20px">
        </div>
        <div>
            <p>090078964</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center fw-bold  h5">
<div class= "w-75 p-3 mt-4 rounded " style="background-color: white; ">
    <h3>About me:</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eaque fuga illo iusto, quasi natus quae? Quasi pariatur odio et!</p>

</div>

</div>


<div class="d-flex justify-content-center fw-bold ">
<div class= "w-75 p-3 mt-4 rounded " style="background-color: white; ">
    <div class="col-3 d-flex justify-content-end">
    <h3>Tenders:</h3>
    </div>

    <div class="d-flex gap-3 mt-4 justify-content-center flex-wrap">
        <div>
            <button type="button" class="btn btn-outline-primary">Tender one</button>
        </div>

        <div>
            <button type="button" class="btn btn-outline-primary">Car selling</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">computer selling</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">Refrigerator sale</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">Mobile Repair</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">Tabel selling</button>
        </div>

    </div>

    <div class="d-flex gap-3 mt-5 justify-content-center flex-wrap">
        <div>
            <button type="button" class="btn btn-outline-primary">Tender one</button>
        </div>

        <div>
            <button type="button" class="btn btn-outline-primary">Car selling</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">computer selling</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">Refrigerator sale</button>
        </div>
        <div>
            <button type="button" class="btn btn-outline-primary">Mobile Repair</button>
        </div>
        
    </div>
    
</div>


</div>

<div class="d-flex justify-content-center fw-bold">

<div  class= "w-75 p-3 mt-4 rounded" style="background-color: white; ">
    <div class="col-4 d-flex justify-content-end">
        <h3>
            Photo Gallery
        </h3>

    </div>

    <div class="d-flex justify-content-center gap-4 flex-wrap">

        <div>
            <img src="{{asset('asset/images/kari-shea-1SAnrIxw5OY-unsplash (1).png')}}" alt="" width="100" height="100">
        </div>

        <div>
            <img src="{{asset('asset/images/phillip-goldsberry-fZuleEfeA1Q-unsplash.png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/kam-idris-_HqHX3LBN18-unsplash.png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/suchit-poojari-ljRiZl00n18-unsplash.png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/mathieu-renier-4WBvCqeMaDE-unsplash.png')}}" alt="" width="100" height="100">
        </div>



    </div>

    <div class="d-flex justify-content-center gap-4 flex-wrap">

        <div>
            <img src="{{asset('asset/images/tv.png')}}" alt="" width="100" height="100">
        </div>

        <div>
            <img src="{{asset('asset/images/ashwini-chaudhary-Iu6parQAO-U-unsplash (1).png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/ashwini-chaudhary--4KzDiyZjgw-unsplash.png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/howard-bouchevereau-Wx23XPAlseI-unsplash.png')}}" alt="" width="100" height="100">
        </div>
        <div>
            <img src="{{asset('asset/images/ic_add_a_photo_24px.png')}}" alt="" width="50" height="50">
        </div>



    </div>

    <div class="d-flex gap-3 justify-content-center mt-4 flex-wrap">
        <div>
            <img src="{{asset('asset/images/media1.svg')}}" alt="" width="70" height="70">
        </div>
        <div>
            <img src="{{asset('asset/images/propel1.svg')}}" alt="" width="70" height="70">
        </div>
        <div>
            <img src="{{asset('asset/images/ad1.svg')}}" alt="" width="70" height="70">
        </div>
        <div>
            <img src="{{asset('asset/images/adv1.svg')}}" alt="" width="70" height="70">
        </div>
        <div>
            <img src="{{asset('asset/images/gpm1.svg')}}" alt="" width="70" height="70">
        </div>
        
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