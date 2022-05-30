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
    <div class=" container-fluid">
    <div class="row">

        <div class="col-lg-6 col-md-7 col-sm-12 pt-3  d-block ">
          <div class="outer-wrapper">
            
         <h1 class="text-white">Brief Overview of the Services</h1>
         <p class="text-white">In publishing and graphic design, Lorem ipsum is a placeholder
           text commonly used to demonstrate the visual form of a document
           or a typeface without</p>
           <button  class="btn text-white buttoncolor">Open Opportunities</button>
           <img class="img-fluid p-2 image-width" src="{{asset('asset/images/Icon ionic-ios-play-circle 1.svg')}}">
          </div>
       </div>
    </div>
    </div>
  </section>

    <section class="mt-3">
      <div class="container">
        
        <div class="row mt-3 mb-5 card-spaces">

        </div>

        <div class="row mt-md-5 mb-md-5">

          <div class="col-lg-3 col-md-4 category">
            <form method="get" action="{{route('opportunity-management')}}">
            <select class="form-select form-select1" name="category" onchange="this.form.submit()">
              <option value="{{Null}}"> Category</option>
              @foreach($category as $c)
              <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach()
            </select>
            </form>


          </div>
          <div class="col-lg-5 col-md-4 search">
            <form action="{{route('opportunity-management')}}" method="get" role="search">
            <div class="input-group input-icons">
              <input class="form-control search-input" name="opp_title" style="border-radius:5px;border-color: #519bfd;"  type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search">
              <img src="{{asset('asset/images/search1.svg')}}" class="search-icon-new">
            </div>
          </form>
          </div>
          <div class="col-lg-2 col-md-2 sort-by-row">
            <form action="{{route('opportunity-management')}}" method="get" >
            <select class="form-select form-select2" name="sortby" onchange="this.form.submit()">
              <option value="{{Null}}">Sort by</option>
              <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Assending">Assending</option>
                <option value="Descending">Descending</option>
            </select>
            </form>
          </div>
          <div class="col-lg-2 col-md-2 career-oportunity-right">
            <a href="/new_tender_one" class="career-oportunity">Create  Tender</a>
            {{-- <button class="btnarena">Export</button> --}}
          </div>

        </div>
      </div>

    </section>
    <section class="mt-5 mb-5">
      <div class="container">
        <div class="row">



          <div class="col-lg-3 col-md-5">
            <div class="card bottom-card" style="height: 100%;">
              <div class="card-body">
                <form action="{{route('opportunity-management')}}" method="get" id="qualifiaction" role="search" style="margin-bottom:20px;" class="card-body-qualifiaction">
                <div class="col-lg-12 mb-3 card-check-boxes-heading">
                  <h1>Filter by:</h1>
                </div>

                <div class="col-lg-12 card-check-boxes">
                  <input type="checkbox" id="yes" class="check-box qualifiactionclass" name="data" value="yes">
                  <label for="yes" class="label-card"> Running</label>
                </div>
                <div class="col-lg-12 card-check-boxes">
                  <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                  <label for="no" class="label-card">Awarded</label>
                </div>
                <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Paid</label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">Received</label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
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
            @foreach($opportunity as $tender)
            <div class="card-left">
              <div class="card-body card-padding">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <p class="see-10-time">Seen <strong class="text-primary">10 Times</strong></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    
                    <button class="btn btn-warning approved-button">Live</button>
                  </div>
                  
                </div>
                <div class="row mt-3 ">
                  <div class="col-lg-4 col-md-12">
                    <div class="row">
                      <div class="col-lg-6 col-md-4 col-sm-4 col-4">
                        <img src="{{$tender->user->profile_photo_path}}" class="table-img">
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <img src="{{$tender->user->user_detail->company_logo}}" class="es-image rounded-circle">
                        
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-4" style="padding:0px">
                        <p class="es-para">{{$tender->user->user_detail->company_name}}</p>
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="col-lg-5 col-md-12 card-inner-seeting">
                    <div class="col-lg-12">
                      <h6 class="furniture-font"><a href="{{route('user-opportunity-detail')}}" style="text-decoration:none;color:#212529">{{$tender->tender_title}}</a></h6>
                    </div>
                    <div class="col-lg-12">
                      <p style="color: #0d6efd!important;font-style: italic;">
                      @if($tender->items)
                      @php
                      $items = json_decode($tender->items->items, true);
                      $count = count($items)/3;
                      @endphp
                      @for($i=1;$i<=$count;$i++)
                        {{$i.'.'.$items['item'.$i]. ' '}}
                      @endfor
                      @endif
                    </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="reference-font"><strong>Reference: {{$tender->ref_no}}</strong></p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <div class="col-lg-12 col-md-12 due-date-setting">
                      <p style="font-size:12px;color: #0d6efd!important;">Due Date: {{date('m-d-Y', strtotime($tender->due_date))}}</p>
                    </div>
                    
                  </div>
                  
                </div>
              </div>

              <div class="row Line-73-padding">
              <div class="col-lg-12">
                <div class="Line-73"></div>
              </div>  
              </div>
              
              
              <div class="card-footer-outer-wrapper">
                <div class="row pt-1">
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <p style="  color: #484848;"><img src="{{asset('asset/images/Group 16933.png')}}"   class="rounded-circle img-fluid"> {{$tender->user->user_detail->city_name}}</p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 see-times col-6">
                    <p>Seen<strong  class="text-primary">10 Times</strong></p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <p style="  color: #484848;"><img src="{{asset('asset/images/forward.png')}}"   class="rounded-circle img-fluid"> Share</p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 setting-button">
                    <button class="btn btn-secondary running-button">Running</button>
                    <button class="btn btn-secondary approved">Extend Date</button>
                  </div>
                </div>
              </div>
              
            </div>
            @endforeach


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


    <!-- <script type="text/javascript">
        $(function(){
         $('.qualifiactionclass').on('change',function(){
            $('#qualifiaction').submit();
            });
        });
    </script> -->
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
