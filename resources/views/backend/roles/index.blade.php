
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
           <div>Roles 
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.roles.create')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
               Create role
           </a>
        
       </div>  
      </div>
</div>         


<div class="row">
   <div class="col-md-12">
       <div class="main-card mb-3 card">
        
           <div class=" p-2 table-responsive">
               <table id="datatable" class="  align-middle mb-0 table table-borderless table-striped table-hover">
                   <thead>
                   <tr>
                       <th class="text-center">#</th>
                       <th>Name</th>
                       <th class="text-center">Permission</th>
                       <th class="text-center">Route Permission</th>
                       <th class="text-center">Updated At</th>
                       <th class="text-center">Actions</th>
                   </tr>
                   </thead>
                   <tbody>
         @foreach ($roles as $key => $role )

         
    
                   <tr>
                       <td class="text-center text-muted">{{ $key+1 }}</td>
                  
                       <td class="text-center">{{  $role->name }}</td>
                       <td class="text-center">
                           @if ($role->permissions->count()>0)
                           
                           <span class="badge badge-info">{{ $role->permissions->count() }} </span>  
                        
                           @else
                                   <span class="badge badge-denger text-danger">No permission found :(</span>   
                           @endif
                     
                       </td>

                <td class="text-center "> 
                        @if ($role->deletable==false && $role->name=='Admin')
                        <span class=" text-danger">No action</span>
                    @else
                    <form  id="routepermission-form-{{$role->id}}" method="post" action="{{ route('app.routepermision',$role->id) }}" >
                        @csrf
                        @method('get')
                        <input style="display:none;" name="role_id" type="text" value="{{ $role->id }}">
                        <input type="checkbox"  class="  routepermission" @isset($role) {{ $role->routepermission==true?'checked':'' }}   @endisset  name="routepermision">
                    
                    </form>
                    <a style=" font-size:10px;" class=" btn-sm btn-info  text-white " type="submit" onclick="routepermission({{ $role->id  }})" class="routepermission" name="routepermision" >Update</a>
                    @endif
                    
                    </td>


                       <td class="text-center">  {{ $role->updated_at->diffForHumans() }} </td>
                       <td class="text-center ">
                         @if ($role->deletable==false && $role->name=='Admin')
                             <span class=" text-danger">No action</span>
                         @else
                             




                         <a class="btn btn-sm btn-info" href="{{ route('app.roles.edit',$role->id) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>    
                       
                         <button type="button" onclick="delatedata({{ $role->id  }})" class="btn btn-sm btn-danger" >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>

                         <form  id="delete-form-{{$role->id}}" method="POST" action="{{ route('app.roles.destroy',$role->id) }}" style="display:none;">
                               @csrf
                               @method('DELETE')

                         </form>
                    
                   

                         @endif
                            
                           
                        </td>
                   </tr>
                          
         @endforeach
                   </tbody>
               </table>
           </div>
           <div class="d-block text-center card-footer">
               <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
               <button class="btn-wide btn btn-success">Save</button>
           </div>
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

        $(document).ready(function(){

        })

        function routepermission(id) {
          
            document.getElementById('routepermission-form-'+id).submit();   
        }

            </script>

@endpush