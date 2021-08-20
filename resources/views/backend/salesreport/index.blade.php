
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
    


@section('content')



   <div class="row">
   <div class="col-md-12">

       <div class="main-card mb-3 card">
        
           <div class=" p-2 table-responsive">
              
        
            @foreach ($salesreport as $report )

            <h5 class=" text-center mt-2"><strong>Invoice number:</strong> {{ $report->invoice_no }}</h5>
           Date: {{ $report->day }}
         

              <table id="" class="  align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                  <th>Item info</th>
                  <th>Bying price</th>
                  <th>Seling price</th>
                  <th>Qty</th>
                  <th>Total price</th>
                  <th>Item vat</th>
                  <th>Service charge</th>
                  <th>Service charge vat</th>
                  <th>Sd</th>
                  <th>Discount</th>
                  <th>Return</th>
                  <th>Net value</th>
                  <th>Pay type</th>
                </thead>

        
                <tbody>
                  @foreach ($report->orderitems as $key=>$orderitem)
                  <tr>
                    <td>{{ $orderitem->p_name}}</td>
                    <td>{{ $orderitem->bying_price}}</td>
                    <td>{{ $orderitem->selling_price}}</td>
                    <td>{{ $orderitem->qty }}</td>
                    <td>{{ $orderitem->total_price }}</td>
                    <td>{{ $orderitem->itemvat }}</td>
                    <td>{{  $orderitem->service_charge}}</td>
                    <td>{{  $orderitem->service_charge_vat}}</td>
                    <td>{{  $orderitem->sd}}</td>
                    <td>{{  $orderitem->discount}}</td>
                    <td>{{  $orderitem->return}}</td>
                    <td>{{  $orderitem->net_value}}</td>
                    <td>{{  $orderitem->pay_type}}</td>
                  </tr>
               
            
                  @endforeach

                
                </tbody>
              </table>
        
        
            @endforeach


           </div>
       
       </div>
   </div>

 
</div>

@endsection

@push('js')
<script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );



    </script>
@endpush