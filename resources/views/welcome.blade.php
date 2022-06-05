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
  <section class="mb-2 mb-md-5 coverImage">
    @include('frontendtemplate.navbarn')

    <div class="container mt-3" id="alert">
      <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8">
          <div style="text-align: center;" id="error">
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





    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 d-block outer-wrapper-main">

        <h1 class="text-white main-heading1">We show you the market</h1>
        <p class="text-white d-inline d-block"><span> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without </span></p>
        <button class="btn btn-primary btnarena">Open Opportunities</button>
        <a href="" class="playbtn"><img class="img-fluid" src="{{asset('asset/images/Icon ionic-ios-play-circle 1.svg')}}"></a>

      </div>
      @if(!Auth::check())
      <div class="col-lg-6 col-md-6 col-sm-6 pt-3 pl-md-5 d-block card-left-postion">
        <div class="card card_set login-card-width">
          <div class="card-body ">
            <form method="Post" action="{{route('login-post')}}">
              @csrf
              <h5 class="text-primary login-card-heading pt-3 mr-4">Login Now</h5>
              <div class="form-group pt-3 pt-md-3 pt-lg-3 pt-xl-5 ">
                <input type="email" name="email" class="form-control text-primary fields" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group pt-3 pt-md-3 pt-lg-3 pt-xl-5 ">
                <input type="password" name="password" class="form-control text-primary fields" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block login-card-btn create-tender">Login</button>
            </form>
            <div class="row pt-3 pt-md-3 pt-lg-3 pt-xl-5">
              <div class="col-8 d-block text-dark do-you-account ">
                <p class="do-have-account">Don't have Account?</p>
              </div>
              <div class="col-4 d-block text-primary signup">
                <a href="{{route('register')}}" class="signup-font">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>

  </section>
  <section class=" ">
    <div class="container ">
      <div class="row" style="display: flex;align-items: center;">
        <div class="col-6  col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12 " style="">
          <h3 class="seacrh-find-opp">
            Search and Find Opprotunities
          </h3>
        </div>
        <div class="col-6 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12 ">
          <div class="Rectangle-12 row">
            <div class="col-6 col-md-6 col-sm-6 col-6 pl-0">
              <span class="Search-by-location">
                <input type="text" placeholder="Search by location">
              </span>

            </div>
            <div class="col-6 col-md-6 col-sm-6 col-6 pr-md-3 justify-content-center text-center Rectangle-13col">
              <a href="">
                <div class="Rectangle-13">
                  <span class="Find-Oppotunities">
                    Find Oppotunities
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <img class="img-fluid search-icon" src="{{asset('asset/images/Icon feather-search.png')}} " height="20px" width="20px">
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="justify-content-center section-how-does">
    <div class="container">
      <div class="row ">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-3 pb-5">
          <h1 class="mt-5 heading-how-does">How <strong>does it work?</strong> </h1>
          <p class="justify-content-center d-inline d-block text-justify para-how-does">Brotions platform is a link between the supplier and the buyer, enabling small and medium enterprises to view and submit quotationselectricity in government and private sector purchases.It also enables small and medium enterprise to submit request forquotation among themselve.</p>
        </div>
        <div class="col-md-4 col-12 set justify-content-center text-center text-md-right">
          <a href="" class="Rectangle-14">
            <span class="See-more-Opportunities">
              See more Opportunities
            </span>
            <!-- <div class="Rectangle-14">
              <span class="See-more-Opportunities ">
                See more Opportunities
              </span>
            </div> -->
          </a>

          <!-- <a href=""><div class="Rectangle-14">
              <span class="See-more-Opportunities ">
                See more Opportunities
              </span>
            </div></a> -->


        </div>
      </div>
    </div>
  </section>
  <section class="cards-section">
    <div class="container justify-content-center text-center">
      <div class="row" style="text-align: -webkit-center;">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 text-center p-2">
          <div class="card text-center card-setting">
            <div class="card-body">
              <div class=" mb-3 mt-3">
                <img src="{{asset('asset/images/Group 16928.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem; font-family: Open Sans;">
                <h2><strong> Register Yourself</strong></h2>
              </div>
              <div class="col-lg-12" style=" font-family: Open Sans;">
                <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
                <a href="#" class="cardleranbtn"><u>Learn More</u></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 text-center p-2">
          <div class="card text-center card-hover">
            <div class="card-body">
              <div class="mb-3 mt-3">
                <!-- <div class="col-lg-12 mb-3 mt-3"> -->
                <img src="{{asset('asset/images/Group 16929.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem; font-family: Open Sans;">
                <h3><strong> Make Tenders </strong></h3>
              </div>
              <div class="col-lg-12" style=" font-family: Open Sans;">
                <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
              </div>
              <a href="#" class="cardleranbtn"><u>Learn More</u></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 text-center p-2">
          <div class="card text-center card-hover">
            <div class="card-body ">
              <div class="mb-3 mt-3">
                <img src="{{asset('asset/images/Group 16930.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem; font-family: Open Sans;">
                <h3><strong> Make Bids </strong></h3>
              </div>
              <div class="col-lg-12" style=" font-family: Open Sans;">
                <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
              </div>
              <a href="#" class="cardleranbtn"><u>Learn More</u> </a>
            </div>
          </div>
        </div>


      </div>



    </div>


  </section>
  <section class="text-center section-auto-procure-summary">
    <div class="middle-image text-white ">
      <div class="container justify-content-center text-center pt-5">
        <h1 class="pt-2 heading-auto-procure-summary ">Auto Procure Summary </h1>
        <div class="row row-auto-procure-summary justify-content-center">
          <div class="col-md-4 col-12 pb-4">
            <div class="Rectangle-904">
              <img class="img-fluid auto-procure-image" src="{{asset('asset/images/users1.svg')}}">
              <p class="auto-procure-para mt-3">
                {{$usersCount}}
              </p>
              <h5 class="auto-procure-heading">
                USERS
              </h5>
            </div>
          </div>
          <div class="col-md-4 col-12 pb-4 pb-4  ">
            <div class="Rectangle-904">
              <img class="img-fluid auto-procure-image" src="{{asset('asset/images/shield-fill-check1.svg')}}">
              <p class="auto-procure-para mt-3">
                {{$tendersCount}}
              </p>
              <h5 class="auto-procure-heading">
                TENDERS
              </h5>
            </div>
          </div>
          <div class="col-md-4 col-12 pb-4 pb-4">
            <div class="Rectangle-904">
              <img class="img-fluid auto-procure-image" src="{{asset('asset/images/Icon ionic-logo-buffer1.svg')}}">
              <p class="auto-procure-para mt-3">
                {{$bidsCount}}
              </p>
              <h5 class="auto-procure-heading">
                BIDS
              </h5>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="btn auto-procure-btn">Create Tender</a>
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
        <input class="form-control" name="opp_title" style="border-radius:5px;background-color: #d7d7d7;" type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search By Opportunity Title">
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
    <div class="col-lg-4 col-md-6 mb-3">
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
  <section>
    <div class="container about-us-container">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-12 about-us-padding">
          <h2 class="About-Us">
            About Us
          </h2>
          <p class="About-Us-para">
            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
            <br><br>
            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
          </p>
          <div class="cratetenderbtn">
            <a class="btn btn-primary btn-lg create-tender">Create Tender</a>
          </div>

        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 col-12 middle-image2 mb-3 justify-content-center text-center" style="margin-left: 0px !important;display: flex;align-items: center; ">
          <div class="pt-5 pb-5">
            <img class="img-fluid pt-5" src="{{asset('asset/images/Group 4.png')}}" style="width:50%;margin-top: 40%;">
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
    <img src="{{asset('asset/images/2 (4).png')}}" class="our-top-partner-images">
  </div>
  <div class="col-lg-2 col-md-4 col-sm-4">
    <img src="{{asset('asset/images/2 (1).png')}}" class="our-top-partner-images our-top-partner-images-padding">
  </div>
  <div class="col-lg-2 col-md-4 col-sm-4">
    <img src="{{asset('asset/images/2 (5).png')}}" class="our-top-partner-images">
  </div>
  <div class="col-lg-2 col-md-4 col-sm-4">
    <img src="{{asset('asset/images/2 (3).png')}}" class="our-top-partner-images college-excellence">
  </div>
  <div class="col-lg-2 col-md-4 col-sm-4">
    <img src="{{asset('asset/images/2 (2).png')}}" class="last-image-width">
  </div>
  </div>
  <div class="row mt-5 mb-5 text-center">
    <div class="col-lg-12">
      <a href="" class="btn btn-primary see-more">Show All</a>
    </div>
  </div>
  </div>
  </section> --}}
  <section class="pt-2 "></section>
  <section class="section-feed-back">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <p class="uperpara-feed-back">Trusted by</p>
          <h2 class="heading-feed-back">
            People All Around Saudi Araibia </h2>
        </div>
      </div>
      <div class="row row-feed-back">
        <div class="col-md-6 pt-3">
          <div class="Rectangle-16">
            <div class="row pt-3 inner-row-feed-back">
              <div class="d-flex flex-row inner-row-feed-back">
                <div class="p-2 text-center"> <img src="{{asset('asset/images/Mask Group 1.svg')}}" class="rounded-circle img-fluid inner-row-feed-back-img">
                </div>
                <div class="p-2">
                  <h5 class="inner-row-feed-back-name">Adam Johns<h5>
                </div>
              </div>
            </div>
            <div class="col-12 pt-2">
              <p class="inner-row-feed-back-para">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0 pt-3">
          <div class="Rectangle-16">
            <div class="row pt-3 inner-row-feed-back">
              <div class="d-flex flex-row inner-row-feed-back">
                <div class="p-2 text-center"> <img src="{{asset('asset/images/Mask Group 1.svg')}}" class="rounded-circle img-fluid inner-row-feed-back-img">
                </div>
                <div class="p-2">
                  <h5 class="inner-row-feed-back-name">Adam Johns<h5>
                </div>
              </div>
            </div>
            <div class="col-12 pt-2">
              <p class="inner-row-feed-back-para">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  @include('frontendtemplate.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    var clicks = 0;

    function clickME() {
      clicks += 1;
      document.getElementById("clicks").innerHTML = clicks;
    }
  </script>
  <script type="text/javascript">
    setTimeout(function() {
      $('#alert').slideUp();
    }, 4000);
  </script>
</body>

</html>