<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bidmanagement2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bid Mangement</title>
    <style type="text/css">

      .coverImage {
          list-style-type: none;
          margin: 0;
          padding: 3px;
          overflow: hidden;
          background-image: url('../images/images/Group 16943.png');
          height: 600px;
          width: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          width: 100%;
          background-color: #fff;
}
 .box-shadow{
        box-shadow: none;
      }


    </style>
  </head>
  <body>




    <section class="mb-5 coverImage">
    @include('frontendtemplate.navbarn')
        <div class=" container-fluid  text-center ">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 pt-3  d-block ">
             <h1 class="text-white">Brief Overview of the Services</h1>
             <p class="text-white">In publishing and graphic design, Lorem ipsum is a placeholder
                text commonly used to demonstrate the visual form of a document
                or a typeface without</p>
             <button  class="btn text-white buttoncolor">Open Opportunities</button>
           </div>
        </div>
        </div>
      </section>





    <section class="mt-3">
      <div class="container">
        <div class="row">
{{--
          <div class="col-lg-8 col-md-6 col-sm-12 mb-3">
            <h1 class="bottomh1">My <strong>Bids</strong> </h1>
          </div> --}}


        </div>
        <div class="row mt-3 mb-5 card-spaces">


          {{-- <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12  mt-3">
                  <h3>{{$bid_count}}</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">TOTAL BIDS</label>
                </div>

              </div>

            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12 mt-3">
                  <h3>{{$bid_award}}</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">AWARDED BIDS</label>
                </div>

              </div>

            </div>
          </div>


          <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12 mt-3">
                  <h3>{{$average}} %</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">AVERAGE RATING</label>
                </div>

              </div>

            </div>
          </div> --}}

        </div>
        <div class="row mt-5 mb-5">

          <div class="col-lg-3 col-md-4 col-sm-4 category">
            <form method="get" action="{{route('bid-management')}}">
              <select class="form-select" style="background-color: #519bfd;
                color: white;" name="category" onchange="this.form.submit()">
                <option value="{{Null}}"> Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach()
              </select>
            </form>

          </div>
          <div class="col-lg-5 col-md-4 col-sm-4 search">
            <form action="{{route('bid-management')}}" method="get" role="search" style="margin-bottom:20px;">
              <div class="input-group">
                <input class="form-control bg-white text-white" name="opp_title" style="border-radius:5px; color: #d7d7d7;"  type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search By Opportunity Title">
                <span class="input-group-append">
                </span>
              </div>
            </form>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 sort-by-row">
            <form action="{{route('bid-management')}}" method="get" >
            <select class="form-select sort-by" name="sortby" style="border:1px solid #519bfd;color: #519bfd;" onchange="this.form.submit()">
              <option value="{{Null}}">Sort By</option>
              <option value="date">Date</option>
            </select>
            </form>
          </div>

        </div>
      </div>

    </section>
    <section class="mt-5 mb-5">
      <div class="container">
        <div class="row">



          <div class="col-lg-3 col-md-5 col-sm-12">
            <div class="card bottom-card">
              <div class="card-body">
                <form action="{{route('market-place')}}" method="get" id="qualifiaction" role="search" style="margin-bottom:20px;">
                  <div class="col-lg-12 mb-3">
                    <h6><strong>Filter by:</strong></h6>
                  </div>
                  <div class="col-lg-12">
                    <input type="checkbox" id="all" class="check-box qualifiactionclass" name="data" value="all">
                    <label for="all" class="label-card"> Approved</label>
                  </div>
                  <div class="col-lg-12">
                    <input type="checkbox" id="yes" class="check-box qualifiactionclass" name="data" value="yes">
                    <label for="yes" class="label-card"> pending </label>
                  </div>
                  <div class="col-lg-12">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Lost</label>
                  </div>
                </form>
                <div class="col-lg-12 mt-5 mb-5">
                  <hr style="height:2px;color:black;">
                </div>



                <form action="{{route('bid-management')}}" method="get" id="opptype" role="search" style="margin-bottom:20px;">
                  <div class="col-lg-12 mb-3">
                    {{-- <h6><strong>Opportunity Type</strong></h6> --}}
                  </div>

                  <div class="col-lg-12">
                    {{-- <input type="checkbox" id="smalltype" class="check-box opptype" name="type" value="SmallValue">
                    <label for="smalltype" class="label-card"> Small Type</label> --}}
                  </div>
                  <div class="col-lg-12">
                    {{-- <input type="checkbox" id="bigtype" class="check-box opptype" name="type" value="BigValue">
                    <label for="bigtype" class="label-card"> Big Type</label> --}}
                  </div>
                </form>

              </div>

            </div>

          </div>
          <div class="col-lg-9 col-md-7 col-sm-12">
            <div class="row card-row-width">
              @foreach($opportunity as $o)

              @if(isset($o->opt_not_required))
              @else
              <div class="col-lg-6 col-md-12 mb-3">

                <div class="card bottomcard">
                  <div class="card-body">
                    <div class="col d-inline" style="margin-left: 10px;">
                      <label class="avaiable">Avaiable</label>
                    </div>
                    <div class="col d-inline">
                      <label>{{$o->opp_count->count()}}</label>
                    </div>
                    <div class="col d-inline">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="col d-inline">
                      <a href="{{route('opp-not-required',['id'=>$o->opp_id])}}" style="text-decoration:none" class="bottom-card-input text-center" placeholder="Not Required">Hide</a>

                    </div>
                    <div class="col d-inline">
                      <i class="fa fa-bell" aria-hidden="true" style="color:#519bfd"></i>
                    </div>
                    <div class="col d-inline">
                      <i class="fa fa-share" aria-hidden="true" style="color:#519bfd"></i>
                    </div>
                    <a href="{{route('bidding-opportunity-details',['id'=>$o->id,'opp_id'=>$o->opp_id])}}" style="text-decoration:none">
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          <label style="color:#519bfd"><strong>{{isset($o->opp_detail->user_opp_title)?$o->opp_detail->user_opp_title->opp_title:''}}</strong></label>
                        </div>

                      </div>
                      <div class="row mt-3">
                        <div class="col-lg-12 mb-1">
                          <label class="label-font">{{isset($o->opp_detail->opp_category)?$o->opp_detail->opp_category->name:''}}</label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label class="label-font">{{isset($o->opp_detail)?$o->opp_detail->bidder_location:''}} </label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label class="label-font">{{isset($o->user_detail)?$o->user_detail->company_name:''}}</label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label class="label-font">{{isset($o->opp_detail->user)?$o->opp_detail->user->email:''}} </label>
                        </div>

                        <div class="col-lg-12">
                          <hr style="color:#006eff;height: 2px;">
                        </div>

                      </div>
                      <div class="row">
                        <div class="col">
                          <img src="{{isset($o->user_detail)?$o->user_detail->company_logo:''}}" class="bottom-pic">
                        </div>
                        <div class="col">
                          <label style="float:right; color: #006eff;"><strong>{{$o->due_date}}</strong></label>

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
        </div>
      </div>

    </section>
    <section class="mt-3 mb-3">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex">
              <div class="mx-auto">
                {{$opportunity->links()}}
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    {{-- <section style="margin-top:7rem">
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
    @include('frontendtemplate.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
    $(function(){
    $('.qualifiactionclass').on('change',function(){
    $('#qualifiaction').submit();
    });
    });
    </script>
    <script type="text/javascript">
    $(function(){
    $('.opptype').on('change',function(){
    $('#opptype').submit();
    });
    });
    </script>
    <script type="text/javascript">
        $(function(){
         $('.sortby').on('change',function(){
            $('#sort').submit();
            });
        });
    </script>
  </body>
</html>
