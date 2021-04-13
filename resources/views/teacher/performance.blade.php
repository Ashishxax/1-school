@include('teacher.header')

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white"
            data-image="{{asset('assets/img/sidebar-1.jpg')}}">
            @include('teacher.sidebar')
        </div>

        <div class="main-panel abcd">
            <!-- Navbar -->
            @include('teacher.navbar')
            <!-- End Navbar -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!--      Wizard container        -->
                        <div class="wizard-container-peformance">
                            <div class="card wizard-card performance-card" style="margin-top:6px;"
                                id="wizard">

                                <div class="wizard-header-performance">
                                    <h3 class="wizard-title title-header" style="color:#9c27b0;">Ashish Bhardwaj
                                    </h3>

                                </div>
                                <div class="wizard-navigation" style="padding-bottom: 30px;margin-top: -23px;">
                                    <ul class="nav nav-pills" id="myTab" role="tablist">
                                        <li class="nav-item activeA" style="width: 33.3333%;">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                role="tab" aria-controls="home" aria-selected="true">Performance</a>
                                        </li>
                                        <li class="nav-item activeA" style="width: 33.3333%;">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false">Score-Card</a>
                                        </li>
                                        <li class="nav-item activeA" style="width: 33.3333%;">
                                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2"
                                                role="tab" aria-controls="profile2" aria-selected="false">Profile</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <form action="{{ URL:: to('update-schedule') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row user" style="padding:15px;">

                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Test Name</label>
                                                            <input name="name" type="text" class="form-control"
                                                                placeholder="Mathematics">
                                                        </div>
                                                    </div>

                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Full Marks</label>
                                                            <input name="full_marks" type="text" class="form-control"
                                                                placeholder="100">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Obtained Marks</label>
                                                            <input name="obtained_marks" type="text"
                                                                class="form-control" placeholder="86">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Type of Test</label>
                                                            <input name="test_type" type="text" class="form-control"
                                                                placeholder="written">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary pull-right submit-btn"
                                                    style="margin-top: 50px;">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab" style="; padding: 39px 33px 9px;">
                                        {{-- <div class="card-header card-header-primary">
                                            <h4 class="card-title mt-0"> Last 5 Performance</h4>
                                            <p class="card-category"> Create New Record from Performance Tab</p>
                                        </div> --}}
                                        <div class="row profileRow">
                                            <div class="card-body lastperformance">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <th> Test</th>
                                                            <th> Obt. Marks</th>
                                                            <th> Full Marks</th>
                                                            <th> Type</th>
                                                            <th> Date</th>
                                                        </thead>
                                                        <tbody>

                                                            @for ($i=0; $i <5; $i++) <tr>
                                                                @php
                                                                $stu_data =
                                                                json_decode(@$performances[$i]->student_data,true);
                                                                @endphp
                                                                <td>{{$stu_data['test_name']}}</td>
                                                                <td>{{$stu_data['obtained_marks']}}</td>
                                                                <td>{{$stu_data['full_marks']}}</td>
                                                                <td>{{$stu_data['test_type']}}</td>
                                                                @if(!empty($performances[$i]->student_data))
                                                                <td>{{date('d-M-Y', strtotime($stu_data['date']))}}</td>
                                                                @else
                                                                <td>{{ $stu_data['date'] }} </td>
                                                                @endif
                                                                </tr>
                                                                @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="profile2" role="tabpanel"
                                        aria-labelledby="profile-tab2">
                                        <div class="row user" style="padding:15px;">
                                            <div class="col-sm-2 ml-auto">
                                                <h4>Profile Info</h4>
                                                <img src="{{asset('assets/img/faces/avatar.jpg')}}" alt="Profile Info"
                                                    class="img-raised rounded img-fluid">
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <h4>
                                                    {{ucwords($user['first_name'])}}</h4>
                                                <small><cite title="San Francisco, USA">{{$user['email']}} <i
                                                            class="glyphicon glyphicon-map-marker">
                                                        </i></cite></small>
                                                <p>
                                                    <i class="glyphicon glyphicon-envelope"></i>{{$user['phone']}}
                                                    <br />
                                                    <i class="glyphicon glyphicon-globe"></i>{{$user['address']}}<a
                                                        href="http://www.jquery2dotnet.com"></a>
                                                    <br />
                                                    <i class="glyphicon glyphicon-gift"></i>{{$user['city']}}</p>
                                                <!-- Split button -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">
                                                        Students</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('teacher.footer')
    </div>
    </div>
</body>