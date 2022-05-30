<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/review.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Opportunity Details</title>
    <style type="text/css">
      .timeline {
  width:auto;
  height: 20px;
  list-style: none;
  text-align: justify;
  margin: 80px auto;
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 45%, rgba(191,128,11,1) 51%, rgba(255,255,255,0) 57%, rgba(255,255,255,0) 100%);
}

.timeline:after {display: inline-block; content: ""; width: 100%;}

.timeline li {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: #F2BB13;
  text-align: center;
  line-height: 1.2;
  position: relative;
  border-radius: 50%;
}

.timeline li:before {
  display: inline-block;
  content: attr(data-year);
  font-size: 15px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.timeline li:nth-child(odd):before {
  top: -50px;
}
.timeline li:nth-child(even):before {
  bottom: -50px;
}

.timeline li:after {
  display: inline-block;
  content: attr(data-text);
  font-size: 15px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.timeline li:nth-child(odd):after {
  bottom: 0;
  margin-bottom: -10px;
  transform: translate(-50%, 100%);
}
.timeline li:nth-child(even):after {
  top: 0;
  margin-top: -10px;
  transform: translate(-50%, -100%);
}
    </style>
  </head>
  <body>
    
<section class="mt-5 mb-5">
  <div class="container">
    <div class="row mb-5">

      <div class="col-lg-3 col-md-3 col-sm-3 go-back-width">
       <a href="{{route('market-place')}}"> <i class="fa fa-arrow-left" aria-hidden="true"></i><label style="margin-left:5px;">Go Back</label></a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 detail-of-opportunity-width">
        <h3 class="text-center detail-of-opportunity"><strong>Detail of the Opportunity</strong></h3>
      </div>
      <div class="col-lg-3 text-end col-md-3 col-sm-3 icon-width">
        <a href="{{route('print-opportunity-detail',['id'=>$opportunity_details->id])}}"><i class="fa fa-print" aria-hidden="true" style="margin-right:10px;" onclick="print_fee_table();" ></i></a>
        
      </div>
      
    </div>
       <table cellpadding="5" cellspacing="5"  border="2" class="table-bordered" style="width: 100%;" >
          
          <tbody>
            <tr>
              <td style="display:block;">
               <div class="row" >
      <div class="col-lg-12" id="print_fee_table">
        <div class="card" style="background-color:#f3f3f3;">
          <div class="row mt-3">
            <div class="col-lg-12">
              <h6 style="text-align: center;"><strong>{{isset($opportunity_details->user_opp_title)?$opportunity_details->user_opp_title->opp_title:''}}</strong></h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mt-1 rcc-row">
              <label class="rcc21121601" style="font-size:12px"><strong>{{$opportunity_details->internal_reference}}</strong></label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-1 logo-row">
              <img src="{{isset($opportunity_details->user_detail)?$opportunity_details->user_detail->company_logo:''}}" style="    max-width: 100px;
    float: right;
    margin-right: 20px;
    height: 55px;">
            </div>
            
          </div>
          <div class="row mt-3 mb-3">
            <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                @if($due_date_count>$opportunity_details->due_day)
              <div class="d-inline-block mb-3">
                <a href="" class="btn btn-primary open-button" >Open</a>
              </div>
              <div class="d-inline-block">
                <label style="font-size:13px"><strong>{{$due_date_count}} Days to go</strong></label>
              </div>
              @else
                <div class="d-inline-block">
                <a href="" class="btn btn-primary open-button" >Close</a>
              </div>
              <div class="d-inline-block mt-1">
                <label style="font-size:13px"><strong>Bidding is Closed On This Opportunity</strong></label>
              </div>
              
              @endif
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 mb-3">
              
              
            </div>
            
          </div>
          <div class="row mt-5">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
              <div class="row">
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Publisher:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{isset($opportunity_details->user_detail)?$opportunity_details->user_detail->company_name:''}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Publish Date:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->created_at->format('Y-m-d')}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Categories:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->categories}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Delivery Location:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->bidder_location}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Delivery Time:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->due_date}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Issuance:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->opp_type}}</label>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <h6><strong>Payment days:</strong></h6>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-6 bottom-row-divide mb-3">
                  <label>{{$opportunity_details->payment_days}}</label>
                </div>
                
              </div>
              
            </div>
            
            
          </div>
        </div>
      </div>
      
    </div> 
              </td>
            </tr>
             
            
                             
          </tbody>


        </table>
    
    
  </div>
  
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components/dist/simpleRange.min.js">
    </script>
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
  
  function print_fee_table() 
{

  var divToPrint=document.getElementById('print_fee_table');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

</script>

  </body>
</html>