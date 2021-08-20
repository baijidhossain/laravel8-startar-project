
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
    


@section('content')

<div class="app-page-title">
   <div class="page-title-wrapper">
       <div class="page-title-heading">
           <div class="page-title-icon">
               <i class="pe-7s-users icon-gradient bg-mean-fruit">
               </i>
           </div>
           <div>Users 
             
           </div>
           <br>
  
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.users.create')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
               Create user
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
                       <th class=" text-center">Picture</th>
                       <th class=" text-center">Name</th>
                       <th class="text-center">Email</th>
                       <th class="text-center">Status</th>
                       <th class="text-center">joined at</th>
                       <th class="text-center  right">Action</th>
                   </tr>
                   </thead>
                   <tbody>
         @foreach ($users as $key => $user )
      
                   <tr>
                       <td class="text-center text-muted">{{ $key+1 }}</td>
                     
                       <td class=" text-center">
                           <div class=" widget-content p-0 d-flex">
                           
                                <div class=" widget-content-wrapper">
                                <div class=" widget-content-left mr-3">
                                <div class=" widget-content-left">
                                    <img class=" rounded-circle" width="42px" height="42px" class="" src="{{ (!empty($user->image))?url('/upload/user_image/'.$user->image) : url(defaultimage())}}"    alt="User Avatar">
                                
                                    {{-- <img class=" rounded-circle" width="42px" height="42px" class="" src="{{ url('/assets/defaultimage/defaultimage.jpg') }}"    alt="User Avatar"> --}}
                                </div>
                                </div>
                                </div>
                            
                           </div>
                        </td>
                        <td>    <div class=" widget-content-left flex2">
                            {{  $user->name }}
                            <div class=" btn-sm widget-subheading opacity-5">
                                @if ($user->role)
                                {{ $user->role->name }}
                                @else

                                   <span class=" badge  badge-danger">No role found</span>

                                @endif

                            </div>
                        </div></td>
                        <td class=" text-center"> {{ $user->email }}</td>
                        <td class=" text-center">
                        @if ($user->status==true)
                            <span class=" badge badge-info">Active</span>
                            @else
                            <span class=" badge badge-danger">inActive</span>
                        @endif
                        </td>
                        <td class=" text-center"> {{ $user->created_at->diffForhumans() }} </td>

                    
                        <td class="text-center ">
                            <a class="btn btn-sm btn-info" href="{{ route('app.users.show',$user->id) }}">  <i class=" fas fa-eye "> </i> <span>Show</span></a> 
                            <a class="btn btn-sm btn-info" href="{{ route('app.users.edit',$user->id) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
  
                            <button type="button" onclick="delatedata({{ $user->id  }})" class="btn btn-sm btn-danger" >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
  
                            <form  id="delete-form-{{$user->id}}" method="POST" action="{{ route('app.users.destroy',$user->id) }}" style=" display:none;">
                                  @csrf
                                  @method('DELETE')
  
                            </form>
                         
                          </td>
            
                   </tr>
                          
         @endforeach
                   </tbody>
               </table>
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
    });



    </script>
@endpush