<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/add_new_opportunity_form.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>New Opportunity Mangement Form</title>
    <style type="text/css">
    .box{
    display: none;
    }
    .input {
    position: relative;
    width: 150px; height: 20px;
    color: white;
    }
    .input:before {
    position: absolute;
    top: 3px; left: 3px;
    content: attr(data-date);
    display: inline-block;
    color: black;
    }
    .input::-webkit-datetime-edit, .input::-webkit-inner-spin-button, .input::-webkit-clear-button {
    display: none;
    }
    .input::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 3px;
    right: 0;
    color: black;
    opacity: 1;
    }
    </style>
  </head>
  <body>
    
    
    @include('frontendtemplate.topnavbar')
    @include('frontendtemplate.navbar')
    <!-- <section class=" mb-5">
      <div class="background-image">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="opp-management"><strong>Opportunity Management</strong></h1>
          </div>
          <div class="col-lg-12 text-center">
            <h3 class="do-you-need">Do you need any assistnace? You can now <br> contact us any time</h3>
          </div>
          
        </div>
      </div>
    </section> -->
    <section class="mt-5">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-8 col-md-12 col-sm-12 mb-3">
            <h1 class="bottomh1">My <strong>Tender</strong> </h1>
          </div>
          
        </div>
        
        
      </div>
      
    </section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
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
    </div>
    
    <section class="mt-5">
      <form method="post" action="{{route('user-opportunity-save')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="opp_type" value="{{$type}}">
        <div class="container d-flex justify-content-center">
          <div class="col-12 col-offset-2">
            
            <div class="card mt-3">
              <!--  <div class="card-header font-weight-bold">General Step</div> -->
              <div class="card-body step">
                <div class="card-header font-weight-bold" style="background-color:#dfdfdf">
                  <i class="fa fa-step-forward" style="margin-right:10px"></i><strong>Step</strong>
                  <div>
                    <label >General Step</label>
                  </div>
                </div>
                <div class="radio-group row justify-content-between px-3 text-center" style="justify-content:center !important">
                  <div class="col-auto me-sm-2 mx-1 card-block py-0 text-center radio" style="margin-top:20px">
                    <div class="opt-icon"><i class="fa fa-user-plus" style="font-size: 70px; margin-left: 25px;"></i></div>
                    <p><b>Add New Tender</b></p>
                  </div>
                  
                </div>
              </div>
              
              <div id="userinfo" class="card-body p-4 step" style="display: none">
                <div class="card-header font-weight-bold" style="background-color:#dfdfdf">
                  <i class="fa fa-step-forward" style="margin-right:10px"></i><strong>Step 1</strong>
                  <div>
                    <label >General Information</label>
                  </div>
                </div>
                <div class="mb-3">
                  <h5 class="card-title font-weight-bold" style="margin-top:20px;color:#519bfd;">General Information</h5>
                </div>
                <div class="form-group row mb-3">
                  <div class="col-lg-2">
                    
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <label for="opp_title">Opportunity Title<b style="color: #dc3545;">*</b></label>
                    <select class="form-control" id="opp_title" name="opp_title" required>
                      <option value="{{Null}}">Choose</option>
                      @foreach($opp_title as $o)
                      <option value="{{$o->id}}">{{$o->opp_title}}</option>
                      @endforeach()
                    </select>
                    
                    <!-- <input type="text" name="opp_title" class="form-control" id="opp_title" required> -->
                    <div class="invalid-feedback">This field is required</div>
                  </div>
                  
                </div>
                <div class="form-group row mb-3">
                  <div class="col-lg-2">
                    
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <label for="internal_reference">Internal Reference Number<b style="color: #dc3545;">*</b></label>
                    <input type="text" name="internal_reference" class="form-control" id="internal_reference">
                  </div>
                  
                </div>
                
                <div class="form-group row mb-3">
                  <div class="col-lg-2">
                    
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <label for="due_date">Due Date<b style="color: #dc3545;">*</b></label>
                    <input type="date" name="due_date" placeholder="dd-mm-yyyy" class="form-control due_date_validation" id="due_date" required>
                    <div class="invalid-feedback">This field is required</div>
                  </div>
                  
                </div>
                
                
                @if($type=="SmallValue")
                <div class="form-group row mb-3">
                  <div class="row">
                    <div class="col-lg-2">
                      
                    </div>
                    <div class="col-lg-10">
                      <div>
                        <label><input type="radio" name="general_radio" value="bid_limit_radio"> Bid Limits</label>
                        <label><input type="radio" name="general_radio" value="urgent_opportunity"> Urgent opportunity</label>
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <div class="bid_limit_radio box">
                    <div class="row mt-3">
                      <div class="col-lg-2">
                        
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 ">
                        <label for="bid_limit">Bid Limit<b style="color: #dc3545;">*</b></label>
                        <input type="number" name="bid_limit" class="form-control" id="bid_limit" >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-2">
                      
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                      <label for="day_to_deliver">Days to Deliver<b style="color: #dc3545;">*</b></label>
                      <input type="text" name="day_to_deliver" class="form-control" id="day_to_deliver" required>
                      <div class="invalid-feedback">This field is required</div>
                      <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                        <label for="payment_day">Payment Days<b style="color: #dc3545;">*</b></label>
                        <input type="text" name="payment_day" class="form-control" id="payment_day" required>
                        <div class="invalid-feedback">This field is required</div>
                      </div>   </div>
                    </div>
                    
                    
                    
                    
                  </div>
                  
                  @endif
                </div>
                <div  class="card-body p-5 step" style="display: none">
                  <div class="card-header font-weight-bold" style="background-color:#dfdfdf">
                    <i class="fa fa-step-forward" style="margin-right:10px"></i><strong>Step 2</strong>
                    <div>
                      <label >Delivery Information</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <h5 class="card-title font-weight-bold" style="margin-top:20px;color:#519bfd;">Delivery Information</h5>
                  </div>
                  <div class="form-group row mb-3">
                    
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="col-lg-12 mb-3">
                        
                        <label for="company_name">Current Address<b style="color: #dc3545;">*</b></label>
                        <input type="text" name="current_address" value="{{Auth::user()->address}}" readonly class="form-control" id="company_name" required>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        
                        <label for="address">Another Address<b style="color: #dc3545;">*</b></label>
                        <input type="text" name="address" class="form-control" id="address" required>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        
                        <label for="delivery_city">Delivery City<b style="color: #dc3545;">*</b></label>
                        <input type="text" name="delivery_city" class="form-control" id="delivery_city" required>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        
                        <label for="instruction">Instruction<b style="color: #dc3545;">*</b></label>
                        <textarea class="form-control" id="instruction" name="instruction" cols="5" rows="5">
                        
                        </textarea>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div id="map" style="width:100%;height:300px;"></div>
                    </div>
                    
                  </div>
                </div>
                <div class="card-body p-5 step" style="display: none">
                  <div class="card-header font-weight-bold" style="background-color:#dfdfdf">
                    <i class="fa fa-step-forward" style="margin-right:10px"></i><strong>Step 3</strong>
                    <div>
                      <label >Qualification Criteria</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <h5 class="card-title font-weight-bold" style="margin-top:20px;color:#519bfd;">Qualification Criteria</h5>
                  </div>
                  <div class="form-group row mb-3">
                    
                    <div class="col-lg-8">
                      <div class="col-lg-12 col-md-12 mb-3">
                        
                        <label for="categories">Select Category<b style="color: #dc3545;">*</b></label>
                        <select class="form-control" name="category_id" id="categories" required>
                          <option value="{{Null}}">Choose</option>
                          @foreach($category as $c)
                          <option value="{{$c->id}}">{{$c->name}}</option>
                          @endforeach
                          
                        </select>
                      </div>
                      <div class="col-lg-12 col-md-12 mb-3">
                        
                        <label for="bidder_location">Bidders Location<b style="color: #dc3545;">*</b></label>
                        <input type="text" name="bidder_location" class="form-control" id="bidder_location" required>
                        <div class="invalid-feedback">This field is required</div>
                      </div>
                      
                      
                    </div>
                    <div class="col-lg-8">
                      <div class="col-lg-12 col-md-12 mb-3">
                        <label>Province</label>
            <select class="form-control mb-3" id="province" name="province_id">
                <option selected disabled>Select Province</option>
                @foreach ($province as $p)
                <option value="{{$p->id}}">{{$p->name}}</option>
                @endforeach()
            </select>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="col-lg-12 col-md-12 mb-3">
                        <label>City</label>
               <select class="form-control  mb-3" id="city" name="city_id">
                 
               </select>
                        
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <div class="card-body p-5 step" style="display: none">
                  <div class="card-header font-weight-bold" style="background-color:#dfdfdf">
                    <i class="fa fa-step-forward" style="margin-right:10px"></i><strong>Step 4</strong>
                    <div>
                      <label>Scope of Work</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <h5 class="card-title font-weight-bold" style="margin-top:20px;color:#519bfd;">Scope of Work</h5>
                  </div>
                  <div class="form-group row mb-3">
                    
                    <div class="col-lg-12">
                      <div class="form-group col-lg-12" id="wallet_div">
                        <a  id="add_wallet" class="btn btn-success">Add</a>
                        <a  id="remove_wallet" class="btn btn-warning">Remove</a>
                        <div class="row mt-3 mb-3">
                          <div class="form-group col-md-4">
                            <label for="">Item</label>
                            <input type="text" name="item[]" class="form-control" required>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="">Description</label>
                            <input type="text" name="description[]" class="form-control" required>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="">Quantity</label>
                            <input type="text" name="quantity[]" class="form-control" required>
                          </div>
                        </div>
                        
                      </div>
                      
                      
                      
                      
                      
                      <div class="col-lg-12 col-md-12 mb-3">
                        <label><strong>How do you want to receive quotation?</strong> </label>
                      </div>
                      <div class="col-lg-12 col-md-12 mb-3">
                        <input type="radio" id="combined" name="fav_language" value="combined">
                        <label for="combined" class="combined" >Combined in one proposal ( Technical specification & Commerical quotation )</label>
                      </div>
                      <div class="col-lg-12 col-md-12 mb-3">
                        <input type="radio" id="seperate" name="fav_language" value="seperate">
                        <label for="seperate" class="seperate">Separated into 2 proposal ( Techinal - Commerical ) where the commerical <br> proposal will be viewable after viewing the technical one.</label>
                      </div>
                      
                      
                    </div>
                    
                    
                  </div>
                </div>
                
                <div class="card-footer">
                  <div class="row text-center mt-3">
                    <div class="col-lg-12">
                      
                      <button class="action back btn btn-sm btn-outline-warning back-button " style="display: none">Back</button>
                      <button class="action next  next-button" >Move Next</button>
                      <button type="submit" class="action submit btn btn-sm btn-outline-success " style="display: none;padding: 5px 25px;">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
        </form>
        
      </section>
      <section class="mb-5 mt-5">
        <div class="container brief-container mb-5">
          <div class="col-lg-12">
            <h3 class="text-center" style="color:#519bfd">Brief Overview of the Services</h3>
          </div>
          <div class="col-lg-12 mt-3">
            <p class="text-center">{{isset($det)?$det->details:''}} </p>
          </div>
        </div>
      </section>
      <!-- <section class="section-top">
        <div class="container text-center">
          <div class="row mb-5">
            <div class="col-lg-12">
              <iframe class="video-width" src="https://www.youtube.com/embed/sdw0GQB5lJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        
        
      </section> -->
      
      <section class="mt-5">
        <div class="container last-picture-container">
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
              <a href="{{route('market-place')}}" class="btn btn-primary see-more">Show All</a>
            </div>
            
          </div>
          
        </div>
        
      </section>
      @include('frontendtemplate.footer')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvzUOgLYwHoBZGtk4Z_lrPphPR1nxTilo&callback=initMap">
      </script>
      <script type="text/javascript">
      function initMap() {
      var dumbo = {lat: 33.6844, lng:73.0479};
      var mapOptions = {
      center: dumbo,
      zoom: 10
      };
      var googlemap = new google.maps.Map(document.getElementById("map"), mapOptions);
      }
      </script>
      <script type="text/javascript">
      $(".radio-group .radio").on("click", function () {
      $(".selected .fa").removeClass("fa-check");
      $(".radio").removeClass("selected");
      $(this).addClass("selected");
      if ($("#suser").hasClass("selected") == true) {
      $(".next").prop("disabled", true);
      } else {
      setFormFields(false);
      $(".next").prop("disabled", false);
      }
      });
      var step = 1;
      $(document).ready(function () { stepProgress(step); });
      $(".next").on("click", function () {
      var nextstep = false;
      if (step == 2) {
      nextstep = checkForm("userinfo");
      } else {
      nextstep = true;
      }
      if (nextstep == true) {
      if (step < $(".step").length) {
      $(".step").show();
      $(".step").not(":eq(" + step++ + ")").hide();
      stepProgress(step);
      }
      hideButtons(step);
      }
      });
      // ON CLICK BACK BUTTON
      $(".back").on("click", function () {
      if (step > 1) {
      step = step - 2;
      $(".next").trigger("click");
      }
      hideButtons(step);
      });
      // CALCULATE PROGRESS BAR
      stepProgress = function (currstep) {
      var percent = parseFloat(100 / $(".step").length) * currstep;
      percent = percent.toFixed();
      $(".progress-bar")
      .css("width", percent + "%")
      .html(percent + "%");
      };
      // DISPLAY AND HIDE "NEXT", "BACK" AND "SUMBIT" BUTTONS
      hideButtons = function (step) {
      var limit = parseInt($(".step").length);
      $(".action").hide();
      if (step < limit) {
      $(".next").show();
      }
      if (step > 1) {
      $(".back").show();
      }
      if (step == limit) {
      $(".next").hide();
      $(".submit").show();
      }
      };
      function setFormFields(id) {
      if (id != false) {
      // FILL STEP 2 FORM FIELDS
      d = data.find(x => x.id === id);
      $('#fname').val(d.fname);
      $('#lname').val(d.lname);
      $('#team').val(d.team);
      $('#address').val(d.address);
      $('#tel').val(d.tel);
      }
      }
      function checkForm(val) {
      // CHECK IF ALL "REQUIRED" FIELD ALL FILLED IN
      var valid = true;
      $("#" + val + " input:required").each(function () {
      if ($(this).val() === "") {
      $(this).addClass("is-invalid");
      valid = false;
      } else {
      $(this).removeClass("is-invalid");
      }
      });
      return valid;
      }
      </script>
      <script type="text/javascript">
      $(document).ready(function(){
      $('input[type="radio"]').click(function(){
      var inputValue = $(this).attr("value");
      var targetBox = $("." + inputValue);
      $(".box").not(targetBox).hide();
      $(targetBox).show();
      });
      });
      </script>
      <script type="text/javascript">
      $(function(){
      var dtToday = new Date();
      
      var month = dtToday.getMonth() + 1;
      var day = dtToday.getDate();
      var year = dtToday.getFullYear();
      if(month < 10)
      month = '0' + month.toString();
      if(day < 10)
      day = '0' + day.toString();
      
      var minDate= year + '-' + month + '-' + day;
      
      $('.due_date_validation').attr('min', minDate);
      });
      </script>
      <script type="text/javascript">
      $('#add_wallet').click(function(){
      
      x = `
      <div class="row mt-3 mb-3 new-wallet-div">
        <div class="form-group col-md-4">
          <label for="">Item</label>
          <input type="text" name="item[]" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="">Description</label>
          <input type="text" name="description[]" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="">Quantity</label>
          <input type="text" name="quantity[]" class="form-control" required>
        </div>
      </div>`;
      $('#wallet_div').append(x);
      });
      $('#remove_wallet').click(function(){
      $('.new-wallet-div').last().remove();
      });
      </script>

      <script type="text/javascript">
        $(document).ready(function () {
            $('#province').on('change', function () {
                var provinceId = this.value;
                $('#city').html('');
                $.ajax({
                    url: '{{ route('get-cities') }}?province_id='+provinceId,
                    type: 'get',
                    success: function (res) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(res, function (key, value) {
                        $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
            });

            // $('#city').on('change', function () {
            //     var cityId = this.value;
            //     $('#sector').html('');
            //     $.ajax({
            //         url: '{{ route('get-sector') }}?city_id='+cityId,
            //         type: 'get',
            //         success: function (res) {
            //             $('#sector').html('<option value="">Select Sector</option>');
            //             $.each(res, function (key, value) {
            //             $('#sector').append('<option value="' + value.id + '">' + value.name + '</option>');
            //             });
            //         }
            //     });
            // });
        });
    </script>
    </body>
  </html>