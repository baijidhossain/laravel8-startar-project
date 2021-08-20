
@extends('layouts.backend.app')

 @section('content')

<div class="app-page-title">
    <div class="page-title-wrapper mb-4">
        <div class="page-title-heading">
            <div class="page-title-icon">
              
                <i class="fas fa-tachometer-alt"></i>
            </div>
            <div>
                @role('admin')
               Admin Dashboard (Hi admin)

               <img width="30px" height="30px" class=" rounded-circle" src="{{ url(userimage()) }}" alt="">
               @else
                   Dashboard
             
                @endrole
             
            </div>
          
        </div>

</div>         
   <div class="row">


    
    


    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Admin</div>
                    
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span> 
                        {{ $admincount->count() }}</span></div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total User</div>
                    
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $users->count() }}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total menu</div>
                  
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $menucount }}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total role</div>
                   
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $rolecount->count() }}</span></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Recent new user
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                       
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                
                <table id="datatable" class="  align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class=" text-center">Picture</th>
                        <th class=" text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">joined at</th>
                        <th class="text-center ">Action</th>
                    </tr>
                    </thead>
                    <tbody>
          @foreach ($users as $key => $user )
       
                    <tr>
                        <td class="text-center text-muted">{{ $key+1 }}</td>
                      
                        <td class=" text-center">
                            {{-- <img width="30px" height="30px" class=" rounded-circle" src="{{ url(userimage()) }}" alt=""> --}}

                             <img class=" rounded-circle" width="42px" height="42px" class="" src="{{ (!empty($user->image))?url('/upload/user_image/'.$user->image) : url(defaultimage())}}"    alt="User Avatar">
                                
                         </td>

                         <td class=" text-center">
                             <div class=" widget-content-left flex2">
                            {{  $user->name }}
                            <div class=" widget-subheading opacity-5">
                                @if ($user->role)
                                {{ $user->role->name }}
                                @else

                                   <span class=" badge  badge-danger">No role found</span>

                                @endif

                            </div>
                        </div>
                    </td>
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