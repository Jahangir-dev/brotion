@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>Category List</h1>
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
              <a href="{{route('add-new-opp-category')}}" class="btn btn-primary" style="float:right;">Add Category</a>
              
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
                          <th scope="col">Name</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1
                        @endphp
                        @foreach($category as $c)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$c->name}}</td>
                          <td>
                            <a href="{{route('opp-category-edit',['id'=>$c->id])}}" class="btn btn-primary">Edit</a>
                              <a href="{{route('opp-category-delete',['id'=>$c->id])}}" class="btn btn-dark">Delete</a>
                          </td>
                          
                        </tr>
                        @endforeach()
                      </tbody>
                      
                      
                    </table>
                    {{$category->links()}}
                    
                  </div>
                </div>
                
                
              </div>
             
            </div>

      </section>
  </div>
@endsection()