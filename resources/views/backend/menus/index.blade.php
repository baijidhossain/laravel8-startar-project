
@extends('layouts.backend.app')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endpush
    


@section('content')

<div class="app-page-title">
   <div class="page-title-wrapper">
       <div class="page-title-heading">
           <div class="page-title-icon">
               <i class="pe-7s-news-paper icon-gradient bg-mean-fruit">
               </i>
           </div>
           <div>Menu
               
           </div>
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.menus.create')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
               Create menu
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
                       <th class="text-center">Description</th>
                       <th class="text-center">Action</th>
                      
                   </tr>
                   </thead>
                   <tbody>
         @foreach ($menus as $key => $menu )
      
                   <tr>
                       <td class="text-center text-muted">{{ $key+1 }}</td>
                     
                 
                        <td class=" text-center"> {{ $menu->name }}</td>
                   
                        <td class=" text-center"> {{ $menu->description }}</td>
                     
        
                        <td class=" text-center ">
                            <a class="btn btn-sm  btn-success" href="{{ route('app.menus.builder',$menu->id) }}">  <i class=" fas fa-list "> </i> <span>Builder</span></a>
                            <a class="btn btn-sm btn-info" href="{{ route('app.menus.edit',$menu->id) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
                            @if ($menu->deletable==false)
                            <button type="button" onclick="delatedata({{ $menu->id  }})" class="btn btn-sm btn-danger opacity-5 " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                            @else
                            <button type="button" onclick="delatedata({{ $menu->id  }})" class="btn btn-sm btn-danger " >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
                            @endif
  
                            
  
                            <form  id="delete-form-{{$menu->id}}" method="POST" action="{{ route('app.menus.destroy',$menu->id) }}" style=" display:none;">
                                  @csrf
                                  @method('DELETE')
  
                            </form>
                    
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



    </script>
@endpush