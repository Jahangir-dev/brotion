<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/business.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Business</title>
  </head>
  <body style="width: 100%;">

   @include('frontendtemplate.navbar')
    <section >
        <section class="text-white">
            <div class=" container text-center  pt-5  ">
                <div class="row">
                <div class="bg" >
                      <div class="d-flex flex-row-reverse pt-5 icon">

                        <img class="img-fluid" src="{{asset('asset/images/ic_photo_camera_24px.png')}}">
                      </div>
                  </div>
                </div>
            </div>
          </section>

          <section>





              <div class="container pb-2 ">
                  <div class="row  ">

                     <div class="col-lg-3 col-md-2 col-sm-2 col-12" >
                        <div class="irene-strong-v2aKnjMbP_k-unsplash text-center ">
                            <img class="img-fluid pt-2 " src="{{asset('asset/images/ic_photo_camera_24px.png')}}">
                        </div>
                    </div>

                      {{-- <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="pl-5 bd-highlight"> </div>

                      </div> --}}
                      <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="pl-5 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight mb-3">
                        <div class=" pt-3 bd-highlight"> <h3 class="">
                            John Smith
                          </h3></div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class=" pt-4 pl-3 bd-highlight"> <p class="Joined-by-May-2020">
                            Joined by May 2020
                        </p></div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> </div>

                      </div>
                      <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"> <button href="{{route('profile-update')}}" class="add-bussiness" > Buyer & Seller</button></div>
                      </div>

                   </div>
         <div class="row pt-2 ">
            <div class="col-lg-3 col-md-2 col-sm-2 col-12" >

            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"> <img class="img-fluid" src="{{asset('asset/images/Group 16945.png')}}"></div>
                <div class="p-2 bd-highlight"><p class="">Johnsmith@gmail.com </p></div>

              </div>

              <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"> <img class="img-fluid" src="{{asset('asset/images/Group 16946.png')}}"></div>
                <div class="p-2 bd-highlight"> <p >
                    058575755757
                </p></div>

              </div>
            <div class="col-lg-4 col-md-2 col-sm-2 col-12 pt-3" >


            </div>

         </div>
              </div>
          </section>
    <section class="mt-1">
      <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

            </div>


        </div>


        <div class="row mt-3">
          <div class="col-lg-12">
            <div class="card user-detail-card">
              <div class="card-body">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"><strong> About me: </strong></h4></div>
                    {{-- <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"></h4></div>
                    <div class="p-2 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"><strong> About me: </strong></h4></div> --}}
                  </div>



                <div class="row mt-3">
                  {{-- <div class="col-lg-3 mb-3">
                    <h6>Comapny Name:</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->company_name:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>Representative  Name:</h6>
                    <label>{{$user->name}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>Position:</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->position:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>Land line number – extension:</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->landline_number:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>Street Number</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->street_name:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>District Name</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->district_name:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>City Name</h6>
                    <label>{{isset($user->user_detail)?$user->user_detail->city_name:''}}</label>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <h6>Company Certificate </h6>
                    <a href="{{isset($user->user_detail)?$user->user_detail->commerical_registration:''}}" style="text-decoration:none">Comapny Cerificate</a>
                  </div> --}}

 <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"> </div>
                <div class="p-2 bd-highlight"> <p >
                    In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content
                </p></div>

              </div>
                </div>
              </div>

            </div>

          </div>

        </div>
        {{-- <div class="row mt-5 mb-5">
          <div class="col-lg-12">
            <div class="card middle-card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-4">
                        <img src="{{isset($user->user_detail)?$user->user_detail->company_logo:''}}" class="sidelogo">
                      </div>
                      <div class="col-lg-9 col-md-8 col-sm-8 hayet-leather-center">
                        <div class="col-lg-12">
                          <h6 class="hayet-leather">{{ucwords(isset($user->user_detail)?$user->user_detail->company_name:'')}}</h6>
                        </div>
                        <div class="col-lg-12 mt-3">
                          <label>{{ucwords(isset($user->user_detail)?$user->user_detail->position:'')}}</label>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 cr-padding">
                    <div class="col-lg-12 cr-number mb-1">
                      <label><strong>Building  Number:</strong> {{isset($user->user_detail)?$user->user_detail->building_number:''}}   </label>
                    </div>
                    <div class="col-lg-12 mb-1">
                      <label><strong>Zip Code:</strong>   {{isset($user->user_detail)?$user->user_detail->zip_code:''}}    </label>
                    </div>
                    <div class="col-lg-12 mb-1">
                      <label><strong>Commerical Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->commerical_registration:''}}" style="text-decoration:none"> Commerical Certificate</a>   </label>
                    </div>
                    <div class="col-lg-12 mb-1">
                      <label><strong>Vat Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->vat_certification:''}}" style="text-decoration:none">Vat Certificate</a>   </label>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div> --}}
        {{-- <div class="row mt-5 mb-3">
          <div class="col-lg-12">
            <h3 class="who-are-you"><strong>Who are we?</strong></h3>
          </div>
          <div class="col-lg-12 mt-3">
            <p>{{isset($det)?$det->details:''}} </p>
          </div>

        </div> --}}

      </div>
    </section>
    <section class="mt-5">
        <div class="container">
      <div class="row mt-3">
            <div class="col-12 ">
              <div class="card user-detail-card">
                <div class="card-body">
                  <div class="d-flex flex-row bd-highlight mb-3">
                      <div class=" p-1 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"><strong> Tenders </strong></h4></div>
                      <div class="p-1 bd-highlight"> <span style="font-family: Poppins;letter-spacing: 0.55px;   color: #1c76b9;"> Tender titles </span></div>

                    </div>


                  <div class="row mt-3">


                      <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12 "> <div class="Rectangle-733">
                        <div>
                        <h5 class="Car-selling text-center pt-1">
                       <strong> Tender one</strong>
                        </h5>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12"> <div class="Rectangle-733">
                        <div>
                            <h5 class="Car-selling text-center pt-1">
                           <strong> Car selling</strong>
                            </h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12"> <div class="Rectangle-733">

                        <div>
                            <h5 class="Car-selling text-center pt-1">
                           <strong> Computer selling</strong>
                            </h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12"> <div class="Rectangle-733">

                        <div>
                            <h5 class="Car-selling text-center pt-1">
                           <strong> Refrigerator sale</strong>
                            </h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12"> <div class="Rectangle-733">

                        <div>
                            <h5 class="Car-selling text-center pt-1">
                           <strong> Mobile repair</strong>
                            </h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-2 p-1 col-12"> <div class="Rectangle-733">

                        <div>
                            <h5 class="Car-selling text-center pt-1 ">
                           <strong> Table selling</strong>
                            </h5>
                        </div>
                    </div>
                    </div>



                </div>

                    <div class="row mt-3">


                          <div class="col-lg-2 col-md-6 col-sm-2 p-2 col-12"> <div class="Rectangle-733">

                            <div>
                                <h5 class="Car-selling text-center pt-1">
                               <strong> Car selling</strong>
                                </h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-2  p-2 col-12"> <div class="Rectangle-733">

                            <div>
                                <h5 class="Car-selling text-center pt-1">
                               <strong>Computer selling</strong>
                                </h5>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-2 p-2 col-12"> <div class="Rectangle-733">

                            <div>
                                <h5 class="Car-selling text-center pt-1">
                               <strong> Refrigerator sale</strong>
                                </h5>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-2 p-2 col-12"> <div class="Rectangle-733">

                            <div>
                                <h5 class="Car-selling text-center pt-1">
                               <strong> Mobile repair</strong>
                                </h5>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-2  p-2 col-12"> <div class="Rectangle-733">

                            <div>
                                <h5 class="Car-selling text-center pt-1">
                               <strong> Car selling</strong>
                                </h5>
                            </div>
                        </div>
                        </div>



                      </div>


              </div>

            </div>

          </div>
          {{-- <div class="row mt-5 mb-5">
            <div class="col-lg-12">
              <div class="card middle-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4">
                          <img src="{{isset($user->user_detail)?$user->user_detail->company_logo:''}}" class="sidelogo">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 hayet-leather-center">
                          <div class="col-lg-12">
                            <h6 class="hayet-leather">{{ucwords(isset($user->user_detail)?$user->user_detail->company_name:'')}}</h6>
                          </div>
                          <div class="col-lg-12 mt-3">
                            <label>{{ucwords(isset($user->user_detail)?$user->user_detail->position:'')}}</label>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 cr-padding">
                      <div class="col-lg-12 cr-number mb-1">
                        <label><strong>Building  Number:</strong> {{isset($user->user_detail)?$user->user_detail->building_number:''}}   </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Zip Code:</strong>   {{isset($user->user_detail)?$user->user_detail->zip_code:''}}    </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Commerical Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->commerical_registration:''}}" style="text-decoration:none"> Commerical Certificate</a>   </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Vat Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->vat_certification:''}}" style="text-decoration:none">Vat Certificate</a>   </label>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div> --}}
          {{-- <div class="row mt-5 mb-3">
            <div class="col-lg-12">
              <h3 class="who-are-you"><strong>Who are we?</strong></h3>
            </div>
            <div class="col-lg-12 mt-3">
              <p>{{isset($det)?$det->details:''}} </p>
            </div>

          </div> --}}

        </div>
      </section>







      <section class="mt-5">
        <div class="container">
          <div class="row mb-5">
              <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

              </div>


          </div>


          {{-- <div class="row mt-5 mb-5">
            <div class="col-lg-12">
              <div class="card middle-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4">
                          <img src="{{isset($user->user_detail)?$user->user_detail->company_logo:''}}" class="sidelogo">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 hayet-leather-center">
                          <div class="col-lg-12">
                            <h6 class="hayet-leather">{{ucwords(isset($user->user_detail)?$user->user_detail->company_name:'')}}</h6>
                          </div>
                          <div class="col-lg-12 mt-3">
                            <label>{{ucwords(isset($user->user_detail)?$user->user_detail->position:'')}}</label>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 cr-padding">
                      <div class="col-lg-12 cr-number mb-1">
                        <label><strong>Building  Number:</strong> {{isset($user->user_detail)?$user->user_detail->building_number:''}}   </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Zip Code:</strong>   {{isset($user->user_detail)?$user->user_detail->zip_code:''}}    </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Commerical Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->commerical_registration:''}}" style="text-decoration:none"> Commerical Certificate</a>   </label>
                      </div>
                      <div class="col-lg-12 mb-1">
                        <label><strong>Vat Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->vat_certification:''}}" style="text-decoration:none">Vat Certificate</a>   </label>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div> --}}
          {{-- <div class="row mt-5 mb-3">
            <div class="col-lg-12">
              <h3 class="who-are-you"><strong>Who are we?</strong></h3>
            </div>
            <div class="col-lg-12 mt-3">
              <p>{{isset($det)?$det->details:''}} </p>
            </div>

          </div> --}}

        </div>
      </section>
      <section class="mt-5">
          <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-sm-4">

                </div>


            </div>


            <div class="row mt-3">
              <div class="col-lg-12">
                <div class="card user-detail-card">
                  <div class="card-body">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class=" p-1 bd-highlight"> <h4 style="font-family: Poppins;letter-spacing: 0.55px;"><strong> Photo Gallery </strong></h4></div>

                      </div>
                     <div class="row pt-2 justify-content-center text-center">
                         <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                            <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                            <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                            <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                            <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                            <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                         </div>

                     </div>

                     <div class="row pt-2  pb-5 justify-content-center text-center">
                        <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                           <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                           <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                           <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                           <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                           <img src="{{asset('asset/images/tv.png')}}" alt="" class="rounded img-fluid">
                        </div>

                    </div>

                </div>

              </div>

            </div>
            {{-- <div class="row mt-5 mb-5">
              <div class="col-lg-12">
                <div class="card middle-card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 col-sm-4">
                            <img src="{{isset($user->user_detail)?$user->user_detail->company_logo:''}}" class="sidelogo">
                          </div>
                          <div class="col-lg-9 col-md-8 col-sm-8 hayet-leather-center">
                            <div class="col-lg-12">
                              <h6 class="hayet-leather">{{ucwords(isset($user->user_detail)?$user->user_detail->company_name:'')}}</h6>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <label>{{ucwords(isset($user->user_detail)?$user->user_detail->position:'')}}</label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 cr-padding">
                        <div class="col-lg-12 cr-number mb-1">
                          <label><strong>Building  Number:</strong> {{isset($user->user_detail)?$user->user_detail->building_number:''}}   </label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label><strong>Zip Code:</strong>   {{isset($user->user_detail)?$user->user_detail->zip_code:''}}    </label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label><strong>Commerical Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->commerical_registration:''}}" style="text-decoration:none"> Commerical Certificate</a>   </label>
                        </div>
                        <div class="col-lg-12 mb-1">
                          <label><strong>Vat Certificate:</strong>   <a href="{{isset($user->user_detail)?$user->user_detail->vat_certification:''}}" style="text-decoration:none">Vat Certificate</a>   </label>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div> --}}
            {{-- <div class="row mt-5 mb-3">
              <div class="col-lg-12">
                <h3 class="who-are-you"><strong>Who are we?</strong></h3>
              </div>
              <div class="col-lg-12 mt-3">
                <p>{{isset($det)?$det->details:''}} </p>
              </div>

            </div> --}}

          </div>
        </section>







    <section class="mt-5">
        <div class="container text-center ">
          <div class="row text-center pt-5">
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">

              </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
              <img src="{{asset('asset/images/media.png')}}" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
              <img src="{{asset('asset/images/propel.png')}}" class="img-fluid"  >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
              <img src="{{asset('asset/images/ad.png')}}" class="img-fluid"  >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
              <img src="{{asset('asset/images/adv.png')}}" class="img-fluid"  >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
              <img src="{{asset('asset/images/gpm.png')}}" class="img-fluid">
            </div>

          </div>


        </div>

      </section>
    @include('frontendtemplate.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
