
@extends('layouts.backend.app')


@push('css')

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

            
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.prodacts.index')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back to list
           </a>

       </div>  
      </div>
</div>         


    <div class="row">
        <div class="col-12">
         <form  method="POST" enctype="multipart/form-data" action ="{{ isset($editData)?  route("app.prodacts.update",$editData->id) :  route("app.prodacts.store")  }}  ">
            @csrf
            @isset($editData)
                @method('PUT')
            @endisset
              
                <div class="row justify-content-center">
                    <div class=" col-md-7">
                        <div class=" card">
                            <div class=" card-body">
                                <h4 class=" card-title">Prodact info</h4>
                        <div class=" row">

                            <div class=" col-md-12">
                                <div class=" form-group">
                        <label for="category">Select Category</label>
                             
                         
                        <select id="role"  class="js-example-basic-single form-control @error('role') is-invalid @enderror"  name="category_id">
    
                        @isset($editData)
                        <option value="{{ $editData->category->id }}">
                            {{ $editData->category->name }}
                        </option>  
                        @endisset
                            @foreach ($categories as $category)
                            <option value="{{  $category->id }}">
                            {{ $category->name }}
                            </option>
                            @endforeach
        
                        </select>
                        </div>
                            </div>
                         

                             <div class=" col-md-6">
                                <div class=" form-group">
                                    <label for="p_english_name">Prodact english name</label>
                                    <input id="p_english_name" type="text" class="form-control @error('p_english_name') is-invalid @enderror" name="p_english_name" value=" {{ isset($editData)? $editData->english_name :'' }}"   >

                                    @error('p_english_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class=" col-md-6">
                                <div class=" form-group">
                                    <label for="p_bangla_name">Prodact bangla name</label>
                                    <input id="p_bangla_name" type="text" class="form-control @error('p_bangla_name') is-invalid @enderror" name="p_bangla_name" value=" {{ isset($editData)? $editData->bangla_name :'' }}"   >

                                    @error('p_bangla_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class=" col-md-6">
                                <div class=" form-group">
                                    <label for="p_qty"> Quantity</label>
                                    <input id="p_qty" type="text" class="form-control @error('p_qty') is-invalid @enderror" name="p_qty" value=" {{ isset($editData)? $editData->qty :'' }}"   >

                                    @error('p_qty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class=" col-md-6">
                                <div class=" form-group">
                                    <label for="bying_price">Bying price</label>
                                    <input id="bying_price" type="text" class="form-control @error('bying_price') is-invalid @enderror" name="bying_price" value=" {{ isset($editData)? $editData->bying_price :'' }}"   >

                                    @error('bying_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class=" col-md-6">
                                <div class=" form-group">
                                    <label for="seling_price">Seling price</label>
                                    <input id="seling_price" type="text" class="form-control @error('seling_price') is-invalid @enderror" name="seling_price" value=" {{ isset($editData)? $editData->seling_price :'' }}"   >

                                    @error('seling_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                     </div>
                              
                                    <button class=" mb-2 mr-4 ml-4 btn btn-sm btn-primary" >
                                        @isset($editData)
                                            Update
                                            @else
                                            Create
                                        @endisset
                                        
                                    </button>
                            
                            </div>
                        </div>
                    </div>
                </div>
         </form>
        </div>
    </div>


@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

 <script>
   // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    $('.dropify').dropify();
    $('.js-example-basic-single').select2();
   });
    </script>
@endpush