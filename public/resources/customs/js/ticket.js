$(document).ready(function() { 
   
    var ticket_table = $('#ticket_table').DataTable();
    // var ticket_table = $('#ticket_table').DataTable({
    //         stateSave: true,
    //         "scrollX": true,
    //         columnDefs: [ {
    //             orderable: false,
    //             className: 'select-checkbox',
    //             targets:   0
    //         } ],
    //         select: {
    //             style: 'single',
    //             selector: 'td:first-child'
    //         },
    //         "processing": true,
    //         "serverSide": true,
    //         "language": {
    //             "processing": globalLoadingForm 
    //         },
    //         "ajax": {
    //             "url": base_url+"/ticket/get-ticket-dt-json",
    //             "method": "POST",
    //             "datatype": "json", 
    //             "data": function (d) {
    //                 return $.extend({}, d, { 
    //                 "_token": $("#globalToken").val()
    //                 });
    //             },
    //             error: function (jqXHR, textStatus, errorThrown) 
    //             {
                    
    //             }
    //         },
    //         columns:[     
    //         { data:"id_number", 
    //             "render": function ( data, type, row, meta ) 
    //             { return  '<a href="#" onClick="showTicketFormUpdate('+row.ticket_id+')"><strong>'+data+'</strong></a>'; }
    //         }, 
    //         { data:"full_name"},   
    //         { data:"complete_address"}, 
    //         { data:"gender"},   
    //         { data:"birth_date"},   
    //     ],
    //     "fnRowCallback": function( nRow, aData, iDisplayIndex ) 
    //     {
                
    //     }
    // });  
    // ticket_table.buttons().container().appendTo( '#ticket_table_wrapper .col-md-6:eq(0)' );
      
    
}); 
 