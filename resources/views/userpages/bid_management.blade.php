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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Bid Mangement</title>
    <style type="text/css">
    .box-shadow{
    box-shadow: none;
    }
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-3">
      <div class="container">
        
        <div class="row mt-5 mb-5">
          <div class="col-lg-3 col-md-3 category">
            <form method="get" class="category-form" action="{{route('bid-management')}}">
              <select class="form-select form-select1" name="category" onchange="this.form.submit()">
                <option value="{{Null}}"> Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach()
                
              </select>
              <i class="bi bi1 bi-chevron-down"></i>
            </form>
           
          </div>
          <div class="col-lg-5 col-md-6 search">
            <form action="{{route('bid-management')}}" method="get" role="search" style="margin-bottom:20px;">
              <div class="input-group input-icons">
                <input class="form-control search-input" name="opp_title" type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input" placeholder="Search">
                
                <img src="{{asset('asset/images/search1.svg')}}" class="search-icon-new">
              </div>
            </form>
          </div>
          <div class="col-lg-4 col-md-3 sort-by-row">
            <form action="{{route('bid-management')}}" method="get" class="sort-form">
              <select class="form-select form-select2 sort-by" name="sortby" onchange="this.form.submit()">
                <option value="{{Null}}">Sort by</option>
                <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Assending">Assending</option>
                <option value="Descending">Descending</option>
              </select>
              <i class="bi bi2 bi-caret-down-fill"></i>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-5 mb-3">
            <div class="card bottom-card" style="height: 100%;">
              <div class="card-body">
                <form action="{{route('market-place')}}" method="get" id="qualifiaction" role="search" class="card-body-qualifiaction">
                  <div class="col-lg-12 mb-3 card-check-boxes-heading">
                    <h1>Filter by:</h1>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="all" class="check-box qualifiactionclass" name="data" value="all">
                    <label for="all" class="label-card"> Approved</label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="yes" class="check-box qualifiactionclass" name="data" value="yes">
                    <label for="yes" class="label-card"> Pending </label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
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
            <div class="card-left">
              <div class="card-body card-padding">
                <div class="row card-button">
                  <div class="col-lg-12">
                    <p class="btn button-setting">1000</p>
                    <p class="btn btn-warning button-setting-closed">Closed</p>
                  </div>
                  
                </div>
                <div class="row row-responsive mt-3">
                  <div class="col-lg-4 col-md-12">
                    <div class="row card_two_iner_row">
                      <div class="col-lg-6 col-md-4 col-sm-4 col-4">
                        <img src="{{asset('asset/images/table.png')}}" class="table-img">
                      </div>
                      <div class="col-lg-4 px-0 col-md-4 col-sm-4 col-4">
                        <img src="{{asset('asset/images/es.png')}}" class="es-image rounded-circle">
                        
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-4" style="padding: 0px">
                        <p class="es-para">Company</p>
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="col-lg-5 col-md-12 card-inner-seeting">
                    <div class="col-lg-12 px-0">
                      <h6 class="furniture-font">Furniture (Tender Title)</h6>
                    </div>
                    <div class="card-items">
                      <div class="card-item1">
                      <p><strong>1.</strong> <i>Item name</i></p>
                    </div>
                      <div class="card-item2">
                      <p><strong>2.</strong> <i>Item name</i></p>
                    </div>
                    </div>
                    <div class="col-lg-12 px-0">
                      <p class="reference-font">Reference: Any Reference</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 Date-para-col">
                    <div class="col-lg-12 col-md-12">
                      <p class="Date-para"><i>Due Date:</i>   3-21-2021</p>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12">
                <div class="Line-73"></div>
              </div>
              
              <div class="card-footer-outer-wrapper">
                <div class="row card-last-row pt-1">
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <p class="Riadh"><img src="{{asset('asset/images/ic_place_24px.svg')}}"   class="rounded-circle img-fluid"><span>Riadh</span></p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 see-times col-6">
                    <p>Seen<span>10 Times</span></p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <p class="Sahre" style="  color: #484848;"><img src="{{asset('asset/images/md-share-alt.svg')}}"   class="rounded-circle img-fluid"><span>Share</span></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end">
                    <p class="btn approved-button">Approved</p>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="card-left">
              <div class="card-body card-padding">
                <div class="row card-button">
                  <div class="col-lg-12">
                    <p class="btn button-setting">1000</p>
                    <p class="btn btn-warning button-setting-closed">Closed</p>
                  </div>
                  
                </div>
                <div class="row row-responsive mt-3">
                  <div class="col-lg-4 col-md-12">
                    <div class="row card_two_iner_row">
                      <div class="col-lg-6 col-md-4 col-sm-4 col-4">
                        <img src="{{asset('asset/images/table.png')}}" class="table-img">
                      </div>
                      <div class="col-lg-4 px-0 col-md-4 col-sm-4 col-4">
                        <img src="{{asset('asset/images/es.png')}}" class="es-image rounded-circle">
                        
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-4" style="padding: 0px">
                        <p class="es-para">Company</p>
                      </div>
                      
                    </div>
                    
                  </div>
                  <div class="col-lg-5 col-md-12 card-inner-seeting">
                    <div class="col-lg-12 px-0">
                      <h6 class="furniture-font">Furniture (Tender Title)</h6>
                    </div>
                    <div class="card-items">
                      <div class="card-item1">
                      <p><strong>1.</strong> <i>Item name</i></p>
                    </div>
                      <div class="card-item2">
                      <p><strong>2.</strong> <i>Item name</i></p>
                    </div>
                    </div>
                    <div class="col-lg-12 px-0">
                      <p class="reference-font">Reference: Any Reference</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 Date-para-col">
                    <div class="col-lg-12 col-md-12">
                      <p class="Date-para"><i>Due Date:</i>   3-21-2021</p>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12">
                <div class="Line-73"></div>
              </div>
              
              <div class="card-footer-outer-wrapper">
                <div class="row card-last-row pt-1">
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <p class="Riadh"><img src="{{asset('asset/images/ic_place_24px.svg')}}"   class="rounded-circle img-fluid"><span>Riadh</span></p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 see-times col-6">
                    <p>Seen<span>10 Times</span></p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <p class="Sahre" style="  color: #484848;"><img src="{{asset('asset/images/md-share-alt.svg')}}"   class="rounded-circle img-fluid"><span>Share</span></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end">
                    <p class="btn approved-button">Approved</p>
                  </div>
                </div>
              </div>
              
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