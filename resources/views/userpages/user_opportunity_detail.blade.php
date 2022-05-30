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
              <h1 class="furniture-setting">Furniture</h1>
            </div>
            <div class="col-lg-12 reference-col">
              <p class="reference-no">Reference No. <span class="reference-span">001</span></p>
            </div>
            <div class="col-lg-12 mt-3 live-class mb-3">
              <button class="btn live-button">Live</button>
              <h5 class="reference-span">2 days to go</h5>
            </div>
            <div class="col-lg-12 card-uper-para-col">
              <p class="card-uper-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  et...</p>
            </div>
            <div class="col-lg-12">
              <div class="card right-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Publisher</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">Consultation</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Publish date :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">3-21-2022</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Category :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">Electronics</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Delivery City :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">Riyadh</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Delivery deadline :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">3-30-2022</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Payment days :</h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">15 days</p>
                    </div>
                    <div class="col-lg-7 col-7">
                <h1 class="right-card-headings">Payment Type  : </h1>
                    </div>
                    <div class="col-lg-5 col-5">
                <p class="right-card-paras">Payment on delivery</p>
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
                  <div class="Scriptcontent">
                    <!-- partial:index.partial.html -->
                    <ul class="timeline">
                      <li data-text="Publish Date." data-year="16 Des" ></li>
                      <li data-year=""></li>
                      <li data-year=""></li>
                      <li data-year=""></li>
                      <li data-year=""></li>
                      <li data-year=""></li>
                      <li data-year="19  Des" data-text="Due Date."></li>
                      <li data-year="" data-text="Awarded"></li>
                    </ul>
                    <!-- partial -->
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3 item-setting">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Item Name</label>
                <div class="background-div-setting">
                  <h1>Furniture</h1>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <label class="Item-description">Description</label>
                <div class="background-div-setting">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, .</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 text-lg-end">
                <label class="Item-quantity">Quantity</label>
                <div class="background-div-quantity">
                  <p>1</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Scope Of Work</label>
                <div class="type-of-scope">
                  <p>Doc Name</p>
                </div>
              </div>
            </div>
            <hr class="items-mid-line">
            <div class="row mt-3 item-setting">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Item Name</label>
                <div class="background-div-setting">
                  <h1>Furniture</h1>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <label class="Item-description">Description</label>
                <div class="background-div-setting">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, .</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 text-lg-end">
                <label class="Item-quantity">Quantity</label>
                <div class="background-div-quantity">
                  <p>1</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <label class="Item-names">Scope Of Work</label>
                <div class="type-of-scope">
                  <p>Doc Name</p>
                </div>
              </div>     
            </div>
            <div class="row approve-top">
              <div class="col-lg-12">
                <h3>Approve on bid on the Opportunity</h3>
              </div>
            </div>
            <div class="row mt-md-5">
              <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="outer-wrapper-bidder">
                  <label><b style="color: #1C76B9;">1.</b></label>
                  <img src="{{asset('asset/images/company logo1.svg')}}" class="image-setting-es rounded-circle">
                  <label class="bider-name">Bidder Name</label>
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
                    <label>10000</label>
                  </div>
                  <div>
                    <label>Download Doc</label>
                  </div>
                  <div>
                    <label>50</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="outer-wrapper-button">
    <a class="btn approve-button-bottom">Approve</a>
                </div>
              </div>
            </div>
            <div class="row mt-md-5 mt-3">
              <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="outer-wrapper-bidder">
                  <label><b style="color: #1C76B9;">2.</b></label>
                  <img src="{{asset('asset/images/company logo1.svg')}}" class="image-setting-es rounded-circle">
                  <label class="bider-name">Bidder Name</label>
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
                    <label>10000</label>
                  </div>
                  <div>
                    <label>Download Doc</label>
                  </div>
                  <div>
                    <label>50</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="outer-wrapper-button">
    <a class="btn approve-button-bottom">Approve</a>
                </div>
              </div>
            </div>
            <div class="row mt-md-5 mt-3">
              <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="outer-wrapper-bidder">
                  <label><b style="color: #1C76B9;">3.</b></label>
                  <img src="{{asset('asset/images/company logo1.svg')}}" class="image-setting-es rounded-circle">
                  <label class="bider-name">Bidder Name</label>
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
                    <label>10000</label>
                  </div>
                  <div>
                    <label>Download Doc</label>
                  </div>
                  <div>
                    <label>50</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="outer-wrapper-button">
    <a class="btn btn-primary approve-button-bottom">Approve</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      
      
      
      
      
      
      @include('frontendtemplate.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      
      
      
    </body>
  </html>