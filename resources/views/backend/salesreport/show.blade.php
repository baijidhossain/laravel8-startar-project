
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>
<style>


</style>
@endpush
    


@section('content')
<div class="   container">


<div class="container-flueit">
    <h6>Products</h6>
    <div class=" row">
<div class=" col-md-7" style="overflow: scroll; height:500px">
  <div class=" row" >

    @foreach ($prodacts as $prodactt)
  
      <div class=" col-md-3 mb-3">
        <div class=" card text-center">
            
               <div class=" card-header">
                <h2 class=" btn-sm">{{ $prodactt->seling_price}} <span class=" m-0 p-0 btn-sm">tk</span> </h2>
               </div>
                   
                
                <div class="card-body">
                    <h5 class="my-2 btn-sm font-weight-bold">{{ $prodactt->bangla_name }}</h5>
                
                    <button type="button" class="btn  btn-primary w-100"
                        onClick="cartLS.add({id: {{$prodactt->id}}, name: '{{ $prodactt->bangla_name }}', price:{{ $prodactt->seling_price}}})">Add
                       </button>
                </div>
            
        </div>
      </div>
    
      @endforeach
   
      
  </div>
</div>


        <div class=" col-md-5">
                <div class="card mb-4 shadow-sm">
                   
                       Selected item
                  
                    <div class="" style="height:250px;overflow:scroll;">
                    <div class="card-body">
                        <form action="{{ Route('app.card.addtocard') }}" method="POST">
                            @csrf
                     
                        <table class=" text-center table-bordered ">

                            <thead>
                                <tr>
                                    <th  class=" ">P_Name</th >
                                    <th   class=" ">Qty</th >
                                    <th   class="">Price</th >
  
                                    <th   class=""><i class="far fa-window-close"></i></th >
                                </tr>
                            </thead>

                            <tbody class="cart">

                            </tbody>
                        </table>
                        <input  class="  btn btn-primary" type="submit" value="Printtt">
                       </form>
                      
                    </div>   
                </div>
                <td  class=" d-flex">Total: <strong class="total"></strong></td>
                </div>
            
            </div>
</div>
</div>
<script>
    function renderCart(items) {
        const $cart = document.querySelector(".cart")
        const $total = document.querySelector(".total")

        $cart.innerHTML = items.map((item) => `
       
                <tr class="form-group" >
                   
                    <td class="order_text_size" value="">
                    

                        <input name="p_name[]" class="btn btn-sm form-control p-0" type="text" value="${item.name}">
                   </td>
                    <td class="order_text_size d-flex">   
                        <button type="button" class=""
                            onClick="cartLS.quantity(${item.id},1)">+</button>
                            <input name="p_qty[]" class="btn btn-sm form-control " type="text" value="${item.quantity} ">
                             <button type="button" class=""
                            onClick="cartLS.quantity(${item.id},-1)">-</button>
                    </td>
                    <td class="order_text_size">
                        <input name="p_price[]" class="btn btn-sm form-control p-0" type="text"  value="${item.price}">
                  
                    </td>
            
                    <td class="text-right"><Button class="btn btn-sm  btn-danger " onClick="cartLS.remove(${item.id})"><i class="far fa-window-close"></i></Button></td>
                </tr>   
              
                `).join("")
              

        $total.innerHTML = "tk"+cartLS.total()
        
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
    } );



    </script>
@endpush