





@isset($getdata)
@foreach ($getdata as $prodactt)

<div class=" col-md-3">

  <button type="button" class="btn p-0  w-100"
        onClick="cartLS.add({id: {{$prodactt->id}}, name: '{{ $prodactt->bangla_name }}', price:{{ $prodactt->seling_price}}})">
        <div class=" card text-center {{$prodactt->qty<=0 ? 'opacity-4' : ''}}    ">
            
                <h2 class=" btn-sm   text-info">{{ $prodactt->seling_price}} <span class=" m-0 p-0 btn-sm">tk</span> </h2>
             
    
                <div class="card-body ">
                    
                    <img width="20%" class="loading " src="{{ url('image/loading.gif') }}" alt="">
                   
                    <h5 style="font-size: 10px" class="my-2  {{$prodactt->qty<=0 ? 'text-danger' : 'text-info'}} ">{{$prodactt->qty<=0 ? $prodactt->bangla_name.'ঃ'.'নেই' : 'Prodact availble'.' '.$prodactt->qty}} </h5>
                    <h5 class="my-2 btn-sm  text-info  ">{{ $prodactt->bangla_name }}</h5>
                    
                </div>
            
        </div>
    </button>
</div>

@endforeach
@endisset