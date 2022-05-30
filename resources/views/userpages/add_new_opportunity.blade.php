<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/add_new_opportunity.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>New Opportunity Mangement</title>
  </head>
  <body>
    
        
    @include('frontendtemplate.topnavbar')
   @include('frontendtemplate.navbar')
    <!-- <section class=" mb-5">
      <div class="background-image">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="opp-management"><strong>Opportunity Management</strong></h1>
          </div>
          <div class="col-lg-12 text-center">
            <h3 class="do-you-need">Do you need any assistnace? You can now <br> contact us any time</h3>
          </div>
          
        </div>
      </div>
    </section> -->
    <section class="mt-5">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-8 col-md-12 col-sm-12 mb-3">
            <h1 class="bottomh1">My <strong>Tender</strong> </h1>
          </div>
          
        </div>
        
        
      </div>
      
    </section>
    <section class="mt-5">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-5 col-md-5 col-sm-6">
            <a href="{{route('create-opportunity',['type'=>'SmallValue'])}}" style="text-decoration:none;color: black;">
            <div class="col-lg-12 mb-3">
             <div class="numberCirclesecond"><strong>RFQ</strong></div>   
            </div>
            <div class="col-lg-12 mt-3 mb-5">
              <ul class="ul-bottom">
                <li>Small to average value</li>
                <li>Enter Bill of Quantities</li>
                <li>Require Quotation</li>
              </ul>
            </div>
            </a>
           

          </div>
          <div class="col-lg-1 col-md-1 col-sm-1">
            <div class="col-lg-12">
              <hr class="hr-style">
              
            </div>
            
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5">
            <a href="{{route('create-opportunity',['type'=>'BigValue'])}}" style="text-decoration:none;color: black;">
            <div class="col-lg-12">
             <div class="numberCirclesecond"><strong>RFQ</strong></div>  
            </div>
            <div class="col-lg-12 mt-3">
              <ul class="ul-bottom">
                <li>Big Values</li>
                <li>Upload tendor document</li>
                <li>Require Proposal document</li>
              </ul>
            </div>
            </a>
            
          </div>
          
        </div>
        
      </div>
      
    </section>

    <section class="mb-5 mt-5">
       <div class="container b
       rief-container mb-5">
        <div class="col-lg-12">
         <h3 class="text-center" style="color:#519bfd">Brief Overview of the Services</h3> 
        </div>
         <div class="col-lg-12 mt-3">
           <p class="text-center">{{isset($det)?$det->details:''}} </p>
         </div>
       </div>


    </section>

    <!-- <section class="section-top">
      <div class="container text-center">
      <div class="row mb-5">
        <div class="col-lg-12">
      <iframe class="video-width" src="https://www.youtube.com/embed/sdw0GQB5lJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>  
      </div>
      
      
    </section> -->
    <section class="mt-5">
      <div class="container last-picture-container">
        <div class="row text-center">
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (5).png')}}" class="our-top-partner-images">
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (4).png')}}" class="our-top-partner-images"  >
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (1).png')}}" class="our-top-partner-images our-top-partner-images-padding"  >
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (5).png')}}" class="our-top-partner-images"  >
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (3).png')}}" class="our-top-partner-images college-excellence">
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <img src="{{asset('asset/images/2 (2).png')}}"  class="last-image-width">
            
          </div>
        </div>
        <div class="row mt-5 mb-5 text-center">
          <div class="col-lg-12">
            <a href="{{route('market-place')}}" class="btn btn-primary see-more">Show All</a>
          </div>
          
        </div>
        
      </div>
      
    </section>
      @include('frontendtemplate.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>