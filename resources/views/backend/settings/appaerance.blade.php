
@extends('layouts.backend.app')


@push('css')

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
         <form class=" mb-3"  method="POST" enctype="multipart/form-data" action ="{{ route('app.settings.appaerance.update')}}  ">
            @csrf
                
                    @method('PUT')
            
                        <div class=" card">
                            <div class="card-body">
                                <h4 class=" card-title">Basic info</h4>
                                
                                <div class=" form-group">
                                
                                    <label for="site_logo">Site_logo (Only image are allowed)</label>
                                   
                            <input  type="file" id="site_logo" data-default-file="{{(!empty(site_logo()))?url(site_logo()) : url(defaultimage()) }}"  class="dropify form-control @error('site_logo') is-invalid @enderror" name="site_logo"  }} >
                          
                                
                                    @error('site_logo')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class=" btn btn-primary btn-sm">
                                   Logo update
                                </button>
                        
                    </div>
              </div>
          
       
             
         </form>


















         <form  method="POST" enctype="multipart/form-data" action ="{{ route('app.settings.faviconicon.update')}}  ">
            @csrf
                
                    @method('PUT')
            
                        <div class=" card">
                            <div class="card-body">
                                <h4 class=" card-title">Favicon icon</h4>
                                
                     
                            <div class=" form-group">
                                    <label for="site_favicon_icon">Site_favicon_icon (Only image are allowed size: 33 X 33)</label>
                                   
                                    <input  data-default-file="{{(!empty(site_favicon_icon()))?url(site_favicon_icon()) : url(defaultimage()) }}"  type="file" id="site_favicon_icon" class="dropify form-control @error('site_favicon_icon') is-invalid @enderror" name="site_favicon_icon"  }} >
                          
                                    @error('site_favicon_icon')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class=" btn btn-primary btn-sm">
                                  Favicon icon  update
                                </button>
                        
                    </div>
              </div>
          
         </form>
        </div>
    </div>


@endsection
@push('js')
<script src="https://cdn.tiny.cloud/1/dh0dwd5wezwhlv6s1erlhgz1dmxlaz463k0om9o461c8o2wz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>


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