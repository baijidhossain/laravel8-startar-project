
        @extends('layouts.backend.app')

        @push('css')
        <style>

            body{
            
            }
            .emp-profile{
                padding: 3%;
                margin-top: 3%;
                margin-bottom: 3%;
                border-radius: 0.5rem;
                background: #fff;
            }
            .profile-img{
                text-align: center;
            }
            .profile-img img{
                width: 70%;
                height: 100%;
            }
            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -20%;
                width: 70%;
                border: none;
                border-radius: 0;
                font-size: 15px;
                background: #212529b8;
            }
            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }
            .profile-head h5{
                color: #333;
            }
            .profile-head h6{
                color: #0062cc;
            }
            .profile-edit-btn{
                border: none;
                border-radius: 1.5rem;
                width: 70%;
                padding: 2%;
                font-weight: 600;
                color: #6c757d;
                cursor: pointer;
            }
            .proile-rating{
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }
            .proile-rating span{
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }
            .profile-head .nav-tabs{
                margin-bottom:5%;
            }
            .profile-head .nav-tabs .nav-link{
                font-weight:600;
                border: none;
            }
            .profile-head .nav-tabs .nav-link.active{
                border: none;
                border-bottom:2px solid #0062cc;
            }
            .profile-work{
                padding: 14%;
                margin-top: -15%;
            }
            .profile-work p{
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }
            .profile-work a{
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                font-size: 14px;
            }
            .profile-work ul{
                list-style: none;
            }
            .profile-tab label{
                font-weight: 600;
            }
            .profile-tab p{
                font-weight: 600;
                color: #0062cc;
            }
              </style>
        @endpush
            
        @section('content')

        <div class="container emp-profile">
            <form method="post">
                <div class=" col-md-12">
                    Employee details
                </div>
                <div class="row">
                    <div class=" col-md-12  ">
                        <a href="{{ route('app.employees.edit',1) }}" class="   mb-sm-2 float-right btn btn-primary btn-sm">Edit employee</a>

                        <a href="{{ route('app.employees.index') }}" class=" mr-2 mb-sm-2 float-right btn btn-primary btn-sm">Employee List</a>
                    </div>
                    <div class="col-md-3  ">
                      

                           <img class=" w-100 mb-2" class="" src="{{ (!empty($users->image))?url('/upload/user_image/'.$users->image) : url(defaultimage())}}"    alt="User Avatar">
                                

                           <h6 class=" d-flex"><span class=" font-weight-bolder font-smaller">Name:</span> 
                             <span class=" font-smaller"> {{ $users->name }}</span>
                        </h6>
                        <h6 class=" d-flex"><span class=" font-weight-bolder font-smaller">Organisation:</span> 
                            <span class=" font-smaller"> {{ $users->employeedetails->organisation }}</span>
                       </h6>
                       <h6 class=" d-flex"><span class=" font-weight-bolder font-smaller">Position:</span> 
                        <span class=" font-smaller"> {{ $users->employeedetails->position}}</span>
                   </h6>
                       <h6 class=" d-flex"><span class=" font-weight-bolder font-smaller">Salary:</span> 
                        <span class=" font-smaller"> {{ $users->employeedetails->salary}}</span>
                   </h6>
                

                    </div>

       
                    <div class="col-md-9">
                        <div class="profile-head">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="contact" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Selary</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Academic</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Experience</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content profile-tab" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="contact">
                                <div class=" row">
                                    <div class=" col-6 ">
                                        <p>Mobile number:</p>
                                    </div>
                                    <div class=" col-6 ">
                                        <p>{{ $users->employeedetails->mobile_number }}</p>
                                    </div>


                                    <div class=" col-6 ">
                                        <p>Email:</p>
                                    </div>
                                    <div class=" col-6 ">
                                        <p>{{ $users->email}}</p>
                                    </div>
                                </div>
                            </div>
                            
                           



                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class=" col-6 ">
                                            <p>Name:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->name }}</p>
                                        </div>


                                        <div class=" col-6 ">
                                            <p>Email:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->email }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Mobile number:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->mobile_number }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Village:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->village }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>po:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->po }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>ps:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->ps }}</p>
                                        </div>
                                

                                        <div class=" col-6 ">
                                            <p>Distric:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->district }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Division:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->division }}</p>
                                        </div>


                                    </div>
                                </div>


                                <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                                    <div class="row">
                                        <div class=" col-6 ">
                                            <p>Name:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->name }}</p>
                                        </div>


                                        <div class=" col-6 ">
                                            <p>Email:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->email }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Mobile number:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->mobile_number }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Village:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->village }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>po:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->po }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>ps:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->ps }}</p>
                                        </div>
                                

                                        <div class=" col-6 ">
                                            <p>Distric:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->district }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Division:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->division }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Blood group:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->blood_group }}</p>
                                        </div>

                                        
                                        <div class=" col-6 ">
                                            <p>Date of Birth:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->date_of_birth }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Position:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->position }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>NID:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->nid }}</p>
                                        </div>


                                        <div class=" col-6 ">
                                            <p>Height:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->height }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Weight:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->weight }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Religion:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->religion }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Marital status:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->marital_status }}</p>
                                        </div>



                                        <div class=" col-6 ">
                                            <p>Nationality:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->nationality }}</p>
                                        </div>


                                        <div class=" col-6 ">
                                            <p>Sex:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->sex }}</p>
                                        </div>

                                        <div class=" col-6 ">
                                            <p>Academic qualification:</p>
                                        </div>
                                        <div class=" col-6 ">
                                            <p>{{ $users->employeedetails->academic }}</p>
                                        </div>



                                    </div>
                                </div>

                        </div>
                    </div>
                    </div>
                </div>
            </form>  

        @endsection

        @push('js')

        @endpush