@extends('layouts.masterlogin')
@section('content')
<div class="login-header login-caret">
		
		<div class="login-content">
			
			<p class="description">Dear user, log in to access the admin area!</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			
			<form method="post" action="login/login" role="form" >
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-block btn-login" value="Login In"/>
						
				</div>
				
				
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	

<!-- Bottom scripts (common) -->
	<script src="<?php echo asset('js/gsap/main-gsap.js')?>"></script>
	<script src="<?php echo asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')?>"></script>
	<script src="<?php echo asset('js/bootstrap.js')?>"></script>
	<script src="<?php echo asset('js/joinable.js')?>"></script>
	<script src="<?php echo asset('js/resizeable.js')?>"></script>
	<script src="<?php echo asset('js/neon-api.js')?>"></script>
	<script src="<?php echo asset('js/jquery.validate.min.js')?>"></script>
	<script src="<?php echo asset('js/neon-login.js')?>"></script>
	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo asset('js/neon-custom.js')?>"></script>
	<!-- Demo Settings -->
	<script src="<?php echo asset('js/neon-demo.js')?>"></script>
	
	@endsection
