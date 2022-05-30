@extends('template.partials.default')
@section('content')
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="main-content">
        <section class="section">
          <div class="section-header">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-content">
									<h1>Sector Edit</h1>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="section-header-breadcrumb-chart float-right">
								</div>
							</div>
						</div>
          </div>
        
     <div class="card">
      <div class="card-body">
         <div class="mb-3">
          <label>Province</label>
            <select class="form-control form-select-lg mb-3" id="province">
                <option selected disabled>Select Province</option>
                @foreach ($province as $p)
                <option value="{{$p->id}}">{{$p->name}}</option>
                @endforeach()
            </select>
        </div>



        <div class="mb-3">
          <label>City</label>
            <select class="form-control form-select-lg mb-3" id="city"></select>
        </div>




        <!-- <div class="mb-3">
          <label>Sector</label>
            <select class="form-control form-select-lg mb-3" id="sector"></select>
        </div> -->
        
      </div>
       
     </div>        

        <script type="text/javascript">
        $(document).ready(function () {
            $('#province').on('change', function () {
                var provinceId = this.value;
                $('#city').html('');
                $.ajax({
                    url: '{{ route('get-cities') }}?province_id='+provinceId,
                    type: 'get',
                    success: function (res) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(res, function (key, value) {
                        $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
            });

            // $('#city').on('change', function () {
            //     var cityId = this.value;
            //     $('#sector').html('');
            //     $.ajax({
            //         url: '{{ route('get-sector') }}?city_id='+cityId,
            //         type: 'get',
            //         success: function (res) {
            //             $('#sector').html('<option value="">Select Sector</option>');
            //             $.each(res, function (key, value) {
            //             $('#sector').append('<option value="' + value.id + '">' + value.name + '</option>');
            //             });
            //         }
            //     });
            // });
        });
    </script>   

      </section>
  </div>
@endsection()