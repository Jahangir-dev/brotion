@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>Province List</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
								</div>
							</div>
						</div>
          </div>

         <div class="row mb-3">
          <div class="col-lg-12 ">
            <a href="{{route('add-new-province')}}" class="btn btn-primary" style="float:right;">Add New Province</a>

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
                          <th scope="col">Province Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      @php $i=1
                      @endphp
                      <tbody>
                      	@foreach($province_list as $p)
                      	<tr>
                      		<td>{{$i++}}</td>
                      		<td>{{$p->name}}</td>
                      		<td><a href="{{route('province-edit',['id'=>$p->id])}}" class="btn btn-primary" style="margin-right:10px">Edit</a>
                        <a href="{{route('province-delete',['id'=>$p->id])}}" class="btn btn-dark">Delete</a></td>
                      	</tr>
                      	@endforeach()
                      </tbody>
                      
                      
                      
                      
                    </table>
                    
                    
                  </div>
                </div>
                
                
              </div>
             
            </div>

      </section>
  </div>
@endsection()