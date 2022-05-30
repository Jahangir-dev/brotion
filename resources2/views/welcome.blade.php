<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f46361531e.js" crossorigin="anonymous"></script>
    <title>HomePage</title>
    <style type="text/css">



    </style>
  </head>
  <body style="width: 100%;">
    <section class="mb-5 coverImage">
    @include('frontendtemplate.navbarn')

      <div class=" container text-center">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-8 col-12 pt-3  d-block ">
            <h1 class="text-white">We show you the market</h1>
            <p class="text-white">In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document
            or a typeface without</p>
            <button  class="btn btn-primary btnarena">Open Opportunities</button>
            <img class="img-fluid p-2" src="{{asset('asset/images/Icon ionic-ios-play-circle.png')}}">
          </div>
          @if(!Auth::check())
          <div class="col-lg-4 col-md-6 col-sm-4 pt-3 pl-5   d-block ">
            <div class="card " style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-title text-primary">Login NOW</h5>
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control text-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control text-primary" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
                <div class="row pt-3">
                  <div class="col-lg-8 col-md-4 col-sm-4 d-block text-dark">
                    <p>Don't have Account?</p>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 d-block text-primary">
                    <a href="#">Sign up</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>
    <section class=" ">
      <div class="container ">
        <div class="row ">
          <div class="col-6  col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12 " style="text-align: center;">
            <h3 class="text-primary">
            Search and Find Opprotunities
            </h3>
          </div>
          <div class="col-6 col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 justify-content-center text-center">
            <div class="Rectangle-12 row" style="margin:0 auto;">
              <div class="col-6 col-md-6 col-sm-6 col-6 mt-2 ">
                <span class="Search-by-location ">
                  Search by location
                </span>
              </div>
              <div class="col-6 col-md-6 col-sm-6  col-6 pt-2 ">
                <div class="Rectangle-13">
                  <span class="Find-Oppotunities pt-1">
                    Find Oppotunities
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <img class="img-fluid" src="{{asset('asset/images/Icon feather-search.png')}}">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="m-5  justify-content-center ">
      <div class="container">
        <div class="row ">
          <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 mb-3 pt-5 pb-5">
            <h1 class="mt-5">How <strong>does it work?</strong> </h1>
            <p class="justify-content-center"> The parsa platform is a link between the supplier and the buyer, enabling small and medium enterprises to view and submit quotations <br> electricity in government and private sector purchases.It also enables small and medium enterprise to submit request for <br> quotation among themselve.</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  pl-5  pt-5 justify-content-center text-center ">
            <div class="Rectangle-14 pt-1 ">
              <span class="See-more-Opportunities ">
                See more Opportunities
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container justify-content-center text-center">
        <div class="row" style="text-align: -webkit-center;">
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3 text-center pt-5">
            <div class="card text-center card-setting">
              <div class="card-body">
                <div class=" mb-3 mt-3">
                  <img src="{{asset('asset/images/Group 16928.png')}}">
                </div>
                <div class="col-lg-12" style="margin-top: 2rem;">
                  <h2><strong> Register Yourself</strong></h2>
                </div>
                <div class="col-lg-12">
                  <p>  In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
                  <a href="#"><u>Learn More</u></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3 text-center pt-5">
            <div class=" text-center /">
              <div class="col-lg-12 mb-3 mt-3">
                <img src="{{asset('asset/images/Group 16929.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem; font-family: OpenSans;">
                <h3><strong>  Make Tenders </strong></h3>
              </div>
              <div class="col-lg-12" style=" font-family: OpenSans;">
                <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
              </div>
              <a href="#"><u>Learn More</u></a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3 text-center pt-5">
            <div class="text-center ">
              <div class="col-lg-12 mb-3 mt-3">
                <img src="{{asset('asset/images/Group 16930.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem; font-family: OpenSans;">
                <h3><strong>  Make Bids </strong></h3>
              </div>
              <div class="col-lg-12"style=" font-family: OpenSans;">
                <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
              </div>
              <a href="#"><u>Learn More</u> </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="margin-top:5rem;margin-bottom: 10rem; " class=" text-center pb-4">
      <div class="  middle-image  text-white ">
        <div class="container justify-content-center text-center ">
          <h2 class="text-center pt-2 text-white  ">Auto Procure Summary </h2>
          <div class="row  ">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pb-4 ">
              <div class="Rectangle-904" style="width: 100%;">
                <img class ="img-fluid pt-3"src="{{asset('asset/images/users.png')}}">
                <p class="pt-2">
                  1000
                </p>
                <h3 class=" text-white pt-3">
                USERS
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pb-4  ">
              <div class="Rectangle-904" style="width: 100%;">
                <img  class ="img-fluid pt-3" src="{{asset('asset/images/shield-fill-check.png')}}">
                <p class="pt-2">
                  500
                </p>
                <h3 class=" text-white pt-3">
                TENDERS
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pb-4   ">
              <div class="Rectangle-904" style="width: 100%;">
                <img  class ="img-fluid pt-3" src="{{asset('asset/images/Icon ionic-logo-buffer.png')}}">
                <p class="pt-2">
                  500
                </p>
                <h3 class="text-white pt-4">
                BIDS
                </h3>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg mt-5 mb-3">Create Tender</button>
      </div>
    </section>
    {{-- <section>
      <div class="row mb-5">
        <div class="col-lg-12 text-center">
          <h1 class="bottomh1">Latest <strong>Opporunities</strong> </h1>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-4 col-sm-6 choose-bottom">
            <form method="get" action="{{route('welcome')}}">
              <select class="form-select" style="background-color: #519bfd;
                color: white;" name="category" onchange="this.form.submit()">
                <option value="{{Null}}">Choose Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach()
              </select>
            </form>
          </div>
          <div class="col-lg-5 col-md-8 col-sm-6">
            <form action="{{route('market-place')}}" method="get" role="search" style="margin-bottom:20px;">
              <div class="input-group">
                <input class="form-control" name="opp_title" style="border-radius:5px;background-color: #d7d7d7;"  type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search By Opportunity Title">
                <span class="input-group-append">
                </span>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          @foreach($opportunity as $opp)
          @if(isset($opp->oppt_not_required))
          @else
          <div class="col-lg-4 col-md-6 mb-3" >
            <div class="card bottomcard">
              <div class="card-body">
                <div class="col d-inline" style="margin-left: 10px;">
                  <label class="avaiable">Avaiable</label>
                </div>
                <div class="col d-inline">
                  <label>{{$opp->opp_count->count()}}</label>
                </div>
                <div class="col d-inline">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="col d-inline">
                  <a href="{{route('opp-not-required',['id'=>$opp->id])}}" class="bottom-card-input text-center" placeholder="Not Required">Hide</a>
                </div>
                <div class="col d-inline">
                  <i class="fa fa-bell" aria-hidden="true" style="color:#519bfd"></i>
                </div>
                <div class="col d-inline">
                  <i class="fa fa-share" aria-hidden="true" style="color:#519bfd"></i>
                </div>
                <a href="{{route('opportunity-details',['id'=>$opp->id])}}" style="text-decoration:none">
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <label style="color:#519bfd"><strong>{{isset($opp->user_opp_title)?$opp->user_opp_title->opp_title:''}}</strong></label>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <label class="label-font">{{$opp->opp_category->name}}</label>
                    </div>
                    <div class="col-lg-12">
                      <label class="label-font">{{$opp->bidder_location}} </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="label-font">{{isset($opp->user_detail)?$opp->user_detail->company_name:''}}</label>
                    </div>
                    <div class="col-lg-12">
                      <label class="label-font">{{isset($opp->user)?$opp->user->email:''}}</label>
                    </div>
                    <div class="col-lg-12">
                      <label class="label-font">{{isset($opp->user)?$opp->user->phone:''}}</label>
                    </div>
                    <div class="col-lg-12">
                      <hr style="color:#006eff;height: 2px;">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <img src="{{isset($opp->user_detail)?$opp->user_detail->company_logo:''}}" class="opp-image-width">
                    </div>
                    <div class="col">
                      <label style="float:right; color: #006eff;"><strong>{{$opp->due_date}}</strong></label>
                    </div>
                  </div>
                  <div class="row day-left">
                    <div class="col-lg-12">
                      <label>Days Left</label>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endif
          @endforeach()
        </div>
      </div>
    </section> --}}
    <section class="">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 pl-5">
            <h2 class="About-Us">
            About Us
            </h2>
            <p class="pt-3">
              In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
              <br><br>
              In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
            </p>
            <button type="button" class="btn btn-primary btn-lg mt-5">Create Tender</button>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 middle-image2 mt-5 justify-content-center text-center" style="margin-left: 0px !important">
            <div class="pt-5">
              <img  class ="img-fluid pt-5" src="{{asset('asset/images/Group 4.png')}}">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <section>
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col-lg-12">
            <a href="{{route('market-place')}}" class="btn btn-primary see-more">See More</a>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- <section>
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col-lg-12">
            <h1 class="our-top-partner">Our <strong>Top Partner</strong></h1>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- <section class="mt-5">
      <div class="container">
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
            <a href="" class="btn btn-primary see-more">Show All</a>
          </div>
        </div>
      </div>
    </section> --}}
  <section class="pt-5 "></section>
  <section class="pt-5   justify-content-center text-center">
    <div class="container ">
      <div class="row pt-5  " >
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <h5>Trusted by</h5>
          <h2 class="pt-2">
          People All Around Saudi Araibia </h2>
        </div>
      </div>
      <div class="row pt-5 text-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 pt-3">
          <div class="Rectangle-16">
            <div class="row pt-3  justify-content-center text-center">
              <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
                <img src="{{asset('asset/images/Group 16945.png')}}"   class="rounded-circle img-fluid">
              </div>
              <div class="col-lg-4 col-md-2 col-sm-2 col-12">
                <h5>Adam Johns<h5>
              </div>
            </div>
            <div class="col-12 pt-1">
              <p class="">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 pt-3  justify-content-center text-center">
          <div class="Rectangle-16">
            <div class="row pt-3  justify-content-center text-center">
              <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
                <img src="{{asset('asset/images/Group 16945.png')}}"   class="rounded-circle img-fluid">
              </div>
              <div class="col-lg-4 col-md-2 col-sm-2 col-12">
                <h5>Adam Johns<h5>
              </div>
            </div>
            <div class="col-12 pt-1">
              <p class="">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('frontendtemplate.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
  var clicks = 0;
  function clickME() {
  clicks += 1;
  document.getElementById("clicks").innerHTML = clicks;
  }
  </script>
</body>
</html>
