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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style type="text/css">
    </style>
    <title>Place new order-3</title>
</head>

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
                    <a href="/new_tender_one"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>

                </div>
                <div>
                    <div>
                        <h3>Step1</h3>
                    </div>
                    <div>
                        Basic Details
                    </div>
                </div>
            </div>

            <div class="new-order-container-step">
                <div>
                    <a href="/new_tender_two"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>
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
                    <a href="/new_tender_third_tab"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>
                </div>
                <div>
                    <div class="TEXT-COLOR">
                        <h3>Step3</h3>
                    </div>
                    <div class="TEXT-COLOR">
                        Riview And submit
                    </div>
                </div>
            </div>


        </div>
        @csrf
        <div class=" new-order-container-bootom-part">
            <div class="new-order-container-bootom-part-content">
            <input type="hidden" name="tender_id" id="tender_id" value="{{$tender->id}}" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-height-4">
                            <label class="label-field" for="tender_title">
                                Tender Title:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="tender_title">{{$tender->tender_title ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="tender_title">
                                Tender Category:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="tender_title">{{$tender->category['name'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="ref_no">
                                Tender internal ref:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="ref_no">{{$tender->ref_no ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="ref_no">
                                Delivery City:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="ref_no">{{$tender->city['name'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="payment_days">
                                Payment method:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="payment_days">Cash</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="payment_days">
                                Due date:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="payment_days">{{$tender->due_date ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label class="label-field" for="payment_days">
                                Payment Days:
                            </label>
                            <div>
                                <p class="input-fields" type="text" name="" id="payment_days">{{$tender->payment_days ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-5 purchase-con-col">
                        <h1>Purchase Condition:</h1>
                        <p>{{$tender->purchase_cond ?? ''}}</p>
                    </div>
                </div>
                <?php 
                    $items = $tender->items['items'];
                    $items = json_decode($items, true);
                    $total = count($items) / 3;
                  
                ?>
               
                <div class="row items-des-row">
                    <div class="col-lg-2 col-md-2 col-4 d-block">
                        <h5 class="items-des-heading">
                            Item
                        </h5>
                        @for ($i = 1; $i <= $total; $i++)
                        <p class="items-des-para">{{$items['item'.$i]}}</p>
                        @endfor
                    </div>
                    <div class="col-md-2 d-none d-md-block">

                    </div>
                    <div class="col-lg-3 col-md-4 col-5 d-block">
                        <h5 class="items-des-heading">
                            Description
                        </h5>
                        @for ($i = 1; $i <= $total; $i++)
                        <p class="items-des-para">{{$items['descrpt'.$i]}}</p>
                        @endfor
                    </div>
                    <div class="col-lg-1 col-md-1 d-none d-md-block">

                    </div>
                    <div class="col-lg-1 col-md-2 col-2 d-block">
                        <h5 class="items-des-heading">
                            Quantity
                        </h5>
                        @for ($i = 1; $i <= $total; $i++)
                        <p class="items-des-para">{{$items['quality'.$i]}}</p>
                        @endfor
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-12 qestion-col">
                        <h2>{{ (($tender->items['sow'] ?? '') == 'on')? "SOW" : "BOQ" }}</h2>
                        @if($tender->items['sow'] == 'on')
                        <?php $uploadFolder = 'tenders/' . $tender->id . '/' . $tender->items['document_file'];?>
                            <a href="{{asset($uploadFolder)}}" download="{{$tender->items['document_file']}}" class="btn">File Name <i class="bi bi1 bi-download"></i></a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 second-quetion-col">
                        <h1>
                            Do you want to receive notification for each submital?
                        </h1>
                        <div class="radio-div">
                            <div class="form-check" style="display: flex;
    align-items: center;">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="yes">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check" style="display: flex;
    align-items: center; margin-left: 2rem;">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="no">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="last-button-cont">
                    <button class="btn step_three" onclick="">Done
                        </button>
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