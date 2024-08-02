 @extends('layouts.app')

@section('content')

		<section class="events-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Upcoming Events</h2>
					</div>
				</div>
			</div>
		</section>

		<section class="events-search-filter">
			<div class="container">
				<div class="row">
					<div class="section-content clearfix">
						<div class="col-sm-6 col-md-3">
							<label>Keyword</label>
							<input type="text" placeholder="Type event keyword here"/>
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Date</label>
							<input type="text" class="datepicker" >
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Event Categories</label>
							<select class="selectpicker dropdown">
								<option>Select Categories</option>
								<option>Academics</option>
								<option>Sports</option>
								<option>Music</option>
								<option>Research</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-3">
							<label></label>
							<input class="hvr-push" type="submit" value="Search Event"/>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="events-list">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-1.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">AUH Library Research with Sarah Moya</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 16, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-2.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Workshop Viola with Mrs. Angelina</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 15, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-3.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Yoga Training with Mrs. Emily Foster</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 20, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-4.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Cheerleaders Auditions AUH with NFL</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 12, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Parking Hall
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-5.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Basketball Competition AUH vs Kuliah</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 22, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Basket Stadium
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-6.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Web Design Workshop with Simon Sinek</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 23, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Multipurpose
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-7.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Biologycal Research Harvard University</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 24, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-8.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">English Free Class Speaking and Reading</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 25, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 2nd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-1.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">AUH Library Research with Sarah Moya</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 16, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-2.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Workshop Viola with Mrs. Angelina</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 15, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-3.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Yoga Training with Mrs. Emily Foster</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 20, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-4.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Cheerleaders Auditions AUH with NFL</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 12, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Parking Hall
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-5.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Basketball Competition AUH vs Kuliah</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 22, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Basket Stadium
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-6.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Web Design Workshop with Simon Sinek</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 23, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Multipurpose
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-7.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">Biologycal Research Harvard University</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 24, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="/events-single">
									<img src="images/events-item-img-8.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="/events-single">English Free Class Speaking and Reading</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 25, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										AUH Building 2nd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="/events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="events-load-more">
					<span>Load More <i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>

		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="newsletter-content">
						<div class="col-md-6">
							<h2><strong>Get The Latest News From AUH!</strong> Join our newsletter now</h2>
						</div>
						<div class="col-md-6">
							<input type="email" placeholder="Enter your e-mail address">
							<input class="hvr-push" type="submit" value="Subscribe">
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
