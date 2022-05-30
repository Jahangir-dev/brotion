@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>Details List</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
									
								
									
								</div>
							</div>
						</div>
          </div>


           <div class="row">
            <div class="col-lg-12 mb-3">
              <a href="{{route('add-details')}}" class="btn btn-primary" style="float:right;">Add Details</a>
              
            </div>
             
           </div>
          <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4></h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Details</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1
                        @endphp
                        @if(isset($detail))
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{isset($detail)?$detail->details:''}}</td>
                          <td>
                            <a href="{{route('admin-detail-edit',['id'=>$detail->id])}}" class="btn btn-primary">Edit</a>
                            
                          </td>
                          <td><a href="{{route('admin-detail-delete',['id'=>$detail->id])}}" class="btn btn-dark">Delete</a></td>
                        </tr>
                        @endif()
                      </tbody>
                      
                    </table>
                    
                  </div>
                </div>
                
                
              </div>
             
            </div>

      </section>
  </div>
@endsection()