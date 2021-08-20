
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

          Profile
               
               
           </div>
       </div>
   
      </div>
</div>         


    <div class="row">
        <div class="col-12">
         <form  method="POST" enctype="multipart/form-data" action ="{{ route('app.profile.update') }}">
            @csrf
            
         @method('PUT')
               
                <div class="row">

                    <div class=" col-md-12">
                        <div class=" card">
           
                    
                            <div class=" card-body">
                             <h4 class=" card-title">
                                 Select image
                                </h4>                             
              
                               
 
                             <div class=" form-group">
                                 <label for="image">image</label>
                                
                         <input  type="file" id="image" data-default-file="{{ userimage() ? url(userimage()): url('/assets/defaultimage/defaultimage.jpg')}}"  class="dropify form-control @error('image') is-invalid @enderror" name="image"  }} >
                       
                             
                                 @error('image')
                                     <span class="text-danger" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
 

 
                            </div>
                        </div>
                     </div>


                    <div class=" col-md-12">

                        <div class=" card">
                         
                            <div class=" card-body">
                                <h4 class=" card-title">User info</h4>
                                <div class=" form-group">
                                    <label for="name"> name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name ??  old('name') }}"   >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="email"> email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email ??  old('email') }}"   >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
 
                                <button type="submit" class=" btn btn-primary btn-sm">Update</button>
                               
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