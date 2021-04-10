@include('teacher.header')
<?php    
    if(Session::get('attendance_status'))
    { 
        echo '<div class="loader"></div>';
        echo "<script type='text/javascript'>
        swal('Error', 'Your attendance has already been marked for today.', 'error');
        </script>";
    }
?>
<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
      @include('teacher.sidebar')
    </div>
      
    <div class="main-panel">
      <!-- Navbar -->
        @include('teacher.navbar')
      <!-- End Navbar -->
      <div class="content">
            <div class="main main-raised">
                <div class="container">
                    <div class="section text-center headerS">
                        <h2 class="title-header" style="color: purple;">Daily Day Sheet Maintenance</h2>
                        <h4 class="title-header"  style="color: purple;">This Sheet will reported to Admin</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="back-icon"><a href="" />
                        <span class="material-icons">fast_rewind</span></a>
                    </div>     -->
                    <div class="col-md-8 daily-sheet">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title title-header" style="text-align:center;"> Your Sheet for Today</h4>
                                <p class="card-category title-header" style="text-align:center;"> Access to Admin</p>
                            </div>
                            <div class="card-body">
                                <form  action ="{{ URL:: to('update-daily-sheet') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox" name="Present"><span class="toggle" style="margin-left: 124px;"></span>
                                                        <h4 style="margin-left: 77px; margin-top: 12px">Today's Attendance</h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Select Class</label>
                                                <select class="form-control" name="standard" id="standard" required>
                                                    <option value="">Standard</option>
                                                    <option value="1">1st</option>
                                                    <option value="2">2nd</option>
                                                    <option value="3">3rd</option>
                                                    <option value="4">4th</option>
                                                    <option value="5">5th</option>
                                                    <option value="6">6th</option>
                                                    <option value="7">7th</option>
                                                    <option value="8">8th</option>
                                                    <option value="9">9th</option>
                                                    <option value="10">10th</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Subject </label>
                                                <input name="subject" class="form-control schedule" type="text" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Topic</label>
                                                <input name="topic" class="form-control schedule" type="text" value="" required />
                                            </div>
                                        </div>
                                    </div> 

                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </form>
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