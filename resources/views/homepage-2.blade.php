 @extends('layouts.app')

@section('content')

		<section class="hero-2">
			<div class="container">
				<div class="row">
					<div class="hero-content">
						<h2>Welcome to <span>AUH</span></h2>
						<a href="#" data-featherlight="#content-video">
							<img src="images/play-btn.png" alt="image">
						</a>
						<div id="content-video" class="gallery-lightbox">
							<iframe width="640" height="360" src="https://www.youtube.com/embed/ctvlUvN6wSE?rel=0&amp;autoplay=1&amp;controls=1&amp;showinfo=0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="featured-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="box-1">
							<a href="#">
								Student <span>Events</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-2">
							<a href="#">
								Classroom <span>Stories</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-3">
							<a href="#">
								Teachers <span>Profile</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="welcome">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7">
						<div class="welcome-content">
							<h3><span>Grandmaster Talk</span> EDUCATION IS THE MOST POWERFUL WEAPON</h3>
							<p>Our students are talented, hard-working and full of good ideas. We encourage and empower them to bring their ideas to life. Hands-on opportunities are what we're all about. Our students are busy doing things that matter. Take a look at the opportunities you'll have at the University. The task of the modern educator is not to cut down jungles, but to irrigate deserts.</p>
							<img src="images/signature.png" alt="signature">
							<strong class="author">Katherine Gonzalez <span>AUH Grandmaster</span></strong>
						</div>
					</div>

					<div class="col-sm-5 col-md-5">
						<div class="welcome-img">
							<img src="images/welcome-img-1.jpg" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="we-have-faith">
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h3>We have faith in our student future</h3>
						<p>Our students are talented, hard-working and full of good ideas. We encourage and empower them to bring their ideas to life. Hands-on opportunities are what we're all about.</p>
					</div>
					<div class="section-content">
						<div class="col-sm-6 col-md-3">
							<img src="images/we-have-faith-img-1.png" alt="img">
							<h4>Empower</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="images/we-have-faith-img-2.png" alt="img">
							<h4>Engage</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="images/we-have-faith-img-3.png" alt="img">
							<h4>Graduation</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="images/we-have-faith-img-4.png" alt="img">
							<h4>Awarding</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="call-to-action">
			<div class="container">
				<div class="row">
					<div class="call-to-action-content clearfix">
						<div class="col-md-9">
							<img src="images/call-to-action-img.png" alt="image">
							<p><strong>Our students are talented,</strong>passionate, hard-working and full of good ideas.</p>
						</div>
						<div class="col-md-3">
							<a href="#" class="hvr-push">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="academic-calendar">
			<div class="container">
				<div class="row">
					<div class="academic-calendar-header">
						<h2>Academic Calendar</h2>
						<p>Our students are talented, hard-working and full of good ideas. We encourage and empower them to bring their ideas to life. Hands-on opportunities are what we're all about. <a href="#">View Full Calendar</a></p>
					</div>
				</div>

				<div class="row">

				<ul class="nav nav-year">
					<li class="active"><a href="#yr2017" data-toggle="tab">2017</a></li>
					<li><a href="#yr2018" data-toggle="tab">2018</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active clearfix" id="yr2017">

						<div class="col-md-2">
							<div class="calendar-nav">
								<h3 class="year-title">
									<a href="#" class="yr-prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
									2017
									<a href="#" class="yr-next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</h3>
								<ul class="nav nav-month">
									<li class="active"><a href="#jan2017" data-toggle="tab">January</a></li>
									<li><a href="#feb2017" data-toggle="tab">February</a></li>
									<li><a href="#mar2017" data-toggle="tab">March</a></li>
									<li><a href="#apr2017" data-toggle="tab">April</a></li>
									<li><a href="#may2017" data-toggle="tab">May</a></li>
									<li><a href="#jun2017" data-toggle="tab">June</a></li>
									<li><a href="#jul2017" data-toggle="tab">July</a></li>
									<li><a href="#aug2017" data-toggle="tab">August</a></li>
									<li><a href="#sep2017" data-toggle="tab">September</a></li>
									<li><a href="#oct2017" data-toggle="tab">October</a></li>
									<li><a href="#nov2017" data-toggle="tab">November</a></li>
									<li><a href="#dec2017" data-toggle="tab">December</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-10">
							<div class="tab-content tab-month clearfix">
								<div class="tab-pane active" id="jan2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 January</span> 1st AUH Examination</li>
												<li><span>7 - 12 January</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 January</span> National Education Day</li>
												<li><span>18 - 20 January</span> OSIS Activity</li>
												<li><span>21 - 31 January</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="feb2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4-end">28</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 February</span> 1st AUH Examination</li>
												<li><span>7 - 12 February</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 February</span> National Education Day</li>
												<li><span>18 - 20 February</span> OSIS Activity</li>
												<li><span>21 - 18 February</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="mar2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 March</span> 1st AUH Examination</li>
												<li><span>7 - 12 March</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 March</span> National Education Day</li>
												<li><span>18 - 20 March</span> OSIS Activity</li>
												<li><span>21 - 31 March</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="apr2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 April</span> 1st AUH Examination</li>
												<li><span>7 - 12 April</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 April</span> National Education Day</li>
												<li><span>18 - 20 April</span> OSIS Activity</li>
												<li><span>21 - 30 April</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="may2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 May</span> 1st AUH Examination</li>
												<li><span>7 - 12 May</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 May</span> National Education Day</li>
												<li><span>18 - 20 May</span> OSIS Activity</li>
												<li><span>21 - 31 May</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jun2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 June</span> 1st AUH Examination</li>
												<li><span>7 - 12 June</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 June</span> National Education Day</li>
												<li><span>18 - 20 June</span> OSIS Activity</li>
												<li><span>21 - 31 June</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jul2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 July</span> 1st AUH Examination</li>
												<li><span>7 - 12 July</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 July</span> National Education Day</li>
												<li><span>18 - 20 July</span> OSIS Activity</li>
												<li><span>21 - 31 July</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="aug2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 August</span> 1st AUH Examination</li>
												<li><span>7 - 12 August</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 August</span> National Education Day</li>
												<li><span>18 - 20 August</span> OSIS Activity</li>
												<li><span>21 - 31 August</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="sep2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 September</span> 1st AUH Examination</li>
												<li><span>7 - 12 September</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 September</span> National Education Day</li>
												<li><span>18 - 20 September</span> OSIS Activity</li>
												<li><span>21 - 31 September</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="oct2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">25</li>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 October</span> 1st AUH Examination</li>
												<li><span>7 - 12 October</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 October</span> National Education Day</li>
												<li><span>18 - 20 October</span> OSIS Activity</li>
												<li><span>21 - 31 October</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="nov2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 November</span> 1st AUH Examination</li>
												<li><span>7 - 12 November</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 November</span> National Education Day</li>
												<li><span>18 - 20 November</span> OSIS Activity</li>
												<li><span>21 - 30 November</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="dec2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-start">15</li>
													<li class="event-5-end">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 December</span> 1st AUH Examination</li>
												<li><span>7 - 12 December</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 December</span> National Education Day</li>
												<li><span>18 - 20 December</span> OSIS Activity</li>
												<li><span>21 - 31 December</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="yr2018">
						<div class="col-md-2">
							<div class="calendar-nav">
								<h3 class="year-title">
									<a href="#" class="yr-prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
									2018
									<a href="#" class="yr-next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</h3>
								<ul class="nav nav-month">
									<li class="active"><a href="#jan2018" data-toggle="tab">January</a></li>
									<li><a href="#feb2018" data-toggle="tab">February</a></li>
									<li><a href="#mar2018" data-toggle="tab">March</a></li>
									<li><a href="#apr2018" data-toggle="tab">April</a></li>
									<li><a href="#may2018" data-toggle="tab">May</a></li>
									<li><a href="#jun2018" data-toggle="tab">June</a></li>
									<li><a href="#jul2018" data-toggle="tab">July</a></li>
									<li><a href="#aug2018" data-toggle="tab">August</a></li>
									<li><a href="#sep2018" data-toggle="tab">September</a></li>
									<li><a href="#oct2018" data-toggle="tab">October</a></li>
									<li><a href="#nov2018" data-toggle="tab">November</a></li>
									<li><a href="#dec2018" data-toggle="tab">December</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-10">
							<div class="tab-content tab-month">
								<div class="tab-pane active" id="jan2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 January</span> 1st AUH Examination</li>
												<li><span>7 - 12 January</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 January</span> National Education Day</li>
												<li><span>18 - 20 January</span> OSIS Activity</li>
												<li><span>21 - 31 January</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="feb2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4-end">28</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 February</span> 1st AUH Examination</li>
												<li><span>7 - 12 February</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 February</span> National Education Day</li>
												<li><span>18 - 20 February</span> OSIS Activity</li>
												<li><span>21 - 18 February</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="mar2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 March</span> 1st AUH Examination</li>
												<li><span>7 - 12 March</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 March</span> National Education Day</li>
												<li><span>18 - 20 March</span> OSIS Activity</li>
												<li><span>21 - 31 March</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="apr2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 April</span> 1st AUH Examination</li>
												<li><span>7 - 12 April</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 April</span> National Education Day</li>
												<li><span>18 - 20 April</span> OSIS Activity</li>
												<li><span>21 - 30 April</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="may2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 May</span> 1st AUH Examination</li>
												<li><span>7 - 12 May</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 May</span> National Education Day</li>
												<li><span>18 - 20 May</span> OSIS Activity</li>
												<li><span>21 - 31 May</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jun2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 June</span> 1st AUH Examination</li>
												<li><span>7 - 12 June</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 June</span> National Education Day</li>
												<li><span>18 - 20 June</span> OSIS Activity</li>
												<li><span>21 - 31 June</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jul2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">25</li>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="col-sm-7">
											<div class="calendar-note">
												<h3>Explanation</h3>
												<ul>
													<li><span>1 - 4 July</span> 1st AUH Examination</li>
													<li><span>7 - 12 July</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
													<li><span>15 - 16 July</span> National Education Day</li>
													<li><span>18 - 20 July</span> OSIS Activity</li>
													<li><span>21 - 31 July</span> Semester Break</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="aug2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 August</span> 1st AUH Examination</li>
												<li><span>7 - 12 August</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 August</span> National Education Day</li>
												<li><span>18 - 20 August</span> OSIS Activity</li>
												<li><span>21 - 31 August</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="sep2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 September</span> 1st AUH Examination</li>
												<li><span>7 - 12 September</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 September</span> National Education Day</li>
												<li><span>18 - 20 September</span> OSIS Activity</li>
												<li><span>21 - 30 September</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="oct2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 October</span> 1st AUH Examination</li>
												<li><span>7 - 12 October</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 October</span> National Education Day</li>
												<li><span>18 - 20 October</span> OSIS Activity</li>
												<li><span>21 - 31 October</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="nov2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 November</span> 1st AUH Examination</li>
												<li><span>7 - 12 November</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 November</span> National Education Day</li>
												<li><span>18 - 20 November</span> OSIS Activity</li>
												<li><span>21 - 30 November</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="dec2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-start">15</li>
													<li class="event-5-end">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 December</span> 1st AUH Examination</li>
												<li><span>7 - 12 December</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 December</span> National Education Day</li>
												<li><span>18 - 20 December</span> OSIS Activity</li>
												<li><span>21 - 31 December</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>

		<section class="achievements">
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h2>OUR TEACHERS AND STUDENTS ACHIEVEMENTS</h2>
					</div>
				</div>
				<div class="row">
					<div class="section-content">
						<div class="col-sm-3">
							<h3 class="home-count">1954</h3>
							<p>Year Founded</p>
						</div>
						<div class="col-sm-3">
							<h3 class="home-count">934</h3>
							<p>Certified Teachers</p>
						</div>
						<div class="col-sm-3">
							<h3 class="home-count">65409</h3>
							<p>Graduated Students</p>
						</div>
						<div class="col-sm-3">
							<h3 class="home-count">289</h3>
							<p>Awards Winner</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="featured-news">
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h2>Our Latest News</h2>
					</div>
				</div>
				<div class="row">
					<div class="section-content">
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="#"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin AUH</span></a>
									</div>
									<div class="col-md-4">
										<span>Aug 15</span>
									</div>
								</div>
								<div class="item-image">
									<a href="#">
										<img src="images/latest-news-img-1.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="#">Students were on a trip Istanbul, Turkey</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
									<a href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="#"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin AUH</span></a>
									</div>
									<div class="col-md-4">
										<span>Aug 15</span>
									</div>
								</div>
								<div class="item-image">
									<a href="#">
										<img src="images/latest-news-img-2.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="#">Fall Sports Practices, Meeting in August</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
									<a href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="#"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin AUH</span></a>
									</div>
									<div class="col-md-4">
										<span>Aug 15</span>
									</div>
								</div>
								<div class="item-image">
									<a href="#">
										<img src="images/latest-news-img-3.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="#">Apply for Community Scholarships</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
									<a href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="#"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin AUH</span></a>
									</div>
									<div class="col-md-4">
										<span>Aug 15</span>
									</div>
								</div>
								<div class="item-image">
									<a href="#">
										<img src="images/latest-news-img-4.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="#">Jobs, Career Presentation to Coincide with Conferences</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
									<a href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="featured-gallery">
			<div class="row">
				<div class="col-sm-6">
					<a href="#" data-featherlight="#content-1">
						<img src="images/gallery-img-1.jpg" alt="image">
					</a>
					<div id="content-1" class="gallery-lightbox">
						<img src="images/gallery-img-1.jpg" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="images/gallery-img-2.jpg" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="images/gallery-img-2.jpg" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="images/gallery-img-3.jpg" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="images/gallery-img-3.jpg" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-4">
						<img src="images/gallery-img-4.jpg" alt="image">
					</a>
					<div id="content-4" class="gallery-lightbox">
						<img src="images/gallery-img-4.jpg" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-5">
						<img src="images/gallery-img-5.jpg" alt="image">
					</a>
					<div id="content-5" class="gallery-lightbox">
						<img src="images/gallery-img-5.jpg" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="featured-video">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2>Watch Our Video</h2>
						<p>From the teachers, to the assistants, to the students, there is such a family atmosphere that is perfect for nurturing academic ability. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<a href="#" class="primary-link hvr-push">Learn More</a>
					</div>
					<div class="col-sm-6">
						<div class="content-video">
							<a href="#">
								<img src="images/featured-video-img.jpg" alt="image">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tab-content">
							<div class="tab-pane" id="testimonial-1">
								"Duis sed odio commodo, laoreet dolor ut, dictum massa. Praesent tristique felis vel auctor molestie. Donec cursus tellus eu metus tempor pretium. Nunc posuere eget felis sed vestibulum. Donec ac erat vel elit lobortis egestas."
							</div>
							<div class="tab-pane" id="testimonial-2">
								"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel nibh velit. Nam varius lectus et tortor placerat ultrices. Curabitur quis ipsum lacinia, dictum tortor ac, ornare sem. Fusce iaculis urna sit amet quam posuere molestie. Morbi vel feugiat orci, eu scelerisque libero. Suspendisse vitae sem ullamcorper, elementum mi non, mattis elit."
							</div>
							<div class="tab-pane  active" id="testimonial-3">
								"The teaching, in my opinion, is the best that anyone can hope for. AUH High School staff provide an environment in which students are able to reach their full potential. As well as this, I felt constantly challenged to push myself to exceed what is expected. I have no doubt that the person I become is due to my time spent here and that the last six years have been the best of my life."
							</div>
							<div class="tab-pane" id="testimonial-4">
								"Vivamus quam ipsum, ullamcorper et eros quis, convallis aliquam elit. Ut viverra purus vel tellus eleifend rhoncus. Ut ut nisi sed dolor porttitor hendrerit. Proin eleifend mauris at augue auctor, quis gravida turpis pulvinar."
							</div>
							<div class="tab-pane" id="testimonial-5">
								"Nam interdum consectetur libero, non imperdiet mi semper vitae. Donec sapien libero, elementum et accumsan gravida, condimentum in arcu. Donec lobortis est nibh, vel hendrerit augue varius ut."
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<ul class="nav">
							<li>
								<a href="#testimonial-1" data-toggle="tab">
									<img src="images/testimonial-img-1.jpg" alt="image">
									<strong>Douglas Ortega</strong>
									<span>Student of Sociology</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-2" data-toggle="tab">
									<img src="images/testimonial-img-2.jpg" alt="image">
									<strong>Marie Nichols</strong>
									<span>Student of Sociology</span>
								</a>
							</li>
							<li class="active">
								<a href="#testimonial-3" data-toggle="tab">
									<img src="images/testimonial-img-3.jpg" alt="image">
									<strong>Cynthia Nelson</strong>
									<span>Student of Science</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-4" data-toggle="tab">
									<img src="images/testimonial-img-4.jpg" alt="image">
									<strong>Michelle Jensen</strong>
									<span>Student of Sociology</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-5" data-toggle="tab">
									<img src="images/testimonial-img-5.jpg" alt="image">
									<strong>Benjamin Fox</strong>
									<span>Former Student</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="sponsor">
			<div class="container">
				<div class="row">
					<div class="sponsor-logo">
						<div class="col-sm-3">
							<img src="images/sponsor-logo-1.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-2.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-3.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-4.png" alt="image">
						</div>
					</div>
				</div>
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
