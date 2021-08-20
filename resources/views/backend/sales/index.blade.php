
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>
<style>

.myBox {
overflow: scroll;

}
.order_text_size{
font-size: 12px;
}
</style>
@endpush
    


@section('content')
<div class="   container">
{{-- <div class="row">
<div class=" col-12">

    <div class="myBox">   
     <ul class=" d-flex">
    @foreach ($categories as $category )
    <li class=" btn  mr-2 btn-success p-2">
      <a class="nav-link text-white" href="{{ route('app.sales.show',$category->id) }}">{{ $category->name }}<span class="sr-only">(current)</span></a>
    </li>
    @endforeach
    </ul>
</div>

   </div>

</div> --}}


{{-- <div class=" row">
    <div  style="height:70vh;width:140px;overflow:auto;background-color:yellowgreen;scrollbar-base-color:gold;font-family:sans-serif;padding:10px;" class=" col-md-8">
        <div class=" row">
            @foreach ($prodacts as $prodact)
            <form  action="{{ Route('app.card.addtocard') }}" method="POST">
                @csrf
          <input type="hidden" name="prodact_id" value="{{ $prodact->id }}">
         
            <div class=" col-md-3 mb-2">
                <div class="card">
                    <div class=" card-body">
                        {{ $prodact->name }}
                    </div>
                </div>
            </div>
            <input type="submit" value="submit">
        </form>
            @endforeach

         
    

            </div>
    </div>

    <div class=" col-md-4">
        <div class="card">
            <div class="card-body">
    
            </div>
        </div>
    </div>
</div> --}}
</div>







<div class="container-flueit">
    <h6>Products</h6>
    <div class=" row">
<div class=" col-md-7" style="overflow: scroll; height:600px">
    <li class=" nav-link">
        <button href="" id="categoryitemid" value="2" name="categoryitemname" onclick="categoryitem()">submit1</button>
        <button href="" id="categoryitemid" value="2" name="categoryitemname" class="loadingbtn" >submit1</button>
     
    </li>
  <div class=" row   "  id="datashowid2">
   
    

      
  </div>
</div>


        <div class=" col-md-5">
            
            <button id="clear" class="btn btn-sm btn-danger clear float-md-right">CLR</button>
                <div class="card mb-4 shadow-sm">
                   
                       Selected item
                       {{-- action="{{ Route('app.card.addtocard') }}" --}}
                    <div class="" style="height:280px;overflow:scroll;">
                     <div class="card-body">
                       
                        <form class=" pb-3" id="orderitem" action="{{ url('app/card/addtocard') }}"  method="POST">
                            @csrf
                    <table class=""  >
                       
                        <thead>
                          <tr class=" text-center">
                           
                            <th scope="col">Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col"><i class="far fa-window-close"></i></th>
                          </tr>
                        </thead>
                        <tbody class=" cart">
                        
                        </tbody>
                      </table>
                      {{-- <input  class=" mb-5  btn btn-primary" type="submit" value="Print"> --}}
                   

                   
                    </div>  
                </div>

                <div class=" p-1 row">
             

                    <table class=" m-3">
                        <thead>
                      
                        </thead>
                        <tbody>
                          <tr>
                            <td class=" font-weight-bold">Vat(%)=</td>
                            <td>
                                <select readonly="" class=" vat form-control" name="vat" id="vat">
                                    @for ($i = 1; $i <=100; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                            </td>
                            <td class=" font-weight-bold">Sd=</td>
                            <td><input readonly type="text" name="sd" id="sd" class=" form-control sd"></td>
                          </tr>
                          <tr>
                            <td class=" font-weight-bold">Sr_charge=</td>
                            <td><input readonly type="text" name="Sr_charge" id="sr_charge" class=" form-control Sr_charge"></td>
                            <td class=" font-weight-bold">Discount(%)=</td>
                            <td>
                                <select readonly="" class="  discount form-control"  name="discount" id="discount">
                                    @for ($i = 1; $i <=100; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                          </tr>

                          <tr>
                            <td class=" font-weight-bold">Total=</td>
                            <td><input disabled readonly class="  form-control total  " name="total" id="total" type="text"></td>
                            <td class=" font-weight-bold">Pay type=</td>

                            <td>
                                <Select readonly="" class="form-control" id="pay_type" name="pay_type">
                                @foreach ($pay_types as $pay_type)
                                <option value="{{$pay_type->pay_type  }}">
                                    {{ $pay_type->pay_type }}
                                </option>
                                @endforeach
                            </Select>
                           </td>
                          </tr>
                          <tr>

                            <td class="  font-weight-bold">Paid=</td>
                            <td><input  class="  form-control total  " name="paid" id="paid" type="text"></td>

                            <td class=" font-weight-bold">Change=</td>
                            <td><input readonly class="  form-control total  " name="Change" id="" type="text"></td>

                          </tr>

                        </tbody>
                      </table>



                </div>
      

            </form>
         {{-- <td  class=" d-flex">Total amount: <strong class="total"></strong> --}}
            
        </td>
        
         <input  class=" mb-5 mr-2 ml-2 btn btn-primary print" type="submit" value="Print">
                </div>
            </div>
        </div>

        </div>
  <script>
    function renderCart(items) {
        const $cart = document.querySelector(".cart")
        // const $total = document.querySelector(".total")
        const $total = document.querySelector("#total")
        const $totalitem = document.querySelector(".totalitem")

        $cart.innerHTML = items.map((item) => `
       
                <tr class="form-group p-0" >
                    <td style="display:none;" class="">
                        <input  name="p_id[]" class="btn btn-sm form-control p-0" type="text" value="${item.id}">
                    </td>
                    
                    <td class="order_text_size" value="">
                    

                        <input style="font-size:12px" name="p_name[]" class="btn btn-sm form-control p-0" type="text" value="${item.name}">
                   </td>
                    <td class="order_text_size d-flex">   


                        <button type="button" class=""
                            onClick="cartLS.quantity(${item.id},-1)">-</button>
                            <input style="font-size:12px"  name="p_qty[]" class="btn btn-sm form-control " type="text" value="${item.quantity} ">
                        <button type="button" class=""
                            onClick="cartLS.quantity(${item.id},1)">+</button>
                       
                            
                    </td>
                    <td class="order_text_size">
                        <input style="font-size:12px"  name="p_price[]" class="btn btn-sm form-control p-0" type="text"  value="${item.price}">
                  
                    </td>

                    <td class="order_text_size">
                        <input style="font-size:12px"  name="t_price[]" class="btn btn-sm form-control p-0" type="text"  value="${item.price * item.quantity}">
                  
                    </td>
            
                    <td  class="text-right"><Button class="btn btn-sm  btn-danger " onClick="cartLS.remove(${item.id})"><i class="far fa-window-close"></i></Button></td>
                </tr>   
              
                `).join("")
              

        $total.value = cartLS.total();
    

      
        
    }
    renderCart(cartLS.list())
    cartLS.onChange(renderCart)
</script>
@endsection

@push('js')
<script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();


        $('.loadingbtn').click(function(){

          $('.loading').removeClass('d-none');

        });

        setTimeout(function(){

          $('.loading').addClass('d-none');
        },3000);
    } );



//show prodact


function categoryitem(id){

          $('.loading').removeClass('d-none');
                           
            
            $.ajaxSetup({
                  headers:{'X-CSRF-Token':'{{ csrf_token() }}'}
          
                      });
               var categoryid=document.getElementById('categoryitemid').value;
          
              var url ='{{route("app.ajaxsales")}}'
              $.ajax({
                          url:url,
                          method:'POST',
                          data:{
                              'id':id
                          },
                          // dataType:"json",
                          success:function(data1)
                          {
          
                             $('#datashowid2').html(data1);
                             $('.loading').addClass('d-none');
                        
          
                          },
                          error:function(error){
          
                          }
                      })
              }

//end show prodact





// print

$(function(){

    $('#clear').click(function(){
        for (let index = 0; index<10000; index++)
         {
        cartLS.remove(index);
        }
        });


    $(".print").click(function(){

       

$("#orderitem").submit()
})

            $.ajaxSetup({
        headers:{'X-CSRF-Token':'{{ csrf_token() }}'}

            });


$("#orderitem").submit(function(e){
    e.preventDefault();

     //   console.log(data);
                var data=$(this).serialize();
                var url ='{{route("app.card.addtocard") }}'
     console.log(data);
                $.ajax({
                url:url,
                method:'POST',
                data:data,
                success:function(response){
                 if(response.success){
                    for (let index = 0; index<1000; index++) {
                        cartLS.remove(index);
                        
                    }
                    alert(response.message);
                  
                 }
                },
                error:function(error){
                   
                }
            })
        });







       
    })

    </script>
@endpush