
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
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
               {{ isset($role) ? 'Edit' : 'Create'}}-Roles 
               
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.roles.index')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
              Back to list
           </a>
       </div>  
      </div>
</div>         


<div class="row">
   <div class="col-md-12">
       <div class="main-card mb-3 card">
        
         <form  method="POST" action="  {{ isset($role)? route('app.roles.update',$role->id): route('app.roles.store') }}  ">
            @csrf

            @isset($role)
                @method('PUT')
            @endisset
            <div class=" card-body">
                <h5 class=" card-header-title">Manage Roles </h5>

                <div class=" form-group">
                  <label for="name"> Role Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $role->name ??  old('name') }}"   >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class=" text-center">
                    <strong>Manage Permission for role</strong>
                </div>

                @error('permissions')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


     <div class=" form-group">
         <div class=" custom-control custom-checkbox">
<input type="checkbox" class=" custom-control-input" id="select-all">
<label for="select-all" class=" custom-control-label">Select all</label>
         </div>

     </div>

                @forelse ($modules->chunk(2) as $key=>$chunks)
                    <div class="  form-row">
                    @foreach ($chunks as $key=>$module)
                   
                        <div class="col border m-1 p-2">
                        <div class=" d-flex  "> 
                          <strong style="">Module:</strong> 
                          <span class=" font-weight-bold"> {{ $module->name }}</span>
                         </div>
                         <div class="  mt-2 mb-2 form-group">
                            <div class=" custom-control custom-checkbox">
                   <input type="checkbox" class=" mb-2 custom-control-input" id="select-module">
                   <label for="select-module" class=" custom-control-label">Select all</label>
                            </div>
                   
                        </div>
                         
                     
                   
                        @foreach ($module->permission as $key=>$permission)

                        <div class="mb-3 ml-4">

                        <div class=" custom-control custom-checkbox">
                        <input type="checkbox" class=" custom-control-input" id=" permission-{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" 
                         
                        @isset($role)
                            @foreach ($role->permissions as $rpermission)
                                {{ $permission->id == $rpermission->id ? "checked" : " "}}
                            @endforeach
                        @endisset
                        
                        >
                        <label for=" permission-{{ $permission->id }}" class=" custom-control-label">{{ $permission->name }}</label>
                       

                       
                        </div>
                        
                        </div>
                       
                        @endforeach
                        {{-- <div class=" w-100 border-right-0 border-left-0 border-top-0 border border-primary"></div> --}}
                        {{-- <div class=" " style="border-bottom: 20px;" >AAAA</div> --}}
                        </div>
                       
                    @endforeach

                    
                    </div>
                @empty
                    
                    <div class="row">
                        <div class="col text-center">
                            <strong>No module found</strong>
                        </div>
                    </div>
                 
                  
                @endforelse

                @isset($role)
                <button type="submit" class=" btn btn-primary btn-sm">update</button>
                    @else
                    <button type="submit" class=" btn btn-primary btn-sm">Ceate</button>
                @endisset

               
            </div>

           
         
         </form>
       </div>
   </div>
</div>

@endsection

@push('js')
<script src="  https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );

   

   



            $('#select-all').click( function(event){

        if (this.checked) {
            $(':checkbox').each(function (){

                this.checked=true;
            })
        }
        else{
            $(':checkbox').each(function (){

        this.checked=false;
        })

        }


            } );
    </script>
@endpush