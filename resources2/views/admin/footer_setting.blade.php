@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>Footer Setting</h1>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-chart float-right">
          </div>
        </div>
      </div>
    </div>
    <form method="post" action="{{route('footer-setting-save')}}">
      @csrf
   @if(isset($setting))
      <input type="hidden" name="id" value="{{$setting->id}}">
      @endif
    <div class="row">
      
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-12">
                <h6>Section 1</h6>
              </div>
              <div class="col-lg-3">
                <label>Label 1</label>
                <input type="text" name="label1"  value="{{isset($setting)?$setting->label1:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 2</label>
                <input type="text" name="label2"  value="{{isset($setting)?$setting->label2:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 3</label>
                <input type="text" name="label3"  value="{{isset($setting)?$setting->label3:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 4</label>
                <input type="text" name="label4"  value="{{isset($setting)?$setting->label4:''}}" class="form-control" required>
              </div>
              
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <h6>Section 2</h6>
              </div>
              <div class="col-lg-3">
                <label>Label 1</label>
                <input type="text" name="label5"  value="{{isset($setting)?$setting->label5:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 2</label>
                <input type="text" name="label6"  value="{{isset($setting)?$setting->label6:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 3</label>
                <input type="text" name="label7"  value="{{isset($setting)?$setting->label7:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 4</label>
                <input type="text" name="label8"  value="{{isset($setting)?$setting->label8:''}}" class="form-control" required>
              </div>
              
            </div>
            <div class="row mb-3">
              <div class="col-12">
                <h6>Section 3</h6>
              </div>
              <div class="col-lg-3">
                <label>Label 1</label>
                <input type="text" name="label9"  value="{{isset($setting)?$setting->label9:''}}" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 2</label>
                <input type="text" name="label10" value="{{isset($setting)?$setting->label10:''}}"  class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 3</label>
                <input type="text" name="label11" value="{{isset($setting)?$setting->label11:''}}"  class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Label 4</label>
                <input type="text" name="label12" value="{{isset($setting)?$setting->label12:''}}"  class="form-control" required>
              </div>
              
            </div>
            <div class="row mt-5">
              <div class="col-lg-12">
                @if(isset($setting))
                <a href="{{route('footer-setting-delete',['id'=>$setting->id])}}" class="btn btn-dark" style="float:right;margin-right:10px;padding:3px 40px;">Clear</a>
                @endif
                <button type="submit" class="btn btn-primary" style="float:right;padding: 3px 40px;margin-right: 10px;">Save</button>
              </div>
            </div>
            
            
            
          </div>
        </div>
        
        
      </div>
      
    </div>
    </form>
  </section>
</div>
@endsection()