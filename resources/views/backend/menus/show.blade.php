
@extends('layouts.backend.app')

@push('css')



@endpush
    


@section('content')


<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Users profile 
                
            </div>
        </div>
        <div class="page-title-actions">
 
       
            <a href=" {{ route('app.users.edit',$user->id)}} " class=" btn btn-primary btn-sm ">
                <i class= "fa fa-edit" ></i>
               Edit user
            </a>

            
            <a href=" {{ route('app.users.create')}} " class=" btn btn-primary btn-sm ">
                <i class= "fa fa-plus-circle" ></i>
                Create user
            </a>
         
        </div>  
       </div>
 </div>         
 


<div class=" row">
    <div class=" text-center col-md-3">
        <div class=" card">
            <div class=" card-body">

                <img class="circle" width="150px" class="" src="{{ $user->getFirstMediaUrl('avatar') }}"    alt="User Avatar">
               
            </div>
        </div>
      
    </div>
    <div class=" col-md-9">
        <div class=" card">
            <div class=" card-body">
                <table class="table">
                    <thead>
              
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>User role:</td>
                            <td>{{ $user->role->name }}</td>
                        
                          </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Name:</td>
                        <td>{{ $user->name }}</td>
                    
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td >Email:</td>
                        <td>{{ $user->email }}</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Joined:</td>
                        <td> {{ $user->created_at->diffForhumans() }} </td>
                        
                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>Updated:</td>
                        <td> {{ $user->updated_at->diffForhumans() }} </td>
                        
                      </tr>
                  
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
    } );



    </script>
@endpush