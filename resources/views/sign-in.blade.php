 @extends('layouts.app')

@section('content')
		<section class="sign-in-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Welcome Back!</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diam nonummy nibh euismod</p>
					</div>
				</div>
			</div>
		</section>

		<section class="sign-in-form">
			<div class="container">
				<div class="section-content">
					<h3>Please Fill The Form Below</h3>
					<form>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="">
						<a href="#" class="forgot-password">Forget Password?</a>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Keep me logged in
							</label>
						</div>
						<input class="hvr-push" type="submit" value="Log in">
					</form>
				</div>
			</div>
		</section>

@endsection
