
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

               {{ isset($user) ? 'Edit' : 'Create'}} -Users 
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.users.index')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back to list
           </a>

       </div>  
      </div>
</div>         


    <div class="row">
        <div class="col-12">
         <form  method="POST" enctype="multipart/form-data" action ="{{ isset($user)? route('app.users.update',$user->id): route("app.users.store")}}  ">
            @csrf
                @isset($user)
                    @method('PUT')
                @endisset
                <div class="row">
                    <div class=" col-md-8">

                        <div class=" card">
                         
                            <div class=" card-body">
                                <h4 class=" card-title">User info</h4>
                                <div class=" form-group">
                                    <label for="name"> name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ??  old('name') }}"   >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="email"> email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ??  old('email') }}"   >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="password">password</label>
                                    <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password"  }}  >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                
                                <div class=" form-group">
                                    <label for="confirm_password">Confirm password</label>
                                    <input id="password_confirmation" type="text" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  }}  >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class=" col-md-4">
                       <div class=" card">
                       
                           <div class=" card-body">
                            <h4 class=" card-title">
                                Select Role and status
                               </h4>                             
                               
                               <div class=" form-group">
                                <label for="role">Select role</label>
                               
                             <select id="role"  class="js-example-basic-single form-control @error('role') is-invalid @enderror" name="role"  }} >
                           
                                                            
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}"  
                                
                                {{-- @isset($user)
                                {{ $user->role->id==$role->id ? 'selected' : '' }}
                                @endisset --}} >
                               
                        {{ $role->name }}
                
                            </option>
                             @endforeach
                          

                            </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class=" form-group">
                                <label for="image">image</label>
                               
                        <input  type="file" id="image" data-default-file="{{ isset($user) ? url('/upload/user_image/'.$user->image): url('/assets/defaultimage/defaultimage.jpg')}}"  class="dropify form-control @error('image') is-invalid @enderror" name="image"  }} >
                      
                            
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class=" form-group">

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status" name="status" @isset($user) {{ $user->status==true ?'checked':'' }} @endisset >
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                  </div>
                                  @error('status')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror

                            </div>
                            @isset($user)
                            <button type="submit" class=" btn btn-primary btn-sm">update</button>
                                @else
                                <button type="submit" class=" btn btn-primary btn-sm">Ceate</button>
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