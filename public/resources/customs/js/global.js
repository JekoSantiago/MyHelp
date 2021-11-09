
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
  jQuery.fn.shake = function(interval,distance,times){
    interval = typeof interval == "undefined" ? 100 : interval;
    distance = typeof distance == "undefined" ? 10 : distance;
    times = typeof times == "undefined" ? 3 : times;
    var jTarget = $(this);
    jTarget.css('position','relative');
    for(var iter=0;iter<(times+1);iter++){
       jTarget.animate({ left: ((iter%2==0 ? distance : distance*-1))}, interval);
    }
    return jTarget.animate({ left: 0},interval);
 }



var globalLoadingForm = '<center class="text-secondary"><span class="spinner-border spinner-border-sm text-secondary" role="status" aria-hidden="true"></span> Loading ..</center>';
var globalTable = '<center class="text-secondary"><span class="spinner-border spinner-border-sm text-secondary" role="status" aria-hidden="true"></span> Loading ..</center>';
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).val()).select();
    document.execCommand("copy");
    $temp.remove();
    $(".lobibox-notify-wrapper").remove();
    Lobibox.notify('success', {
		pauseDelayOnHover: true,
		size: 'mini',
		rounded: true,
		icon: 'bx bx-check-circle',
		delayIndicator: false,
		continueDelayOnInactiveTab: false,
		position: 'top center',
		msg: 'Successfully copy to clipboard'
	}); 
  }

  $(document).ready(function () {
    $('.modal-dialog').draggable({
        handle: ".modal-header"
      });
       
      $('body').on('change', '#department', function() {  
        $("#ticketCategory").html("");
        $("#ticketSubCategory").html("");
        var departmentID = $(this).val(); 
        $.ajax({
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           url:base_url+'/common/get-ticket-category',
           type:'POST',
           data:{departmentID:departmentID},
           dataType: 'json',
           cache: false,
           success: function (data) 
           { 
              $("#ticketCategory").append('<option value=""></option>');
              data.forEach(function(item){
                    var option = '<option value="'+item.TicketCategory_ID+'">'+item.TicketCategory+'</option>';
                    $("#ticketCategory").append(option);
              });
           },
           error: function () 
           {
              console.log('error');
           }
        })
    });
  
     $('body').on('change', '#ticketCategory', function() {  
        $("#ticketSubCategory").html("");
        var ticketCategoryID = $(this).val();
        var token = $("#globalToken").val();
        $.ajax({
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           url:base_url+'/common/get-ticket-sub-category',
           type:'POST',
           data:{ticketCategoryID:ticketCategoryID},
           dataType: 'json',
           cache: false,
           success: function (data) { 
              $("#ticketSubCategory").append('<option value=""></option>');
              data.forEach(function(item){ 
                  var option = '<option value="'+item.TicketSubCategory_ID+'">'+item.TicketSubCategory+'</option>';
                  $("#ticketSubCategory").append(option);
              });
           },
           error: function () {
              console.log('error');
           }
        })
    }); 
    
  });