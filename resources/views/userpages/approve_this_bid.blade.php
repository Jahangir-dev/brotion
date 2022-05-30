<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/approve_this_bid.css')}}">
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
            <h2 class="detail-setting">Detail of Tender</h2>
          </div>
          
        </div>
        
        
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="col-lg-12 d-flex">
              <img src="{{asset('asset/images/Group 16892.svg')}}" class="img-fluid">
              <h5 class="furniture-setting">Furniture</h5>
            </div>
            <div class="col-lg-12 reference-col">
              <p class="reference-no">Reference No. <span class="reference-span">001</span></p>
          
            </div>
            <div class="col-lg-12 mt-3 live-class mb-3">
              <button class="btn live-button">Live</button>
              <h5 class="reference-span"> 2 days to go</h5>
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
                  <img src="{{asset('asset/images/1280px-Test-Logo.svg.svg')}}" class="card-side-logo" >
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
                <h3>You have Approved this bid.</h3>
              </div>
            </div>
            <form>
              <div class="row mt-3 mb-3">
                <div class="col-lg-3">
                  <img src="{{asset('asset/images/company logo1.svg')}}" class="image-setting-es rounded-circle">
                  <label class="bider-name">Bidder Name</label>
                </div>
                <div class="col-lg-3">
                  <label class="price-proposal-vat-label">Price</label>
                  <div>
                    <input type="text" name="price" class="form-control input-setting">
                  </div>
                </div>
                <div class="col-lg-3">
                  <label class="price-proposal-vat-label">Proposal</label>
                  <div>
                    <input type="file" name="Proposal" class="form-control input-setting1" >
                  </div>
                </div>
                <div class="col-lg-3">
                  <label class="price-proposal-vat-label">Vat</label>
                  <div>
                    <input type="text" name="vat" class="form-control input-setting">
                  </div>
                </div>
                <div class="col-lg-3 mb-5">
                  <div style="display: flex; align-items: center;margin-top: 5rem;">
                    <input type="checkbox" class="mark_as_paid" name="mark_as_paid" id="mark_as_paid"><label for="mark_as_paid" class="mark_as_paid-label"> Mark as a paid?</label>
                  </div>
                  <button class="btn save-button">Send</button>
                  
                </div>
              </div>
            </form>
            
            
            
          </div>
        </div>
      </section>
      
      
      
      
      
      
      
      
      @include('frontendtemplate.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      
      
      
    </body>
  </html>