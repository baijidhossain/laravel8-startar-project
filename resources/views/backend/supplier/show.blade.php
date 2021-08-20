

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
                    <h3 class=" ml-4">{{ $showData->name }}</h3>
                </div>

                <div class=" d-flex  justify-content-center">
                    <h3 class=" font-weight-bold text-info">Date of purchase of the all products</h3>
                    
                </div>
            </div>

<table id="example" class="display " style="width:100%;font-size:20px;">
        <thead>
            <tr>
                <th>id</th>
                <th>purchase_date</th>
             
            </tr>
        </thead>
        <tbody>
         
          @foreach ($showData->detailes as $item)
          <tr class="">
            <td>{{ $item->id}}</td>
            <td>{{ $item->supplier_id}}</td>
            <td>{{ $item->date }}</td>
            <td>{{ $item->prodact_name }}</td>
            <td>{{ $item->qty }}</td>
            <td>{{ $item->rate }}</td>
            <td>{{ $item->due }}</td>
            <td>{{ $item->total_price }}</td>
            
                    
            <td class="text-center d-flex ">
                <a title="Show" class="btn btn-sm btn-info mr-1" href="{{ route('app.suppliersdetails.show',$item->id) }}">  <i class=" fas fa-eye "> </i> </a> 
                <a title="Edit" class="btn btn-sm btn-info  mr-1" href="{{ route('app.suppliersdetails.edit',$item->id) }}">  <i class=" fas fa-edit "> </i></a>

                <button title="Delete" type="button" onclick="delatedata({{ $item->id  }})" class="btn btn-sm btn-danger" >  <i class=" fas fa-trash-alt "> </i> </button>

                <form  id="delete-form-{{$item->id}}" method="POST" action="{{ route('app.suppliersdetails.destroy',$item->id) }}" style=" display:none;">
                      @csrf
                      @method('DELETE')

                </form>
             
              </td>
        </tr>

          @endforeach
       
        </tbody>
        <tfoot>
            <tr>
                <th>Supplier id=</th>
                <th>Date=</th>
                <th>Prodact name=</th>
                <th>Qty=</th>
                <th>Rate=</th>
                <th>Total Price=</th>
                <th>Due=</th>
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