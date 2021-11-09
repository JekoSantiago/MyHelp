$(document).ready(function() {   
  $("#ticket_form").submit(function(e){  
        var formData = new FormData($("#ticket_form")[0]); 
        $("input,select,textarea,div").children().removeClass("is-invalid"); 
        $("#ticket_form .invalid-feedback").text();
        e.preventDefault();    
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:$("#ticket_form").attr("action"),
            type: 'POST',
            data: formData,
            async: false, 
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            dataType: 'json',
            cache: false,
            success: function (resp) 
            { 
                var returnCode = parseInt(resp.RETURN);
                if(returnCode > 0)
                { 
                    swal("Successfully", "You have successfully create new ticket.", "success"); 
                    window.location  = base_url+"/ticket/ticket-details/"+resp.RETURN;
                }
                else if(returnCode < -100)
                { 
                    $("#validation_"+resp.FIELD_ID).text(resp.MESSAGE);  
                    $("#"+resp.FIELD_ID).addClass("is-invalid").focus().shake();  
                }
                else
                {
                    swal("Failed", resp.MESSAGE, "error"); 
                }   
            }
        });
    }); 
});