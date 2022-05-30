@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>City Edit</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
								</div>
							</div>
						</div>
          </div>
        <form method="post" action="{{route('admin-city-update')}}">
          @csrf
        <input type="hidden" name="id" value="{{$edit->id}}">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="col-lg-12 mb-3">
                      <label><strong>Province Name</strong></label>
                      <select class="form-control" name="province_id">
                        <option value="{{Null}}">Choose</option>
                        @foreach($province as $p)
                        <option value="{{$p->id}}" {{ ($edit->province_id == $p->id) ? 'selected' : '' }}>{{$p->name}}</option>
                        @endforeach()
                        
                      </select>
                      
                    </div>
                    <div class="col-lg-12">
                      <label><strong>City Name</strong></label>
                      <input type="text" name="name" value="{{$edit->name}}"  class="form-control" required>
                    </div>

                    <div class="col-lg-12 mt-3">
                      <a href="" class="btn btn-dark" style="float:right">Exit</a>
                      <button type="submit" class="btn btn-primary" style="float:right;margin-right: 20px;">Save</button>

                      
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