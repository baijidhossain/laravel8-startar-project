
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

         Mail Settings
               
               
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
         <form  method="POST" enctype="multipart/form-data" action ="{{ route('app.settings.mail.update')}}  ">
            @csrf
                
                    @method('PUT')
            
                        <div class=" card">
                            <div class="card-body">

                        <div class=" form-row">
                            <div class=" col">
                                <div class=" form-group">
                                    <label for="mail_mailer">Mailer</label>
                                  <input placeholder=" Mailer" id="mail_mailer" type="text" class="form-control @error('mail_mailer') is-invalid @enderror" name="mail_mailer" value="{{ setting('mail_mailer') ??  old('mail_mailer') }}"   >

                                    @error('mail_mailer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class=" col">
                                <div class=" form-group">
                                    <label for="mail_encryption">Mail Encryption</label>
                                  <input placeholder=" Mail Encryption" id="mail_encryption" type="text" class="form-control @error('mail_encryption') is-invalid @enderror" name="mail_encryption" value="{{ setting('mail_encryption') ??  old('mail_encryption') }}"   >

                                    @error('mail_encryption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class=" form-row">
                            <div class=" col">
                                <div class=" form-group">
                                    <label for="mail_host">Mail Host</label>
                                  <input placeholder=" Mail host" id="mail_host" type="text" class="form-control @error('mail_host') is-invalid @enderror" name="mail_host" value="{{ setting('mail_host') ??  old('mail_host') }}"   >

                                    @error('mail_host')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class=" col">
                                <div class=" form-group">
                                    <label for="mail_port">Mail Port</label>
                                  <input placeholder=" Mail Port" id="mail_port" type="text" class="form-control @error('mail_port') is-invalid @enderror" name="mail_port" value="{{ setting('mail_port') ??  old('mail_port') }}"   >

                                    @error('mail_port')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class=" form-group">
                            <label for="mail_username">Mail username</label>
                          <input placeholder="Mail username" id="mail_username" type="mail" class="form-control @error('mail_username') is-invalid @enderror" name="mail_username" value="{{ setting('mail_username') ??  old('mail_username') }}"   >

                            @error('mail_username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class=" form-group">
                            <label for="mail_password">Mail password</label>
                          <input placeholder="Mail password" id="mail_password" type="text" class="form-control @error('mail_password') is-invalid @enderror" name="mail_password" value="{{ setting('mail_password') ??  old('mail_password') }}"   >

                            @error('mail_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class=" form-group">
                            <label for="mail_from_address">Mail from address</label>
                          <input placeholder="Mail from address" id="mail_from_address" type="text" class="form-control @error('mail_from_address') is-invalid @enderror" name="mail_from_address" value="{{ setting('mail_from_address') ??  old('mail_from_address') }}"   >

                            @error('mail_from_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class=" form-group">
                            <label for="mail_from_name">Mail from name</label>
                          <input placeholder="Mail from name" id="mail_from_name" type="text" class="form-control @error('mail_from_name') is-invalid @enderror" name="mail_from_name" value="{{ setting('mail_from_name') ??  old('mail_from_name') }}"   >

                            @error('mail_from_name')
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