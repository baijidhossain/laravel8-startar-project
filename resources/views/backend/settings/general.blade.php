
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
               <i class="pe-7s-settings icon-gradient bg-mean-fruit">
               </i>
           </div>
           <div>

          General Settings
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.dashboard')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back
           </a>

       </div>  
      </div>
</div>         


        <div class="row">
            
           @include('backend.settings.sitebar')

        <div class="col-md-9">
         <form  method="POST" enctype="multipart/form-data" action ="{{ route('app.settings.general.update')}}  ">
            @csrf
                
                    @method('PUT')
            
                        <div class=" card">
                            <div class="card-body">
                                <h4 class=" card-title">Basic info</h4>
                                
                                <div class=" form-group">
                                    <label for="site_title"> Site title</label>
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="site_title" value="{{ setting('site_title') ??  old('site_title') }}"   >

                                    @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="site_description"> site_description</label>
                                    <textarea id="site_description" type="text" class="form-control @error('site_description') is-invalid @enderror" name="site_description" value="{{ setting('site_title')??  old('site_description') }}" > {{  setting('site_description') ??  old('site_description') }}</textarea>
                                   
                                    @error('site_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="site_address">site_address</label>
                                    <textarea id="site_address" type="text" class="form-control @error('site_address') is-invalid @enderror" name="site_address" value="{{ $menu->site_address ??  old('site_address') }}" > {{ setting('site_address') ??  old('site_address') }}</textarea>
                                   
                                    @error('site_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class=" btn btn-primary btn-sm">
                                    update
                                </button>
                        
                    </div>
              </div>
          
       
             
         </form>
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
@endpush