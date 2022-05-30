@extends('template.partials.default')
@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>User Bidding List</h1>
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
                          <th scope="col">Company Name</th>
                          <th scope="col">Opportunity Type</th>
                          <th scope="col">Opportunity Title</th>
                          <th scope="col">Internal Reference</th>
                          <th scope="col">Due Date</th>
                          <th scope="col">Bidder Location</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1
                        @endphp
                        @foreach($opportunity as $opp)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{isset($opp->user_detail)?$opp->user_detail->company_name:''}}</td>
                          <td>{{$opp->opp_type}}</td>
                          <td>{{isset($opp->user_opp_title)?$opp->user_opp_title->opp_title:''}}</td>
                          <td>{{$opp->internal_reference}}</td>
                          <td>{{$opp->due_date}}</td>
                          <td>{{$opp->bidder_location}}</td>
                          <td><a href="{{route('admin-user-bidding-delete',['id'=>$opp->id])}}" class="btn btn-dark">Delete</a></td>
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