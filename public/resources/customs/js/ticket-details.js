$(document).ready(function() { 
    $(".hide-show-message").click(function(){ 
        if( $(".chat-message").is(":visible"))
        {
            $(".chat-message").hide();
        }
        else
        {
            $(".chat-message").show();
            $("#chatForm textarea").focus(); 
        }
    }); 
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
                        swal("Successfully", "You have successfully update ticket details.", "success"); 
                        location.reload();
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

    $(".delete-file").click(function(){  
        var selector = $(this);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                submitDeleteFile(selector);
            }  
          }); 
    });

    function submitDeleteFile(selector)
    {
        var ticketID = $(selector).data("id");
        var fileName = $(selector).data("filename");  
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:base_url+"/ticket/delete-file",
            type: 'POST',
            data: {ticketID:ticketID,fileName:fileName}, 
            dataType: 'json',
            cache: false,
            success: function(resp) 
            { 
                var returnCode = parseInt(resp.RETURN);
                if(returnCode > 0)
                { 
                    swal("Successfully", 
                        "You have successfully deleted attached file.",
                        "success").then((value) => { if(value) location.reload(); }); 
                } 
                else
                {
                    swal("Failed", resp.MESSAGE, "error"); 
                }   
            }
        });
    }
    $(".add-file").click(function(){
        $(".ticket-files").show(); 
        $(this).hide();
        $("#ticket_files").trigger("click");
    });   
});