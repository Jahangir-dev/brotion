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
    <title>Place new order-2</title>
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
                    <a href="/new_tender_one"><img src="{{asset('asset/images/Group 16935.png')}}" alt=""></a>

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
                    <div class="TEXT-COLOR">
                        <h3>Step2</h3>
                    </div>
                    <div class="TEXT-COLOR">
                        Technical Details
                    </div>
                </div>
            </div>

            <div class="new-order-container-step">
                <div>
                    <a href="/new_tender_two"><img src="{{asset('asset/images/Group 16935.png')}}" alt="" width="70%" height="auto"></a>
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

        <div class="new-order-container-bootom-part">
            <div class="new-order-container-bootom-part-content">

                <div class="TEXT-COLOR h4 fw-bold">
                    <label for="">Scope of work</label>
                </div>

                @csrf
                <input type="hidden" id="tender_id" value="{{$tender->id ?? ''}}">
                <div class="new-order-container-bootom-part-content_Button mt-3">
                    <div>
                        <button class=" btn btn_green " onclick="add_more_field(this)">Add</button>

                    </div>
                    <div>
                        <button id="1" class="btn btn_blue" onclick="remove(this)">Remove</button>
                    </div>

                </div>


                <form id="product_form">

                    <div class="new-order-container-bootom-part-content_field text-color fw-bold mt-3" id="">
                        <div class="col-1 d-flex flex-column">
                            <div>
                                <p>NO.1</p>
                            </div>

                        </div>
                        <div class="col-11 gap-3 d-flex flex-column flex-md-row">

                            <div class="">
                                <label class="fw-bold h5 TEXT-COLOR" for="item">Item</label>
                                <div>
                                    <input class="INPUT_MEDIUM dynamic" type="text" name="item1" id="item1">
                                </div>
                                
                            </div>

                            <div>
                                <div>
                                    <label class="fw-bold h5 TEXT-COLOR" for="descrpt"> Description</label>
                                </div>
                                <div>
                                    <textarea class="dynamic" name="description" required="" id="descrpt1" cols="50" rows="3"></textarea>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <label class="fw-bold h5 TEXT-COLOR" for="quality"> Quality</label>
                                </div>
                                <div>
                                    <input class="INPUT_MEDIUM dynamic" required="" type="text" name="quality1" id="quality1">
                                </div>
                            </div>

                        </div>


                    </div>

                </form>



                <div class="TEXT-COLOR fw-bold mt-4">
                    <div class=" fw-bold">
                        <h4>Do you have a SOW or BoQ</h4>
                    </div>


                    <div class="d-flex
                            gap-4 mt-3">

                        <div class="d-flex gap-2 h5">
                            <div>
                                <label for="yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" value="on" {{ (($tenderItems->sow ?? '') == 'on')? "checked" : "" }} name="yes11" id="yes">
                            </div>
                        </div>
                        <div class=" h5 d-flex gap-2">
                            <div>
                                <label for="no">No</label>
                            </div>
                            <div>
                                <input type="radio" value="off" {{ (($tenderItems->sow ?? '') == 'off')? "checked" : "" }} name="yes11" id="no">
                            </div>

                        </div>
                        <br>
                            <span class="text-danger" id="sow_error"></span>
                    </div>




                </div>

                <div class="TEXT-COLOR fw-bold d-flex gap-4 mt-4 flex-column  flex-md-row " style="display: none !important" id="UploadBox">
                    <div>

                        <div>
                            <label for="document_name">
                                Document Name
                            </label>
                        </div>
                        <div>
                            <input class="INPUT_MEDIUM" type="text" name="" id="document_name">
                        </div>
                        <br>
                            <span class="text-danger" id="document_name_error"></span>
                    </div>

                    <div class="">
                        <div>
                            <label for="uplode_button">
                                Uplode Bottom
                            </label>
                        </div>
                        <div>
                            <input class="TEXT-COLOR" type="file" name="" id="document_file">
                        </div>
                        <br>
                            <span class="text-danger" id="document_file_error"></span>
                    </div>

                </div>

                <div class="BUTTON-CONTAINER">
                     <button class="BTN step_two">Move Next
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
            <input class="INPUT_MEDIUM dynamic" required="" type="text" name="product' + countre + '"  id="item' + countre + '">\
        </div>\
    </div>\
    <div>\
        <div>\
            <label class="fw-bold h5 TEXT-COLOR" for=""> Description</label>\
        </div>\
        <div>\
        <textarea class="TEXT-COLOR dynamic" required="" name="product' + countre + '"  id="descrpt' + countre + '" cols="50" rows="3"></textarea>\
        </div>\
    </div>\
    <div>\
        <div>\
            <label class="fw-bold h5 TEXT-COLOR" for=""> Quality</label>\
        </div>\
        <div>\
           <input class="INPUT_MEDIUM dynamic" type="text" required="" name="product' + countre + '"  id="quality' + countre + '">\
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