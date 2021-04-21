@include('teacher.header')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body>
  <div class="page-header header-filter"
    style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login loginForm">
            {{-- <form> --}}
            {{ csrf_field() }}
            {{-- <input type="hidden" value="{{csrf_field()}}" id="token" /> --}}
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Login </h4><br>
              <h4>1-School App</h4>
              <strong>Track, Schedule, Notify</strong>
            </div><br><br>
            <div class="card-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Username">
              </div><br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
            </div>
            <div class="footer">
              <button type="submit" class="btn btn-primary" id="submit" style=" margin-left: 176px;">Get
                Started</button>
            </div>
            {{-- </form> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
			// function login(e){

			
				$("#submit").click(function(e){
					var email = $('#email').val();
					var pwd = $('#password').val();
					 
					// e.preventDefault();

					if(!email || !pwd){
						swal('', 'Sorry, Please enter both Email & Password', 'error');
            $(".loader").css("display", "none");
            return false;
					}		
					$.ajax({
						url: '{{ URL:: to('user-cred') }}',
						type: 'POST',
						// dataType:'JSON',
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						data: {'email':email,'pwd':pwd},
						success: function(data){
							// alert(data)
							if(data==404){
								
								swal('', 'Sorry, This email is not found,Try again', 'error');
                $(".loader").css("display", "none");
							}else if(data==401){
								
								swal('', 'Sorry, Incorrect Credentials,Try again', 'error');
               $(".loader").css("display", "none");
							}else if(data==200){
								window.location.href = '{{ URL:: to('/home') }}';
                exit();
							}
						}
					});
				});
			// }
		});
		
  </script>
</body>

</html>