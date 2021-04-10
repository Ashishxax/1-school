@include('teacher.header')
<?php    
    if(Session::get('schedule_status'))
    { 
        echo '<div class="loader"></div>';
        echo "<script type='text/javascript'>
        swal('Error', 'Today Schedule already marked for this class', 'error');
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
                    <div class="container">
	                    <div class="row">
		                    <div class="col-sm-8 col-sm-offset-2">
		                        <!--      Wizard container        -->
		                        <div class="wizard-container">
		                            <div class="card wizard-card" style="margin-left: 163px; margin-top:6px;" id="wizard">
		                                <form  action ="{{ URL:: to('update-schedule') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="wizard-header">
		                        	            <h3 class="wizard-title title-header" style="color:purple;">Schedule</h3><br>
									            <h5 class="title-header" style="color:purple;">Map Classes With Time Table</h5>
                                            </div>
                                            <div class="tab-content">
		                                        <div class="tab-pane" id="details">
		                            	            <div class="row gridDiv">
		                                	            <div class="col-sm-12">
                                                            <div class="form-group label-floating">
		                                        	            <label class="control-label">Class</label>
                                                                <select class="form-control" name="class" required>
                                                                    <option disabled="" selected="" value=""></option>
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
                                                        <div class="col-sm-6">
                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">10 AM - 11 AM </label>
                                                                    <input name="10-11" type="text" class="form-control schedule" required>
                                                            </div>
                                                            <!-- 3 -->
                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">12 PM - 1 PM</label>
                                                                    <input name="12-1" type="text" class="form-control schedule" required>
                                                            </div>
                                                            <!-- 5 -->
                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">2 PM - 3 PM</label>
                                                                    <input name="2-3" type="text" class="form-control schedule" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                                <!-- 2 -->
                                                                <div class="form-group label-floating">
                                                                      <label class="control-label">11 A M - 12 PM </label>
                                                                      <input name="11-12" type="text" class="form-control schedule" required>
                                                                </div>
                                                                <!-- 4 -->
                                                                <div class="form-group label-floating">
                                                                      <label class="control-label">1  PM - 2 PM</label>
                                                                      <input name="1-2" type="text" class="form-control schedule" required>
                                                                </div>
                                                                <!-- 6 -->
                                                                <div class="form-group label-floating">
                                                                      <label class="control-label">3 PM - 4 PM</label>
                                                                      <input name="3-4" type="text" class="form-control schedule" required>
                                                                </div>
                                                            </div>
                                                        </div>
		                            	            </div>
		                                        </div>
                                                <button type="submit" class="btn btn-primary pull-right" style="margin-top: -50px;margin-right: 49px;">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @include('teacher.footer')    
            </div>
        </div>
    </body>    