
@extends('layouts.backend.app')


@push('css')

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
<style>

    .dropify-wrapper .dropify-message p{
        font-size: initial;
    }

</style>

@endpush
    


@section('content')

<div class="app-page-title">
   <div class="page-title-wrapper">
       <div class="page-title-heading">
           <div class="page-title-icon">
               <i class="pe-7s-check icon-gradient bg-mean-fruit">
               </i>
           </div>
           <div>

            Menu builder ( {{$menu->name}})
               
               
           </div>
       </div>
       <div class="page-title-actions">
        <a href=" {{ route('app.menus.index')}} " class=" btn btn-primary btn-sm ">
            <i class= "fa fa-plus-circle" ></i>
           Back to list
        </a>
           <a href=" {{ route('app.menus.item.create',$menu->id)}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
            Create Menu Item
           </a>

       </div>  
      </div>
</div>         


    <div class="row">
        <div class="col-12">

            <div class=" card main-card mb-3">
                <div class=" card-body">
                    <h5 class=" card-title"> How to Use:</h5>
                    <p>You can output a menu anywhere on your site by calling <code>menu ('name')</code></p>
                </div>
            </div>

            <div  class=" card main-card mb-3">
                <div class=" card-body">
                    <h5 class=" card-title"> How to Use:</h5>
                    <p>DRUG AND DROP THE MENU ITEMS BELOW TO-RE ARRANGE THEM</p>
                    <div class="dd"  >
                         <ol class="dd-list "  style=" ">

                            @forelse ($menu->menuItems as $Item)
                                <li class="dd-item" data-id="{{ $Item->id }}">



                            <div class=" pull-right item-actions">
                                <a class="btn btn-sm btn-info" href="{{ route('app.menus.item.edit',['id'=>$menu->id,'itemId'=>$Item->id]) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
                                @if ($menu->deletable==false)
                                <button type="button" onclick="delatedata({{ $Item->id  }})" class="btn btn-sm btn-danger opacity-5 " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                                @else
                                <button type="button" onclick="delatedata({{ $menu->id  }})" class="btn btn-sm btn-danger " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                                @endif
      
                                
      
                                <form  id="delete-form-{{$Item->id}}" method="POST" action="{{ route('app.menus.item.destroy',['id'=>$menu->id,'itemId'=>$Item->id]) }}" style=" display:none;">
                                      @csrf
                                      @method('DELETE')
      
                                </form>
                        
                                    </div>
                           <div class=" dd-handle">
                            @if ($Item->type=='divider')
                            <span> Divider:{{ $Item->divider_title }}</span>
                            @else
                            <span>Item:{{ $Item->title }}</span> 
                            <small class="url">{{  $Item->url }}</small>
                            @endif
                           </div>


                             @if (!$Item->childs->isEmpty())
                                <ol class="dd-list ">

                                @foreach ($Item->childs as $childsItem)
                                    <li class="dd-item" data-id="{{ $childsItem->id }}">
    
    
    
                                <div class=" pull-right item-actions">
                                    <a class="btn btn-sm btn-info" href="{{ route('app.menus.item.edit',['id'=>$menu->id,'itemId'=>$childsItem->id]) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
                                    @if ($menu->deletable==false)
                                    <button type="button" onclick="delatedata({{ $childsItem->id  }})" class="btn btn-sm btn-danger opacity-5 " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                                    @else
                                    <button type="button" onclick="delatedata({{ $menu->id  }})" class="btn btn-sm btn-danger " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                                    @endif
          
                                    
          
                                    <form  id="delete-form-{{$childsItem->id}}" method="POST" action="{{ route('app.menus.item.destroy',['id'=>$menu->id,'itemId'=>$childsItem->id]) }}" style=" display:none;">
                                          @csrf
                                          @method('DELETE')
          
                                    </form>
                            
                                        </div>
                               <div class=" dd-handle">
                                @if ($childsItem->type=='divider')
                                <span> Divider:{{ $childsItem->divider_title }}</span>
                                @else
                                <span>Item:{{ $childsItem->title }}</span> 
                                <small class="url">{{  $childsItem->url }}</small>
                                @endif
                               </div>
    
                                         
                                   
                            
                                    </li>
    
                                @endforeach
                      
    
    
                            </ol>

                             @endif
                                     
                               
                        
                                </li>

                            @empty
                            <div class=" text-center">
                                <strong>No menu item found</strong>
                            </div>
                            @endforelse
                  


                        </ol>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
@push('js')
<script src="https://cdn.tiny.cloud/1/dh0dwd5wezwhlv6s1erlhgz1dmxlaz463k0om9o461c8o2wz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

 <script>
   // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    tinymce.init({
      selector: '#body',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });



    $('.dropify').dropify();
    $('.js-example-basic-single').select2();
   });
    </script>

    <script>
    $('.dd').nestable({maxDepth:2});

        $('.dd').on('change',function(e){
      $.post('{{ route('app.menus.order',$menu->id) }}',{
        order:JSON.stringify($('.dd').nestable('serialize')),
          _token:'{{ csrf_token() }}'
      },function(data){
         iziToast.Success({
             title:'Success',
             message:'Success fully menu order updated.',
         });
      })
        })
    </script>

@endpush