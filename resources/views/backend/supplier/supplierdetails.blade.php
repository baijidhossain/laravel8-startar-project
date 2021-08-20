

@extends('layouts.backend.app')

@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">


@endpush
    


@section('content')

<div class=" container-fluid">
    <div class=" row">

        <div class=" col-md-12 ">
            <div class=" card p-3 mb-5 ">
                <div class=" d-flex  justify-content-center">
                    <h3 class=" font-weight-bold"> Company name:

                        {{-- {{ $supplierlastupdate->suppliers->name }} --}}
                    </h3>
                   
                </div>
            </div>
        

   <table id="example" class="display " style="width:100%;font-size:20px;">
        <thead>

            <tr  class=""> 
                {{-- <td> <h2 class=" font-weight-bold">Date of purchase product: {{ $supplierlastupdate->date }}</h2></td>  --}}
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>purchase date id</th>
                <th>Date</th>
                <th>Paid money </th>
                <th>Due money</th>
            
            </tr>
          
        </thead>
        <tbody>
         
         @foreach ($supplierlastupdate as $item)
    
         <tr>
            <td>  {{ $item->purchase_date_id }}</td>
            <td>  {{ $item->date }}</td>
            <td>  {{ $item->deposit_money }}</td>
            <td>  {{ $item->owing }}</td>
           
        </tr>
         @endforeach

         
        </tbody>
        <tfoot>
            <tr>
                <th>Supplier id</th>
                <th>Date</th>
                <th>Deposit money</th>
                <th>Due</th>
            
            </tr>
        </tfoot>
    </table>
        </div>

    </div>
</div>

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
    $('#example').DataTable( {
        scrollY: 500,
         paging: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );



$('#search').keyup(function (){
    $('.card').removeClass('d-none');
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.row').find('.card .card-body h4:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
})
</script>
@endpush