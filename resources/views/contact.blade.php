 @extends('layouts.app')

@section('content')

		<section class="contact-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Get in Touch with Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diam nonummy nibh euismod</p>
					</div>
				</div>
			</div>
		</section>

		<section class="contact-form">
			<div class="container">
				<div class="section-content clearfix">
					<h3>Send us a Message</h3>
					<form>
						<div class="row">
							<div class="form-group col-sm-6">
								<label>Full Name</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="form-group col-sm-6">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<label>Phone Number</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="form-group col-sm-6">
								<label>Company Name</label>
								<input type="email" class="form-control" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12">
								<label>Message</label>
								<textarea></textarea>
							</div>
						</div>
						<input class="hvr-push" type="submit" value="Send">
					</form>
				</div>
			</div>
		</section>

		<section class="contact-information">
			<div class="container">
				<div class="section-content">
					<h3>Contact Information</h3>
					<ul>
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							1307 Dolley Madison Blvd #4C, Mc Lean, VA, 22101
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:999555667">(999) 555 667</a> | <a href="tel:999544666">(999) 544 666</a>
						</li>
						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<a href="mailto:admin@AUH.sch">admin@AUH.sch</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

	@endsection
