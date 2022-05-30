@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>User List</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
									
								
									
								</div>
							</div>
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
                          <th scope="col">Role</th>
                          <th scope="col">Name</th>
                          <th scope="col" style="width:17%;">Login Status</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php $i=1
                      	@endphp
                      	@foreach($user as $u)
                      	<tr>
                      		<td>{{$i++}}</td>
                      		<td>{{ucwords($u->role)}}</td>
                      		<td>{{$u->name}}</td>
                      		<td>@if($u->login_status=='1')<button class="btn btn-primary" style="width:108%">Approved Account</button>@elseif($u->login_status=='0')<button>Pending Account</button>
                          @endif
                      		</td>
                      		<td>{{$u->email}}</td>
                      		<td>{{$u->phone}}</td>
                      		<td>{{$u->address}}</td>
                      		<td><a href="{{route('user-delete',['id'=>$u->id,'role'=>$u->role])}}" class="btn btn-dark">Delete</a></td>
                      	</tr>
                      	@endforeach()
                        
                        
                        
                      </tbody>
                    </table>
                    {{$user->links()}}
                  </div>
                </div>
                
                
              </div>
             
            </div>

      </section>
  </div>
@endsection()