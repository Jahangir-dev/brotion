<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/opportunity.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Opportunity Mangement</title>

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
         <h1 class="text-white" >Brief Overview of the Services</h1>
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

          <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            {{-- <h1 class="bottomh1">My <strong>Tender</strong> </h1> --}}
          </div>
          {{-- <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <h1 class="bottomh1">My <strong>Tender</strong> </h1>
          </div> --}}


        </div>
        <div class="row mt-3 mb-5 card-spaces">


          {{-- <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12  mt-3">
                  <h3 class="card-number">{{$opp_count}}</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">Publish Tender</label>
                </div>

              </div>

            </div>
          </div> --}}
          {{-- <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12 mt-3">
                  <h3 class="card-number-second">{{$opp_awarded_count}}</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">AWARDED Tender</label>
                </div>

              </div>

            </div>
          </div> --}}


          {{-- <div class="col-lg-2 col-md-4 mb-3 col-sm-4">
            <div class="card text-center card-style">
              <div class="card-body">
                <div class="col-lg-12 mt-3">
                  <h3 class="card-number">{{$opp_pending_count}}</h3>
                </div>
                <div class="col-lg-12 mt-3">
                  <label class="label">Pending Tender</label>
                </div>

              </div>

            </div>
          </div> --}}


        </div>
        <div class="row mt-5 mb-5">

          <div class="col-lg-3 col-md-4 col-sm-4 category">
            <form method="get" action="{{route('opportunity-management')}}">
            <select class="form-select" style="background-color: #519bfd;
              color: white;" name="category" onchange="this.form.submit()">
              <option value="{{Null}}"> Category</option>
              @foreach($category as $c)
              <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach()
            </select>
            </form>


          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 search">
            <form action="{{route('opportunity-management')}}" method="get" role="search" style="margin-bottom:20px;">
            <div class="input-group">
              <input class="form-control" name="opp_title" style="border-radius:5px;background-color: #d7d7d7;"  type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search By Opportunity Title">
              <span class="input-group-append">
              </span>
            </div>
          </form>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 sort-by-row">
            <form action="{{route('opportunity-management')}}" method="get" >
            <select class="form-select sort-by" name="sortby" style="border:1px solid #519bfd;color: #519bfd;" onchange="this.form.submit()">
              <option value="{{Null}}">Sort By</option>
              <option value="date">Date</option>
            </select>
            </form>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 career-oportunity-right">
            <a href="{{route('create-new-opportunity')}}" class="career-oportunity">Create  Tender</a>
            {{-- <button class="btnarena">Export</button> --}}
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
                <form action="{{route('opportunity-management')}}" method="get" id="qualifiaction" role="search" style="margin-bottom:20px;">
                <div class="col-lg-12 mb-3">
                  <h6><strong>Filter by:</strong></h6>
                </div>

                <div class="col-lg-12">
                  <input type="checkbox" id="yes" class="check-box qualifiactionclass" name="data" value="yes">
                  <label for="yes" class="label-card"> Running</label>
                </div>
                <div class="col-lg-12">
                  <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                  <label for="no" class="label-card">Awarded</label>
                </div>
                <div class="col-lg-12">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Paid</label>
                  </div>
                  <div class="col-lg-12">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Received</label>
                  </div>
                  <div class="col-lg-12">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Completed</label>
                  </div>
               </form>








                <div class="col-lg-12 mt-5 mb-5">
                  <hr style="height:2px;color:black;">
                </div>



                <form action="{{route('opportunity-management')}}" method="get" id="opptype" role="search" style="margin-bottom:20px;">
                <div class="col-lg-12 mb-3">
                  {{-- <h6><strong>Opportunity Type</strong></h6> --}}
                </div>
                 <div class="col-lg-12">
                  {{-- <input type="checkbox" id="all" class="check-box opptype" name="type" value="all">
                  <label for="all" class="label-card"> All</label> --}}
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
            @foreach($opportunity as $opp)

            <div class="col-lg-12 mb-3">
              <div class="card card-top" style="background-color:#efeded">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 termal-printer-left">
                      <div class="col-lg-12 mb-1">
                        <div class="col d-inline ">
                          @if($opp->due_date>0)
                          <label class="avaible">Avaiable</label>
                          @else
                          <label class="avaible">Closed</label>
                          @endif
                        </div>
                        <div class="col d-inline">
                          <i class="fa fa-bell" aria-hidden="true" style="color:#519bfd;font-size: 20px;"></i>
                        </div>
                        <div class="col d-inline">
                          <label style="font-size: 20px;">{{$opp->opp_count->count()}}</label>
                        </div>
                        <div class="col d-inline">
                          <i class="fa fa-eye" aria-hidden="true"style="color:#519bfd;font-size:20px"></i>
                        </div>
                      </div>
                      <a href="{{route('opportunity-details-approve',['id'=>$opp->id])}}" style="text-decoration:none">
                      <div class="col-lg-12 mt-1">
                        <h6 class="termal-printer"><strong>{{$opp->user_opp_title->opp_title}}</strong> </h6>
                      </div>
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-12 office-tool-left">
                      <div class="col-lg-12 mb-1">
                        <label>{{isset($opp->opp_category)?$opp->opp_category->name:''}}</label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label>{{$opp->bidder_location}}</label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                      <div class="row company-grandmother-top">
                        <div class="col-lg-6 col-md-6 col-sm-4 company-grandmother-width">
                          <div class="col-lg-12 mb-1">
                            <label>{{isset($opp->user_detail)?$opp->user_detail->company_name:''}}</label>
                          </div>
                          <div class="col-lg-12 mb-1">
                            <label>{{isset($opp->user)?$opp->user->email:''}}</label>
                          </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 textend">
                          <div class="col-lg-12">
                            <label>{{$opp->due_date}}</label>
                            <div>
                             <label>Days Left</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 textendicon">
                          <div class="col-lg-12">
                            <a href="{{route('user-opportunity-delete',['id'=>$opp->id])}}">
                            <img src="{{asset('asset/images/delete.png')}}">
                            </a>
                          </div>
                        </div>



                      </div>
                    </div>


                  </div>
                </div>

              </div>
            </div>
            @endforeach()


          </div>
        </div>
      </div>

    </section>
    <section>
      <div class="container">
        <div class="col-lg-12">
          <div class="d-flex">
    <div class="mx-auto">
          {{$opportunity->links()}}
        </div>
      </div>

        </div>

      </div>
    </section>

    {{-- <section class="mb-5 mt-5">
       <div class="container mb-5">
        <div class="col-lg-12">
         <h3 class="text-center" style="color:#519bfd">Brief Overview of the Services</h3>
        </div>
         <div class="col-lg-12 mt-3">
           <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
         </div>
       </div>


    </section> --}}

    {{-- <section class="section-top">
      <div class="container text-center">
      <div class="row mb-5">
        <div class="col-lg-12">
      <iframe class="video-width" src="https://www.youtube.com/embed/sdw0GQB5lJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      </div>


    </section> --}}
    {{-- <section style="margin-top:5rem">
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
