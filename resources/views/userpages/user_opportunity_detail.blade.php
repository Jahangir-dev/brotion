<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/user_opportunity_detail.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Opportunity Mangement</title>
    
  </head>
  <style>
        .dot {background: blueviolet !important;}
  </style>
  <body>
    <section style="background-color:#1c76b9;">
      @include('frontendtemplate.navbarn')
    </section>
    <section class="mt-3 mb-3">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-12">
            <h1 class="detail-setting">Detail of Tender</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="col-lg-12 d-flex">
              <img src="{{asset('asset/images/Group 16892.svg')}}" class="img-fluid">
              <h1 class="furniture-setting">{{$tender->tender_title}}</h1>
            </div>
            <div class="col-lg-12 reference-col">
              <p class="reference-no">Reference No. <span class="reference-span">{{$tender->ref_no}}</span></p>
            </div>
            <div class="col-lg-12 mt-3 live-class mb-3">
              <button class="btn live-button">{{$tender->due_date < now() ? 'Closed' : 'Live'}}</button>
              <h5 class="reference-span">
                @if($tender->due_date >= now())
              {{ round((strtotime($tender->due_date) - time()) / 86400) . ' days to go' }}  
              @endif
            </div>
            <div class="col-lg-12 card-uper-para-col">
              <!-- <p class="card-uper-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  et...</p> -->
            </div>
            <div class="col-lg-12">
              <div class="card right-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Publisher</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{$tender->user->name}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Publish date :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{date('d-m-Y', strtotime($tender->created_at))}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Category :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{$tender->category->name}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Delivery City :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{$tender->city->name ?? ''}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Delivery deadline :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{date('d-m-Y', strtotime($tender->due_date))}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Payment days :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{$tender->payment_days . ' days'}}</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Payment Type  : </h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">{{$tender->payment_method}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 left-part col-md-8">
            <div class="card custom-card">
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{asset('asset/images/1280px-Test-Logo.svg.svg')}}" class="card-side-logo img-fluid" >
                </div>
                <div class="col-lg-9">
                <?php 
                            $future = strtotime($tender->due_date);
                            $now = time();
                            $timeleft = $future-$now;
                            $daysleft = round((($timeleft/24)/60)/60);

                            $daysleft = $daysleft/5;

                            $date_now = new DateTime();
                            $date2    = new DateTime($tender->created_at);
                            
                            $nowDate = false;
                            
                            if ($date_now >= $date2) {
                                  $nowDate = true;
                            }
                          ?>
                  
                  <div class="Scriptcontent">
                    
                    <!-- partial:index.partial.html -->
                    <ul class="timeline">
                      <li data-text="Publish Date." @if($nowDate) class="dot" @endif data-year="{{date('d M', strtotime($tender->created_at))}}" ></li>
                      
                      <li data-year="" @if($daysleft >= 2) class="dot" @endif></li>
                      <li data-year="" @if($daysleft >= 1.5 && $daysleft < 2 ) class="dot" @endif></li>
                      <li data-year="" @if($daysleft >= 1 && $daysleft < 1.5) class="dot" @endif></li>
                      
                      <li data-year="" @if($daysleft >= 0.5 && $daysleft < 1) class="dot" @endif></li>
                      <li data-year="" @if($daysleft > 0 && $daysleft < 0.5) class="dot" @endif></li>
                      
                      <li @if($daysleft == 0 && $daysleft < 0) class="dot" @endif data-year="{{date('d M', strtotime($tender->due_date))}}" data-text="Due Date."></li>
                      <li data-year="" data-text="Awarded"></li>
                      
                      
                      
                      
                    </ul>
                    <!-- partial -->
                  </div>
                </div>
              </div>
            </div>
            @if($tender->items)
                      @php
                      $items = json_decode($tender->items->items, true);
                      $count = count($items)/3;
                      @endphp
                      @for($i=1;$i<=$count;$i++)
                      
            <div class="row mt-3 item-setting">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Item Name</label>
                <div class="background-div-setting">
                  <h1>{{$items['item'.$i]}}</h1>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <label class="Item-description">Description</label>
                <div class="background-div-setting">
                  <p>{{$items['descrpt'.$i]}}</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 text-lg-end">
                <label class="Item-quantity">Quantity</label>
                <div class="background-div-quantity">
                  <p>{{$items['quality'.$i]}}</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Scope Of Work</label>
                <div class="type-of-scope">
                  
                @if($tender->items->sow == 'on' && $tender->items->document_file != null)
                  <?php dd($tender->items); $uploadFolder = 'tenders/' . $tender->id . '/' . $tender->items->document_file;?>
                  <a href="{{asset($uploadFolder)}}" download="{{$tender->items->document_file}}" class="btn">{{$tender->items->document}} <i class="bi bi1 bi-download" style="font-size:18px ;"></i></a>
                @else 
                  <p>{{'Not available'}}</p>
                @endif
                </div>
              </div>
            </div>
            
            <hr class="items-mid-line">
            @endfor
                      @endif
            <div class="row approve-top">
              <div class="col-lg-12">
                <h3>Approve on bid on the Opportunity</h3>
              </div>
            </div>
            @if(count($tender->bids))
            @foreach($tender->bids as $bid)
            <div class="row mt-md-5">
              <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="outer-wrapper-bidder">
                  <label><b style="color: #1C76B9;">1.</b></label>
                  @if($bid->bidder->user_detail->company_logo != "")
                  <img style="width: 60px;" src="{{$bid->bidder->user_detail->company_logo}}" class="image-setting-es rounded-circle">
                  @endif
                  <label class="bider-name">{{$bid->bidder->name}}</label>
                </div>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-7">
                <div class="outer-wrapper-ppv">
                  <label>price</label>
                  <label>Proposal</label>
                  <label>VAT</label>
                </div>
                <div class="outer-wrapper-ppv-bottom">
                  <div>
                    <label>{{$bid->price}}</label>
                  </div>
                  <div>
                    <a type="button" href="{{route('download-proposal', ['id' => $bid->id])}}">Download Doc</a>
                  </div>
                  <div>
                    <label>{{$bid->vat}}</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="outer-wrapper-button">
                  @if($bid->approved)
                  <button class="btn approve-button-bottom" disalbed>Approved</button>
                  @else
                  <a href="{{route('approveBid', ['id' => $bid->id])}}" class="btn approve-button-bottom">Approve</a>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </section>
      
      
      
      
      
      
      
      
      @include('frontendtemplate.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      
      
      
    </body>
  </html>