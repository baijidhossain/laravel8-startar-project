
@extends('layouts.backend.app')


@push('css')
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

       @isset($menuItem)
       Edit menu item
           @else
           Add new menu item to (<code> {{ $menu->name }}</code>)
       @endisset
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.menus.builder',$menu->id)}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back to list
           </a>

       </div>  
      </div>
</div>         


    <div class="row">
        <div class="col-12">
         <form  method="post" enctype="multipart/form-data" action ="{{ isset($menuItem)? route('app.menus.item.update',['id'=>$menu->id,'itemId'=>$menuItem->id]): route("app.menus.item.store",$menu->id)}} ">
            @csrf
                @isset($menuItem)
                    @method('PUT')
                @endisset
                <div class="row">
                    <div class=" col-md-8">

                        <div class=" card">
                         
                            <div class=" card-body">
                                <h4 class=" card-title">Manage Menu Item</h4>

                                <div class=" form-group">
                                    <label for="type">type</label>
                                    <select class=" custom-select" name="type" onchange="setItemType()" id="type">
                                     <option value="item" @isset($menuItem) {{ $menuItem->type=='item'? 'selected' : '' }}  @endisset  >Menu Item</option>
                                     <option value="divider" @isset($menuItem) {{ $menuItem->type=='divider'? 'selected' : '' }}  @endisset >Divider</option>
                                    </select>
                                </div>

                                <div class="" id="divider_fields">
                                    <div class=" form-group">
                                        <label for="divider_title"> Title of the divider</label>
                                        <input id="divider_title" type="text" class="form-control @error('divider_title') is-invalid @enderror" name="divider_title" value="{{ $menuItem->divider_title ??  old('divider_title') }}"   >
    
                                        @error('divider_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="" id="item_fields">
                                    <div class=" form-group">
                                        <label for="title"> Title</label>
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $menuItem->title ??  old('title') }}"   >
    
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class=" form-group">
                                        <label for="url">Url for the menu item</label>
                                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $menuItem->url ??  old('url') }}"   >
    
                                        @error('url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class=" form-group">
                                        <label for="target">Open in</label>
                                        <select class=" custom-select  @error('target') is-invalid @enderror"  name="target" id="target">
                                         <option value="_self" @isset($menuItem) {{ $menuItem->target=='_self'? 'selected' : '' }}  @endisset >Same tab/window</option>
                                         <option value="_blank" @isset($menuItem) {{ $menuItem->target=='_blank'? 'selected' : '' }}  @endisset >New tab/window</option>
                                        </select>

                                        @error('target')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                    </div>

                                    <div class=" form-group">
                                        <label for="icon_class">Font icon class for menu item <a target="_blank" href="https://fontawesome.com/">(Use a fontawesome Font Class)</a></label>
                                        <input id="icon_class" type="text" class="form-control @error('icon_class') is-invalid @enderror" name="icon_class" value="{{ $menuItem->icon_class ??  old('icon_class') }}"   >
    
                                        @error('icon_class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                         
                                <button type="submit" class=" btn btn-primary btn-sm">
                                    @isset($menuItem)
                                    <i class="fas fa-plus-arrow-circle-up"></i>
                                    update
                                    @else
                                    <i class="fas fa-plus-circle"></i>
                                    Create
                                
                                </button>
                                @endisset
                  
                    </div>
              </div>
            </div>
        </div>
             
         </form>
        </div>
    </div>


@endsection
@push('js')


 <script>
   function setItemType(){

       if ($('select[name="type"]').val()=='divider') {
           $('#divider_fields').removeClass('d-none');
           $('#item_fields').addClass('d-none');
       }
       else{
        $('#divider_fields').addClass('d-none');
           $('#item_fields').removeClass('d-none');

       }
   }
   setItemType()
   
    </script>
@endpush