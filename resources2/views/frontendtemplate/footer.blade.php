<section class="footer-image" style="margin-top:5rem;">
      <div >
        <div class="container-fluid textcenter">
          <div class="row pt-5 ">
            <div class="col-lg-3 col-md-12 col-sm-12 ">
            <img src="{{asset('asset/images/newlogo.png')}}">
            </div>
          </div>


          <div class="row pt-3">
            <div class="col-lg-2 col-md-2 col-sm-12 ">
              <p class="text-white pt-3">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</p>
               </div>
            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">

                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label1:''}}</label>
                </div>
                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label2:''}}</label>
                </div>
                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label3:''}}</label>
                </div>
                <div class="col-lg-12 mb-1">
                  <label style="color:white;">{{isset($setting)?$setting->label4:''}}</label>
                </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">

                <div class="col-lg-12 mb-1">
                  <label style="color:white;">{{isset($setting)?$setting->label5:''}}</label>
                </div>
                <div class="col-lg-12 mb-1">
                  <label style="color:white;">{{isset($setting)?$setting->label6:''}}</label>
                </div>
                <div class="col-lg-12 mb-1">
                  <label style="color:white;">{{isset($setting)?$setting->label7:''}}</label>
                </div>
                <div class="col-lg-12 mb-1">
                  <label style="color:white;">{{isset($setting)?$setting->label8:''}}</label>
                </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">

                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label9:''}}</label>
                </div>
                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label10:''}}</label>
                </div>
                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label11:''}}</label>
                </div>
                <div class="col-lg-12 mb-1 ">
                  <label style="color:white;">{{isset($setting)?$setting->label12:''}}</label>
                </div>


            </div>




        <div class="col-lg-2 col-md-2 col-sm-12 text-center ">

            <div class="d-inline">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3365.5996497270944!2d74.53780364990234!3d32.4833984375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea88683d0df5%3A0x36fc5354cce34da8!2sAkbar%20Mart!5e0!3m2!1sen!2s!4v1649448107215!5m2!1sen!2s" width="300px" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>


        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <hr style="height: 2px; color: white;">
          </div>

        </div>
        <div class="container pb-5">
          <div class="row" >


            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                <h5 class="text-white"> Social media</h5>
              <div class="d-inline">
                <img src="{{asset('asset/images/facebook.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline">
                <img src="{{asset('asset/images/twitter.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline">
                <img src="{{asset('asset/images/insta.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline">
                <img src="{{asset('asset/images/linkedin.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline">
                <img src="{{asset('asset/images/youtube.png')}}" class="footer-image-space">
              </div>
            </div>
            {{-- <div class="col-lg-2 col-md-6 col-sm-12 text-center"></div>
              <div class="col-lg-4 col-md-6 col-sm-12 text-center">

                <div class="d-inline">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3365.5995912925773!2d74.5378!3d32.4834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea88683d0df5%3A0x36fc5354cce34da8!2sAkbar%20Mart!5e0!3m2!1sen!2s!4v1650472780136!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="footer-image-space"></iframe>
                </div>

              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 text-center"></div> --}}
      </div>
        </div>
    </section>
       @include('sweetalert::alert')
