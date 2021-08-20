<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.0/pdfmake.min.js" integrity="sha512-3KEActb4EdIUU0uR38GT+fwQoGE6NgQtklBmK5FR0hg/KsrpnD27V5o8I6/E5lpcdO0BCulWuQuhyuhR4IlD3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.0/vfs_fonts.js" integrity="sha512-cktKDgjEiIkPVHYbn8bh/FEyYxmt4JDJJjOCu5/FQAkW4bc911XtKYValiyzBiJigjVEvrIAyQFEbRJZyDA1wQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.25/features/searchHighlight/dataTables.searchHighlight.css">
    <style>

        tr.group,
        tr.group:hover {
            background-color: #ddd !important;
        }

    </style>

</head>
<body>
    <div class=" container-fluid  ">
        <div class=" m-4 row justify-content-center">
        

                    <div class=" col-md-12">
                        <div class=" card pb-5 text-center">
                           
                                <h1>Daily Invoice report</h1>
                                <div class=" divider"></div>
                                <p>Nihon enterprice and catering service</p>
                            
                        </div>
                    </div>

                    <div class=" col-md-12">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Prodact Name</th>
                                    <th>Bying Price</th>
                                    <th>Selling Price</th>
                                    <th>Qty</th>
                                    <th>Total price</th>
                                    <th>Salary</th>
                                    <th>Item Vat</th>
                                    <th>Service charge</th>
                                    <th>SD</th>
                                    <th>Discount</th>
                                    <th>Return</th>
                                    <th>Net value</th>
                                    <th>Pay type</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                </tr>
                            </thead>
                            <tbody>

                        
                    @foreach ($orders as $order)
                    @foreach ($order->orderitems as $item)

                    <tr>         
                        <td>{{ 'Prodact name'.'='.' '.$item->p_name }}</td>
                        <td>{{ 'Bying price'.'='.' '.$item->bying_price }}</td>
                        <td>
                            {{ 'Invoice no'.'='.' '.$order->invoice_no}}
                        </td>
                        <td>{{ 'Selling price'.'='.' '.$item->selling_price }}</td>
                        <td>{{ 'Qty'.' '.' '.$item->qty }}</td>
                        <td>{{ 'Total price'.'='.' '.$item->total_price }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>



                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                        <td>{{ 'Vat'.'='.' '.$item->itemvat }}</td>
                    </tr>
                    @endforeach
                    @endforeach 
                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Prodact Name</th>
                                    <th>Bying Price</th>
                                    <th>Selling Price</th>
                                    <th>Qty</th>
                                    <th>Total price</th>
                                    <th>Salary</th>
                                    <th>Item Vat</th>
                                    <th>Service charge</th>
                                    <th>SD</th>
                                    <th>Discount</th>
                                    <th>Return</th>
                                    <th>Net value</th>
                                    <th>Pay type</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>














<div class=" col-md-12">
    <div class=" card pb-5">

   
        <div class=" row pl-2">
            <div class=" col-6">Total cash amount:</div>
            <div class=" col-6 d-flex">
                <strong></strong>
        
                <input type="text" class=" border-0 cashamnt" readonly value="{{ $daily_report_sum->where('pay_type','Cash')->sum('selling_price') }}">

                <h6 style="font-size: 10px;"  class="   btn-sm text-dark">BDT</h6> 
            </div>
        </div>


        <div class=" row pl-2">
            <div class=" col-6">Total Card amount:</div>
            <div class=" col-6 d-flex">
                <strong> </strong>
                <input type="text" class="cardamnt border-0" readonly value="{{ $daily_report_sum->where('pay_type','Card')->sum('selling_price') }}">
                <h6 style="font-size: 10px;"  class="   btn-sm text-dark">BDT</h6> 
            </div>
        </div>
    

        <div class=" row pl-2">
            <div class=" col-6">Total Room Service amount:</div>
            <div class=" col-6 d-flex">
                <strong> </strong>
                <input type="text" class="roomserviceamnt border-0" readonly value="{{ $daily_report_sum->where('pay_type','Room-service')->sum('selling_price') }}">
                <h6 style="font-size: 10px;"  class="   btn-sm text-dark">BDT</h6> 
            </div>
        </div>


        <div class=" border-bottom  ml-2 mr-5"></div>

        <div class=" row pl-2">
            <div class=" col-6">Total amount:</div>
            <div class=" col-6 d-flex">
            
                <input type="text" class="border-0 totalamnt" readonly value=" {{$daily_report_sum->sum('selling_price')}}">
                <h6 style="font-size: 10px;"  class="   btn-sm text-dark">BDT</h6> 
            </div>
        </div>

    </div>

    <input class="click" type="submit"  value="Download">
</div>

     
        </div>
    </div>





     
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    

  <script  src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  
   

    <script src="{{ asset('assets/scripts/main.js') }}"></script>
   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>

    
{{--     
    <script src="{{ asset('node_modules/nestable2/jquery.nestable.js') }}"></script> --}}

    

    <script src="{{ asset('js/script.js') }}"></script>
   
    @include('vendor.lara-izitoast.toast')
    @stack('js')

    <script src="{{ asset('assets/jquyery_ui/jquery-ui.min.js') }}"></script>
    <script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.25/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
 <script src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
    <script>





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












         
$(document).ready(function() {
       $('.click').click(function(){
        pdfMake.createPdf(docDefinition).open();
       });

    //    var Totalamont=$('.totalamnt').val();
    } );
   

    var cashamont= $('.cashamnt').val();
    var cardamont= $('.cardamnt').val();
    var roomserviceamnt= $('.roomserviceamnt').val();
    var Totalamont=$('.totalamnt').val();

        var docDefinition={
            content:['total cash='+cashamont,'Total Card='+cardamont,'Room service='+roomserviceamnt,'Total amount='+Totalamont]
        }
       
    </script>
</body>
</html>