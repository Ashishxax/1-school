@include('teacher.header')
<body>
	<div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-md-6 ml-auto mr-auto">
			<div class="card card-login loginForm">
				<form action="/login" method="post">
				@csrf
				<div class="card-header card-header-primary text-center">
					<h4 class="card-title">Login </h4><br>
					<h4>1-School  App</h4>
					<strong>Track, Schedule, Notify</strong>
				</div><br><br>
				<div class="card-body">
					<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="material-icons">face</i>
						</span>
					</div>
					<input type="text" class="form-control" name="email" placeholder="Username" required="required">
					</div><br>
					<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="material-icons">lock_outline</i>
						</span>
					</div>
					<input type="password" class="form-control" name="password" placeholder="Password" required="required">
					</div>
				</div>
				<div class="footer">
					<button type="submit" class="btn btn-primary btn-link btn-wd btn-lg" style=" margin-left: 176px;">Get Started</button>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>