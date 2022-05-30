<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/profile.css')}}">
    <script src="https://kit.fontawesome.com/e342930ad0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    </style>
    <title>Place new order-1</title>
</head>
<style>
    .pointer {
        cursor: pointer;
    }
</style>
<body>
    <section style="background-color:#1c76b9;">
        @include('frontendtemplate.navbarn')
    </section>
    <div class=" new-order-container">
        <div class="p-5">
            <h1 class="mt-4 TEXT-COLOR">
                Place New Tender
            </h1>
        </div>
        <div class="new-order-container-steps">

            <div class="new-order-container-step">
                <div>
                    <a class="pointer"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>

                </div>
                <div>
                    <div class="TEXT-COLOR">
                        <h3>Step1</h3>
                    </div>
                    <div class="TEXT-COLOR">
                        Basic Details
                    </div>
                </div>
            </div>

            <div class="new-order-container-step">
                <div>
                    <a class="step_one pointer"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>
                </div>
                <div>
                    <div>
                        <h3>Step2</h3>
                    </div>
                    <div>
                        Technical Details
                    </div>
                </div>
            </div>

            <div class="new-order-container-step">
                <div>
                    <a class="step_one pointer"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>
                </div>
                <div>
                    <div>
                        <h3>Step3</h3>
                    </div>
                    <div>
                        Riview And submit
                    </div>
                </div>
            </div>

        </div>

        <div class="  new-order-container-bootom-part">
            <div class="new-order-container-bootom-part-content">
               @csrf
               <input type="hidden" id="tender_id" value="{{$tender->id ?? ''}}">
                <div class="TEXT-COLOR h4 fw-bold">
                    <label for="">Please select trade role</label>
                </div>
                <div class="new-order-container-bootom-part-content_radioButton mt-3">
                    <div class="d-flex gap-2 TEXT-COLOR fw-bold">
                        <div>
                            <input type="radio" name="test1" {{ (($tender->services ?? '') == 'services')? "checked" : "" }} value="services" id="services">
                        </div>
                        <div>
                            <label class="h5" for="services">Services</label>
                        </div>
                    </div>
                    <div class="d-flex gap-2 TEXT-COLOR fw-bold">
                        <div>
                            <input type="radio" name="test1" {{ (($tender->services ?? '') == 'product')? "checked" : "" }}  value="product" id="product">
                        </div>
                        <div>
                            <label class="h5" for="product">Product</label>
                        </div>
                    </div>
                    <br>
                    <span class="text-danger" id="services_error"></span>
                </div>
                <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3 ">
                    <div class="text-height-4">
                        <label class=" fw-bold h5 TEXT-COLOR" for="tender_category">
                            Tender Category:
                        </label>
                        <div>
                            <select class=" h5 INPUT_LARGE" name="" id="tender_category">
                               @foreach($categories as $category)
                               @if(isset($tender->tender_category))
                                    <option  @if ($category->id ==  $tender->tender_category ?? '')selected="selected" @endif value="{{$category->id}}">{{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                               @endforeach
                            </select>
                        </div>
                        <span class="text-danger" id="tender_error"></span>
                    </div>

                    <div class="">
                        <label class=" fw-bold h5 TEXT-COLOR" for="tender_title">
                            Tender Title:
                        </label>
                        <div>
                            <input class="h5 INPUT_LARGE" type="text" name="" id="tender_title" placeholder="Please enter tender title" value="{{$tender->tender_title ?? ''}}">
                            <br>
                            <span class="text-danger" id="tender_title_error"></span>
                        </div>
                    </div>

                </div>

                <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3 ">


                    <div class="">
                        <label class=" fw-bold h5 TEXT-COLOR" for="ref_no">
                            Reference No:
                        </label>
                        <div>
                            <input class="h5 INPUT_LARGE" type="text" name="" id="ref_no" placeholder="Please enter Reference no if any" value="{{$tender->ref_no ?? ''}}">
                            <br>
                            <span class="text-danger" id="ref_no_error"></span>
                        </div>
                    </div>

                    <div class="">
                        <label class=" fw-bold h5 TEXT-COLOR" for="payment_method">
                            Payment Method:
                        </label>
                        <div>
                            <select class=" h5 INPUT_LARGE" name="" id="payment_method">
                                <option value="cash">
                                    Cash
                                </option>
                                <!-- <option value="">2</option>
                                <option value="">3</option> -->
                            </select>
                            <br>
                            <span class="text-danger" id="payment_method_error"></span>
                        </div>
                    </div>

                </div>

                <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3 ">
                    <div class="">
                        <label class=" fw-bold h5 TEXT-COLOR" for="delivery_city">
                            Delivery City:
                        </label>
                        <div>
                            <select class=" h5 INPUT_LARGE" name="" id="delivery_city">
                                @foreach($cities as $city)
                                @if(isset($tender->delivery_city))
                                    <option  @if ($city->id ==  $tender->delivery_city ?? '')selected="selected" @endif value="{{$city->id}}">{{$city->name}}</option>
                                @else
                                <option  value="{{$city->id}}">{{$city->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <br>
                            <span class="text-danger" id="delivery_city_error"></span>
                        </div>
                    </div>


                    <div class="">
                        <label class=" fw-bold h5 TEXT-COLOR" for="payment_days">
                            Payment Days:
                        </label>
                        <div>
                            <input class="h5 INPUT_LARGE" type="text" name="" id="payment_days" placeholder="Days" value="{{$tender->payment_days ?? ''}}">
                            <br>
                            <span class="text-danger" id="payment_days_error"></span>
                        </div>
                    </div>


                </div>

                <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3 ">

                    <div>
                        <label class="fw-bold h5 TEXT-COLOR" for="due_date">
                            Due Date:
                        </label>
                        <div>
                            <input class=" h5 INPUT_LARGE TEXT-COLOR" type="text" name="" id="due_date" onblur="type='text'" onfocus="type='date'" value="{{$tender->due_date ?? ''}}"> 
                            <br>
                            <span class="text-danger" id="due_date_error"></span>
                        </div>
                    </div>

                </div>
                <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3 ">
                    <div>
                        <label class="fw-bold h5 TEXT-COLOR" for="purchase_cond">
                            Purchase Condition:
                        </label>
                        <div>
                            <textarea name="" id="purchase_cond" cols="50" rows="3" >{{$tender->purchase_cond ?? ''}}</textarea>
                            <br>
                            <span class="text-danger" id="purchase_cond_error"></span>
                        </div>
                    </div>

                </div>

                <div class="BUTTON-CONTAINER">
                    <button class="BTN step_one" onclick="" id="step_one">Move Next</button>
                </div>
            
            </div>
        </div>

    </div>


    @include('frontendtemplate.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/form.js') }}"></script>

    <script src="https://kit.fontawesome.com/f46361531e.js" crossorigin="anonymous"></script>

    <script>
        var countre = 1;

        function add_more_field() {
            countre += 1
            html = '<div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3" id="row" >\
                <div class="col-1 d-flex flex-column">\
                <div>\
                <label for="">No.' + countre + '</label>\
                </div>\
                </div>\
                <div class="col-11 gap-3 d-flex flex-column flex-md-row">\
                <div class="">\
                <label class="fw-bold h5 TEXT-COLOR" for="item">Item</label>\
                <div>\
                <input class="INPUT_MEDIUM" type="text" name="product' + countre + '"  id="item">\
                </div>\
                </div>\
                <div>\
                <div>\
                <label class="fw-bold h5 TEXT-COLOR" for=""> Description</label>\
                </div>\
                <div>\
                <textarea class=" TEXT-COLOR" name="product' + countre + '"  id="" cols="50" rows="3"></textarea>\
                </div>\
                </div>\
                <div>\
                <div>\
                <label class="fw-bold h5 TEXT-COLOR" for=""> Quality</label>\
                </div>\
                <div>\
                <input class="INPUT_MEDIUM" type="text" name="product' + countre + '"  id="">\
                </div>\
                </div>\
                </div>\
                </div>\
                '
            var form = document.getElementById('product_form')
            form.innerHTML += html;
        }

        function remove(button) {
            console.log(button)
            let number = button.id;
            let row = document.getElementById('row')
            row.remove();
        }
    </script>

</body>

</html>