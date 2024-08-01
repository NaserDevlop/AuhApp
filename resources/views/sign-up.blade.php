 @extends('layouts.app')

@section('content')
		<section class="sign-up-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Let's Join With Us!</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diam nonummy nibh euismod</p>
					</div>
				</div>
			</div>
		</section>

		<section class="sign-up-form">
			<div class="container">
				<div class="section-content">
					<h3>Please Fill The Form Below</h3>
					<form>
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="">
						</div>
						<input class="hvr-push" type="submit" value="Sign Up">
						<p class="terms">By clicking <a href="#">Sign Up</a>, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our Cookie Use</p>
					</form>
				</div>
			</div>
		</section>

@endsection

