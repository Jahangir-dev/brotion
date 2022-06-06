$(".step_one").on("click", function (e) {
    e.preventDefault();
    if ($("input[name=test1]:checked").val()) {
        services = $("input[name=test1]:checked").val();
    } else {
        services = "";
    }

    let tender_category = $("#tender_category").val();
    let tender_title = $("#tender_title").val();
    let ref_no = $("#ref_no").val();
    let payment_method = $("#payment_method").val();
    let payment_days = $("#payment_days").val();
    let due_date = $("#due_date").val();
    let purchase_cond = $("#purchase_cond").val();
    let delivery_city = $("#delivery_city").val();
    let tender_id = $("#tender_id").val();

    $.ajax({
        url: "new_tender_one_save",
        type: "POST",
        data: {
            _token: $("input[name=_token]").val(),
            services: services,
            tender_category: tender_category,
            tender_title: tender_title,
            ref_no: ref_no,
            tender_id: tender_id,
            payment_method: payment_method,
            payment_days: payment_days,
            due_date: due_date,
            purchase_cond: purchase_cond,
            delivery_city: delivery_city,
        },
        success: function (response) {
            console.log(response);
            if (response) {
                window.location.href = "new_tender_two";
            }
        },
        error: function (response) {
            if (response.responseJSON.tender_title) {
                $("#tender_title_error").text(
                    response.responseJSON.tender_title[0]
                );
            } else {
                $("#tender_title_error").text("");
            }

            if (response.responseJSON.ref_no) {
                $("#ref_no_error").text(response.responseJSON.ref_no[0]);
            } else {
                $("#ref_no_error").text("");
            }

            if (response.responseJSON.payment_days) {
                $("#payment_days_error").text(
                    response.responseJSON.payment_days[0]
                );
            } else {
                $("#payment_days_error").text("");
            }

            if (response.responseJSON.due_date) {
                $("#due_date_error").text(response.responseJSON.due_date[0]);
            } else {
                $("#due_date_error").text("");
            }

            if (response.responseJSON.purchase_cond) {
                $("#purchase_cond_error").text(
                    response.responseJSON.purchase_cond[0]
                );
            } else {
                $("#purchase_cond_error").text("");
            }

            if (response.responseJSON.services) {
                $("#services_error").text(response.responseJSON.services[0]);
            } else {
                $("#services_error").text("");
            }
        },
    });
});

$("#product_form").on("submit", function() {
  
  var data = {};
  $('.dynamic').each(function(index, item){
      var id = $(item).attr('id');
      if($("#"+id).val() == "" || $("#"+id).val() == undefined)
      {
        $("#"+id).after('<br><span class="text-danger" id="'+id+'_error">This field is required</span>')
        return false;
      } else {
        data[id] = $("#"+id).val();
      }
      
    });

    if(data != "")
    {
        if ($("input[name=sow]:checked").val()) {
            sow = $("input[name=sow]:checked").val();
        } else {
            sow = "";
        }

        // let document = $("#document_name").val();
        // let document_file = $("#document_file").val();
         let tender_id = $("#tender_id").val();
        var data_to_send = JSON.stringify(data);
        var form_data = new FormData(this);
        form_data.append('items', data_to_send);
        console.log(data_to_send);
        $.ajax({
        url: "new_tender_two_save",
        type: "POST",
        //dataType: "json",
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, //
        data: form_data,
        success: function (response) {
            if (response) {
                window.location.href = "new_tender_third_tab/"+tender_id;
            }
        },
        error: function (response) {
            if (response.responseJSON.document) {
                $("#document_name_error").text(
                    response.responseJSON.document[0]
                );
            } else {
                $("#document_name_error").text("");
            }

            if (response.responseJSON.document_file) {
                $("#document_file_error").text(response.responseJSON.document_file[0]);
            } else {
                $("#document_file_error").text("");
            }

            if (response.responseJSON.sow) {
                $("#sow_error").text(
                    response.responseJSON.sow[0]
                );
            } else {
                $("#sow_error").text("");
            }

            if (response.responseJSON.data) {
                $("#data_error").text(response.responseJSON.data[0]);
            } else {
                $("#data_error").text("");
            }

        },
        });
    }
});

$('.step_three').on('click',function(e){
    if ($("input[name=flexRadioDefault]:checked").val()) {
        email = $("input[name=flexRadioDefault]:checked").val();
    } else {
        email = "";
    }
    
    let tender_id = $("#tender_id").val();
    $.ajax({
        url: 'save',
        type: "POST",
        dataType: "json",
        data: {
            _token: $("input[name=_token]").val(),
            email: email,
            tender_id:tender_id,
        },
        success: function (response) {
            if (response) {
                window.location.href = "/user/opportunity-management";
            }
        },
        error: function (response) {
           
        },
      });

});

$('input[name="sow"]').click(function(){
    console.log($("input[name=sow]:checked").val());
    if ($("input[name=sow]:checked").val() == 'off') {
        $('#UploadBox').attr( "style", "display: none !important;" );
      } else {
        $('#UploadBox').attr( "style", "display: flex !important;" );
      }
});

$('input[type="file"]').change(function(e) {
    var fileName = e.target.files;
    var file_data =document.getElementById('document_file').files[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    console.log(form_data);
});  
