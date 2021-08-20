
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
           <div>Supplier 
             
           </div>
           <br>
  
       </div>
       <div class="page-title-actions">

           <a href=" {{ route('app.suppliers.create')}} " class=" btn btn-primary btn-sm ">
               <i class= "fa fa-plus-circle" ></i>
               Create supplier
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
                       <th class=" text-center">Logo</th>
                       <th class=" text-center">Name</th>
                       <th class="text-center">Mobile no </th>
                       <th class="text-center">Email</th>
                       <th class="text-center">Address</th>
                       <th class="text-center">joined at</th>
                       <th class="text-center">Updated at</th>
                       <th class="text-center  right">Action</th>
                   </tr>
                   </thead>
                   <tbody>
         @foreach ($suppliers as $key => $supplier )
      
                   <tr>
                       <td class="text-center text-muted">{{ $key+1 }}</td>
                     
                       <td class=" text-center">
                           <div class=" widget-content p-0 d-flex">
                           
                                <div class=" widget-content-wrapper">
                                <div class=" widget-content-left mr-3">
                                <div class=" widget-content-left">
                                    <img class=" rounded-circle" width="42px" height="42px" class="" src="{{ (!empty($supplier->image))?url('/upload/user_image/'.$supplier->image) : url(defaultimage())}}"    alt="User Avatar">
                                
                                    {{-- <img class=" rounded-circle" width="42px" height="42px" class="" src="{{ url('/assets/defaultimage/defaultimage.jpg') }}"    alt="User Avatar"> --}}
                                </div>
                                </div>
                                </div>
                            
                           </div>
                        </td>
                        <td>   
                             <div class=" widget-content-left flex2">
                            {{  $supplier->name }}
                        </div>
                    </td>
                        <td class=" text-center"> {{ $supplier->mobile_no }}</td>
                        <td class=" text-center">
                    {{ $supplier->email }}
                        </td>
                        <td class=" text-center"> {{ $supplier->address }} </td>
                        <td class=" text-center"> {{ $supplier->created_at->diffForhumans() }} </td>
                        <td class=" text-center"> {{ $supplier->updated_at->diffForhumans() }} </td>
                    
                    
                        <td class="text-center ">
                            <a class="btn btn-sm btn-info" href="{{ route('app.suppliers.show',$supplier->id) }}">  <i class=" fas fa-eye "> </i> <span>Show</span></a> 
                            <a class="btn btn-sm btn-info" href="{{ route('app.suppliers.edit',$supplier->id) }}">  <i class=" fas fa-edit "> </i> <span>Edit</span></a>
  
                            <button type="button" onclick="delatedata({{ $supplier->id  }})" class="btn btn-sm btn-danger" >  <i class=" fas fa-trash-alt "> </i> <span>Delete</span></button>
  
                            <form  id="delete-form-{{$supplier->id}}" method="POST" action="{{ route('app.suppliers.destroy',$supplier->id) }}" style=" display:none;">
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





<div id="accordion">

    @foreach ( $suppliers as $key => $supplier2 )
    <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#id-{{ $supplier2->id }}" aria-expanded="true" aria-controls="{{ $supplier2->id }}">
              {{ $supplier2->name }}
            </button>
          </h5>
        </div>
    
        <div id="id-{{ $supplier2->id }}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">

@foreach ($collection as $item)
    
@endforeach

            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    @endforeach

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