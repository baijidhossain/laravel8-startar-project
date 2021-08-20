
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
    


@section('content')

<div class="app-page-title">
   <div class="page-title-wrapper">
       <div class="page-title-heading">
           <div class="page-title-icon">
               <i class="pe-7s-categories icon-gradient bg-mean-fruit">
               </i>
           </div>
           <div>categories 
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.categories.create')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
               Create categorie
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
                       <th class=" text-center">Name</th>
                       <th class=" text-center">Createt_at</th>
                       <th class=" text-center">Action</th>
                     
                   </tr>
                   </thead>
                   <tbody>
                       
                        @foreach ($categories as $key => $categorie )

             
                                <tr>
                                    <td class="text-center text-muted">{{ $key+1 }}</td>
                                
                                    <td class="text-center text-muted">{{ $categorie->name }}</td>
                                        <td class=" text-center"> {{ $categorie->created_at->diffForhumans() }} </td>

                          
                                        <td class="text-center ">
                                           
                                            <a class="btn btn-sm btn-info" href="{{ route('app.categories.edit',$categorie->id) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
            
                                            <button type="button" onclick="delatedata({{ $categorie->id  }})" class="btn btn-sm btn-danger" >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                
                                            <form  id="delete-form-{{$categorie->id}}" method="POST" action="{{ route('app.categories.destroy',$categorie->id) }}" style=" display:none;">
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
    } );



    </script>
@endpush