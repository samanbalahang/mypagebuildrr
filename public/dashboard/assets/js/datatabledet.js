//this is manage datatables
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('.datatable thead th').each( function () {
        var title = $(this).text();
        if($(this).attr('class')==undefined || $(this).attr('class') != 'nosearch'){
           $(this).html( '<input type="text" placeholder="'+title+'" />' );
        }
    } );
    
    // DataTable
    var table = $('.datatable').DataTable({
        buttons: [
            'pdfHtml5'
        ],
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this; 
                $( 'input', this.header() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
});