
@extends('layouts.backend.app')


@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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

               {{ isset($page) ? 'Edit' : 'Create'}} -pages 
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.pages.index')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back to list
           </a>

       </div>  
      </div>
</div>         


    <div class="row">
        <div class="col-12">
         <form  method="POST" enctype="multipart/form-data" action ="{{ isset($page)? route('app.pages.update',$page->id): route("app.pages.store")}}  ">
            @csrf
                @isset($page)
                    @method('PUT')
                @endisset
                <div class="row">
                    <div class=" col-md-8">

                        <div class=" card">
                         
                            <div class=" card-body">
                                <h4 class=" card-title">Basic info</h4>
                                <div class=" form-group">
                                    <label for="title"> title</label>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $page->title ??  old('title') }}"   >

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                
                         <div class=" form-group">
                            <label for="excerpt"> Excerpt</label>
  
                            <textarea id="excerpt" type="text" class="form-control @error('meta_kywords') is-invalid @enderror" name="excerpt" value="{{ $page->excerpt ??  old('excerpt') }}"  >
  
  
  
                            </textarea>
                       
  
                            @error('excerpt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class=" form-group">
                            <label for="body"> body</label>
  
                            <textarea id="body" type="text" class="form-control @error('meta_kywords') is-invalid @enderror" name="body" value="{{ $page->body ??  old('body') }}"  >
  
  
  
                            </textarea>
                       
  
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                        </div>

                    </div>
                    <div class=" col-md-4">
                 

                       <div class=" card mb-2">
                       
                        <div class=" card-body">
                                                  
                            <h5 class=" cart">Select image</h5>
                 

                         <div class=" form-group">
                             <label for="image">Image</label>
                            
                     <input  type="file" id="image" data-default-file="{{ isset($page) ? $page->getFirstMediaUrl('image') : ''}}"  class="dropify form-control @error('image') is-invalid @enderror" name="image"  }} >
                   
                         
                             @error('image')
                                 <span class="text-danger" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>

                         <div class=" form-group">

                             <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" id="status" name="status" @isset($page) {{ $page->status==true ?'checked':'' }} @endisset >
                                 <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                               </div>
                               @error('status')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror

                         </div>
                         @isset($page)
                         <button type="submit" class=" btn btn-primary btn-sm">update</button>
                             @else
                             <button type="submit" class=" btn btn-primary btn-sm">Ceate</button>
                         @endisset

                        </div>
                    </div>



                    <div class=" card ">
                       
                        <div class=" card-body">
                                                  
                            <h5 class=" cart">Meta info</h5>
                 
                            <div class=" form-group">
                             <label for="meta_description"> Meta description</label>

                             <textarea id="name" type="text" class="form-control @error('meta_description') is-invalid @enderror" name="name" value="{{ $page->meta_description ??  old('meta_description') }}"  >



                             </textarea>
                        

                             @error('meta_description')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>


                         <h5 class=" cart">Meta kywords</h5>
                 
                         <div class=" form-group">
                          <label for="meta_kywords"> Meta kywords</label>

                          <textarea id="name" type="text" class="form-control @error('meta_kywords') is-invalid @enderror" name="name" value="{{ $page->meta_kywords ??  old('meta_kywords') }}"  >



                          </textarea>
                     

                          @error('meta_kywords')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

               
                   

                        </div>
                    </div>
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