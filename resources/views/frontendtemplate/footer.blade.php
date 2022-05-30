<section class="footer-image" style="margin-top:5rem;">
  <div class="container-fluid">
    <div class="row footer-center">
      <div class="col-lg-3 footer-top">
        <div class="footer-outer-wrapper">
          <img src="{{asset('asset/images/newlogo.png')}}" class="footer-img">
          <div class="col-md-12"> 
            <p class="text-white text-justify pt-3">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. </p>
          </div>
          <div class="row footer-social-media-row">
            <div class="col-lg-12 col-md-12 col-sm-12 socail-icon-padding">
              <h5 class="text-white text-justify footer-social-media-heading"> Social media</h5>
              <div class="Social-media-icon-div">
              <div class="d-inline p-1">
                <img src="{{asset('asset/images/facebook.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline p-1">
                <img src="{{asset('asset/images/twitter.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline p-1">
                <img src="{{asset('asset/images/insta.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline p-1">
                <img src="{{asset('asset/images/linkedin.png')}}" class="footer-image-space">
              </div>
              <div class="d-inline p-1">
                <img src="{{asset('asset/images/youtube.png')}}" class="footer-image-space">
              </div>
              </div>
            </div>
            
          </div>
        </div>
        
        
        
        
        
      </div>
      <!-- <div class="d-none d-md-block d-lg-none tablet-footer-top-margin"> -->
      <div class="col-lg-2 footer-top-margin">
        <ul>
          <li><strong>{{isset($setting)?$setting->label1:''}}</strong></li>
          <li>{{isset($setting)?$setting->label2:''}}</li>
          <li>{{isset($setting)?$setting->label3:''}}</li>
          <li>{{isset($setting)?$setting->label4:''}}</li>
        </ul>
        
      </div>
      <div class="col-lg-2 footer-top-margin">
        <ul>
          <li><strong>{{isset($setting)?$setting->label5:''}}</strong></li>
          <li>{{isset($setting)?$setting->label6:''}}</li>
          <li>{{isset($setting)?$setting->label7:''}}</li>
          <li>{{isset($setting)?$setting->label8:''}}</li>
        </ul>
      </div>
      <div class="col-lg-2 footer-top-margin">
        <ul>
          <li><strong>{{isset($setting)?$setting->label9:''}}</strong></li>
          <li>{{isset($setting)?$setting->label10:''}}</li>
          <li>{{isset($setting)?$setting->label11:''}}</li>
          <li>{{isset($setting)?$setting->label12:''}}</li>
        </ul>
      </div>
      <!-- </div> -->
      <div class="col-lg-3  footer-map-top">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3365.5996497270944!2d74.53780364990234!3d32.4833984375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea88683d0df5%3A0x36fc5354cce34da8!2sAkbar%20Mart!5e0!3m2!1sen!2s!4v1649448107215!5m2!1sen!2s" width="300px" height="200px" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
    </div>
    
  </div>
  
</section>
<section class="section-bottum-footer">
  <div class="row text-center" style=" display: flex;
  align-items: center;
  justify-content: center; margin:0;">
    <div class="col-lg-12 px-0">
      <p class="bottum-footer">All right reserved 2022 by Brotions. Developed and maintained by <a href="https://fabtechsol.com/"> Fabulous Technology Solutions.</a></p>
    </div>
    
  </div>
</section>
@include('sweetalert::alert')