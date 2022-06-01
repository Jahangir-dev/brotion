<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/showmarket.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show Market</title>
    <style type="text/css">
    .box-shadow{
    box-shadow: none;
    }
    </style>
  </head>
  <body>
    <section class="coverImage">
      @include('frontendtemplate.navbarn')
      <div class=" container-fluid  text-center ">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-9  pt-5 mt-5 show-market-padding  d-block ">
            <h1 class="text-white">We show you the market</h1>
            <p class="text-white d-inline d-block">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without</p>
            <button  class="btn btn-primary btnarena">Open Opportunities</button>
            <a href="" class="playbtn"><img class="img-fluid p-2" src="{{asset('asset/images/Icon ionic-ios-play-circle 1.svg')}}"></a>
          </div>
        </div>
      </div>
    </section>
    <section class="advertising-section">
      <div class="container advertising-container">
        <div class="row text-center advertising-row">
          <div class="col-1 px-0">
            
          </div>
          <div class="col-md-2 col-2 px-md-4">
            <img src="{{asset('asset/images/media1.svg')}}" class="img-fluid">
          </div>
          <div class="col-md-2 col-2 px-md-4">
            <img src="{{asset('asset/images/propel1.svg')}}" class="img-fluid">
          </div>
          <div class="col-md-2 col-2 px-md-4">
            <img src="{{asset('asset/images/ad1.svg')}}" class="img-fluid">
          </div>
          <div class="col-md-2 col-2 px-md-4">
            <img src="{{asset('asset/images/adv1.svg')}}" class="img-fluid" >
          </div>
          <div class=" col-md-2 col-2 px-md-4">
            <img src="{{asset('asset/images/gpm1.svg')}}" class="img-fluid">
          </div>
          <div class="col-1 px-0">
            
          </div>
        </div>
      </div>
    </section>
    <section class="mt-3">
      <div class="container">
        
        <div class="row mt-3 mb-3 uper-row-responsive">
          <div class="col-lg-3 col-md-4 category">
            <form method="get" action="{{route('market-place')}}">
              <select class="form-select form-select1" name="category" onchange="this.form.submit()">
                <option value="{{Null}}"> Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach()
              </select>
            </form>
          </div>
          <div class="col-lg-5 col-md-5 search">
            <form action="{{route('market-place')}}" method="get" role="search" style="margin-bottom:20px;">
              <div class="input-group input-icons">
                <input class="form-control search-input" name="opp_title"  type="search" value="{{isset($request->opp_title)?$request->opp_title:''}}" id="example-search-input"  placeholder="Search" >
                <img src="{{asset('asset/images/search1.svg')}}" class="search-icon-new">
              </div>
            </form>
          </div>
          <div class="col-lg-4 col-md-3 sort-by-row">
            <form action="{{route('market-place')}}" method="get" >
              <select class="form-select form-select2 sort-by" name="sortby" onchange="this.form.submit()">
                <option value="{{Null}}">Sort by</option>
                <option value="Newest">Newest</option>
                <option value="Oldest">Oldest</option>
                <option value="Assending">Assending</option>
                <option value="Descending">Descending</option>
              </select>
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
                    <label for="all" class="label-card"> Open</label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="yes" class="check-box qualifiactionclass" name="data" value="yes">
                    <label for="yes" class="label-card"> Closed</label>
                  </div>
                  <div class="col-lg-12 card-check-boxes">
                    <input type="checkbox" id="no" class="check-box qualifiactionclass" name="data" value="no">
                    <label for="no" class="label-card">City</label>
                  </div>
                </form>
                <div class="col-lg-12 mt-5 mb-5">
                  <hr style="height:2px;color:black;">
                </div>
                <form action="{{route('market-place')}}" method="get" id="opptype" role="search" style="margin-bottom:20px;">
                  <div class="col-lg-12 mb-3">
                    {{-- <h6><strong>Opportunity Type</strong></h6> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-7">
            <div class="row card-row-width">
              @if($opportunity)
              @foreach($opportunity as $tender)
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card card_bg">
                  <div class="card-body card-padding">.
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                        <p class="Uper-rowparaleft">Seen <span style="color: #1C76B9;font-weight: 600;"> {{$tender->seen}} Times</span></p>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end">
                        <p class="Uper-rowpararight"> <i> Due date:</i> {{date('m/d/Y',strtotime($tender->due_date))}}</p>
                      </div>
                    </div>
                    <div class="row pt-3">
                      <div class="col-lg-4 col-md-4 col-sm-6 col-4 ">
                        <div class="Rectangle-6614  text-center">
                          <p style="color: #1C76B9; font-size: 1.3rem; font-family: 'Open Sans';">{{$tender->due_date < now() ? 'Closed' : 'Live'}}</p>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-6 col-8 ">
                        <p class="d-inline furniture-width"><a href="{{route('new-opportunity-detail')}}" style="text-decoration: none; color: #484848;"><strong>{{$tender->tender_title}}</strong></a></p>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <div class="col-lg-4 col-md-4 col-sm-6 col-4" style="padding:0px">
                        <img src="{{$tender->user->profile_photo_path}}" alt="" class="rounded img-fluid images-width">
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-6 col-8 ">
                        <div class="items-rowone">
                          <div class="items-rowone-itemone">
                          <p class="d-inline item-font-size" >
                          @if($tender->items)
                      @php
                      $items = json_decode($tender->items->items, true);
                      $count = count($items)/3;
                      @endphp
                      @for($i=1;$i<=$count;$i++)
                      
                          <strong> {{$i}}.</strong> <i>{{$items['item'.$i]}}  </i> 
                          @endfor
                      @endif  
                        </p>
                          </div>
                        </div>
                        
                        <div class="items-rowtwo">
                          <div class="items-rowtwo-itemone">
                            <img class="img-fluid" style="width: 60px;height: 60px;" src="{{$tender->user->user_detail->company_logo}}">
                          </div>
                          <div class="items-rowtwo-itemtwo">
                            <p class="mb-4 company-font">{{$tender->user->user_detail->company_name}}</p>
                          </div>
                          
                        </div>
                        
                        
                        
                      </div>
                    </div>
                    <div class="Line-73"></div>
                    <div class="row pt-1">
                      <div class="col-xl-4 col-3">
                        <p class="cards-last-rowone-paras"><img src="{{asset('asset/images/ic_place_24px.svg')}}"   class="rounded-circle img-fluid cards-last-rowimgone"> <span class="cards-last-rowimg-span"> {{$tender->user->user_detail->city_name}}</span></p>
                      </div>
                      <div class="col-xl-4 col-5">
        <p class="cards-last-rowone-paras">Seen<strong class="cards-last-rowone-paras-strong"> {{$tender->seen}} Times</strong></p>
                      </div>
                      <div class="ps-xl-5 col-xl-4 col-4">
      <p class="cards-last-rowone-paras"><img src="{{asset('asset/images/md-share-alt.svg')}}"   class="rounded-circle img-fluid cards-last-rowimgtwo"> <span class="cards-last-rowimg-span">Share </span></p>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              @endforeach
              @endif
              <!-- </div> -->
              
              
              
              
              
              
              
              {{-- @endif
              @endforeach() --}}
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