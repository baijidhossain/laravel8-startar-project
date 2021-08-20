

@extends('layouts.backend.app')

@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">


@endpush
    


@section('content')

<div class=" container-fluid">
    <div class=" row">

        <div class=" col-md-12 ">
            <div class=" card p-3 mb-3 ">
                <div class=" d-flex  justify-content-center">
                    <h3 class=" font-weight-bold"> Company name:</h3>
                 
                </div>

                <div class=" d-flex  justify-content-center">
                    <h3 class=" font-weight-bold text-info">Date of purchase of the all products</h3>
                    
                </div>
            </div>




            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Prodact Name</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Total price</th>
                        <th>Due</th>
                        
                    </tr>
                </thead>
                <tbody>

            
        @foreach ($stocks as $order)
        @foreach ($order->stock_details as $item)

        <tr>         
            <td>{{ 'Prodact name'.'='.' '.$item->prodact_name }}</td>
            <td>{{ 'Qty'.'='.' '.$item->qty }}</td>
            <td>
                {{ 'Purchase date'.'='.' '.$order->purchase_date}}
            </td>
            <td>{{ 'rate'.'='.' '.$item->rate }}</td>
            <td>{{ 'Total price'.'='.' '.$item->total_price }}</td>
            <td>{{ 'Due'.'='.' '.$item->due }}</td>

        </tr>
        @endforeach
        @endforeach 
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>Prodact Name</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Total price</th>
                        <th>Due</th>
                    </tr>
                </tfoot>
            </table>











        </div>

    </div>
</div>







{{-- 

<div id="accordion" >

    @foreach ( $stock as $key => $stocks )
    <div class="card" >
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 d-flex">

            <button style="font-size: 20px;" class="btn btn-link mr-2" data-toggle="collapse" data-target="#id-{{ $stocks->id }}" aria-expanded="true" aria-controls="{{ $stocks->id }}">
                {{ $stocks->purchase_date }}
              </button>

            <button style="font-size: 20px;" class="btn btn-link " data-toggle="collapse" data-target="#id-{{ $stocks->id }}" aria-expanded="true" aria-controls="{{ $stocks->id }}">
                {{ $stocks->supplier_name }}
              </button>
           
          </h5>
        </div>
    
        <div id="id-{{ $stocks->id }}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
 
   <table id="example"  class="table  display"   style="width:100%;font-size:20px;">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">prodact name</th>
        <th scope="col">Qty</th>
        <th scope="col">rate</th>
        <th scope="col">Total price</th>
        <th scope="col">Due</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($stocks->stock_details as $item)
        
            
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->id }}</td>
            <td>{{ $item->prodact_name }}</td>
            <td>{{ $item->qty }}</td>
            <td>{{ $item->rate }}</td>
            <td>{{ $item->total_price }}</td>
            <td>{{ $item->due }}</td>
          </tr>

        @endforeach
    </tbody>
  </table>
          
          </div>
        </div>
      </div>
    @endforeach

  </div> --}}

@endsection


@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


<script>
    $(document).ready(function() {
    


///data table


$(document).ready(function() {


    
var groupColumn = 2;
var table = $('#example').DataTable({
    searchHighlight: true,
    "scrollY":        "500px",
    

    "columnDefs": [
        { "visible": false, "targets": groupColumn }
    ],
    "order": [[ groupColumn, 'asc' ]],
    "displayLength": 20,
    "drawCallback": function ( settings ) {
        var api = this.api();
        var rows = api.rows( {page:'current'} ).nodes();
        var last=null;

        api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
            if ( last !== group ) {
                $(rows).eq( i ).before(
                    '<tr class="group"><td colspan="15">'+group+'</td></tr>'
                );

                last = group;
            }
        } );
    }
} );

// Order by the grouping
$('#example tbody').on( 'click', 'tr.group', function () {
    var currentOrder = table.order()[0];
    if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
        table.order( [ groupColumn, 'desc' ] ).draw();
    }
    else {
        table.order( [ groupColumn, 'asc' ] ).draw();
    }
} );
} );




/// end datatable




    } );
} );



$('#search').keyup(function (){
    $('.card').removeClass('d-none');
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.row').find('.card .card-body h4:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
})
</script>
@endpush