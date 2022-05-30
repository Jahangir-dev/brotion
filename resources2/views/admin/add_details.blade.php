@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>Add New Detail</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
								</div>
							</div>
						</div>
          </div>
        <form method="post" action="{{route('admin-details-save')}}">
          @csrf
          @if(isset($det))
  <input type="hidden" name="id" class="form-control" value="{{$det->id}}">
  @endif()
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="col-lg-12 mb-3">
                     
                      
                    </div>
                    <div class="col-lg-12">
                      <label><strong>Details</strong></label>
                      <textarea class="form-control" required name="details" cols="5" rows="5" style="height:150px!important">
                        @if(isset($det->details))
                        {!!$det->details!!}
                         @endif
  
                      </textarea>
                      
                    </div>

                    <div class="col-lg-12 mt-3">
                      <a href="{{route('admin-details')}}" class="btn btn-dark" style="float:right">Exit</a>
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