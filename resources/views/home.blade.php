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
    <title>HomePage</title>
  </head>
  <body>
     @include('frontendtemplate.topnavbar')
   @include('frontendtemplate.navbar')
    <section class="mb-5">
        <div class=" container">
      <div class="row">
         <div class=" showmarket">
          <h1 >We show you the market</h1>
          <button  class="btn btn-primary btnarena">Arena of Opporunity</button>
        </div>




    </div>
      </div>



    </section>
    <section class="mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
            <h1 class="text-center bottomh1">How <strong>does it work?</strong> </h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 mb-3 text-center mb-5">
            <p>The parsa platform is a link between the supplier and the buyer, enabling small and medium enterprises to view and submit quotations <br> electricity in government and private sector purchases.It also enables small and medium enterprise to submit request for <br> quotation among themselve.</p>
          </div>
        </div>
        <div class="row" style="text-align: -webkit-center;">
          <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="card text-center card-setting">
              <div class="card-body">
                <div class="col-lg-12 mb-3 mt-3">
                  <img src="{{asset('asset/images/download.png')}}">
                </div>
                <div class="col-lg-12" style="margin-top: 2rem;">
                  <h5>13,160</h5>
                </div>
                <div class="col-lg-12">
                  <p>Small & medium <br> enterprise</p>
                </div>

              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="card text-center card-setting">
              <div class="col-lg-12 mb-3 mt-3">
                <img src="{{asset('asset/images/notebook.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem;">
                <h5>312,003,858</h5>
              </div>
              <div class="col-lg-12">
                <p>Intended Opportunity <br> Value(SAR)</p>
              </div>


            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="card text-center card-setting">
              <div class="col-lg-12 mb-3 mt-3">
                <img src="{{asset('asset/images/notebook.png')}}">
              </div>
              <div class="col-lg-12" style="margin-top: 2rem;">
                <h5>312,003,858</h5>
              </div>
              <div class="col-lg-12">
                <p>Intended Opportunity <br> Value(SAR)</p>
              </div>


            </div>
          </div>

        </div>
      </div>

    </section>
    <section style="margin-top:5rem;margin-bottom: 5rem;">
      <div class="middle-image">
        <div class="container">
          <div class="row textcenter">
            <div class="col-lg-4 col-md-4 col-sm-4 supplier-middle-image">
              <div class="col-lg-12">
                <h1 style="color:#fff" >Supplier</h1>
              </div>
              <div class="col-lg-12 mt-3">
                <h5 style="color:#fff">Small and medium enterprise</h5>
              </div>
              <div class="col-lg-12 mt-3">
                <a href="" class="btn btn-primary">Start Selling</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 human-middle-image">
              <div class="col-lg-12 ">
                <img src="{{asset('asset/images/human.png')}}" class="human">
              </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 buyer-middle-image">
              <div class="col-lg-12">
                <h1 style="color:#fff">Buyer</h1>
              </div>
              <div class="col-lg-12 mt-3">
                <h5 style="color:#fff">Big companies</h5>
              </div>
              <div class="col-lg-12 mt-3">
                <a href="" class="btn btn-primary">Start Selling</a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section>
    <section>

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
    </section>

    <section>
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col-lg-12">
            <a href="{{route('market-place')}}" class="btn btn-primary see-more">See More</a>

          </div>

        </div>
      </div>
    </section>
    <section>
      <div class="container mt-5">
        <div class="row text-center">
          <div class="col-lg-12">
            <h1 class="our-top-partner">Our <strong>Top Partner</strong></h1>

          </div>

        </div>
      </div>
    </section>
    <section class="mt-5">
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
