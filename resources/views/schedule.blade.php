 @extends('layouts.app')

@section('content')
		<section class="schedule-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Lessons Schedule</h2>
						<a href="#" class="hvr-push">Download as PDF</a>
					</div>
				</div>
			</div>
		</section>

		<section class="search-bar">
			<div class="container">
				<div class="row">
					<input type="text" placeholder="Type any keyword and enter to search">
				</div>
			</div>
		</section>

		<div class="schedule-content">
			<div class="container">
				<div class="row">
					<div class="schedule-table-filter">
						<select class="selectpicker dropdown">
							<option>Class XI</option>
							<option>Class XII</option>
							<option>Class XIII</option>
						</select>
						<select class="selectpicker dropdown">
							<option>July 2017</option>
							<option>August 2017</option>
							<option>September 2017</option>
						</select>
					</div>
					<div class="schedule-table-heading">
						<ul>
							<li><img src="images/schedule-clock.png" alt="images"></li>
							<li>Monday</li>
							<li>Tuesday</li>
							<li>Wednesday</li>
							<li>Thursday</li>
							<li>Friday</li>
						</ul>
					</div>
					<div class="schedule-table-content">
						<ul>
							<li>9am</li>
							<li class="math"><span>9am-10am <strong>Mathemathics</strong></span></li>
							<li class="biology"><span>9am-10am <strong>Biology</strong></span></li>
							<li class="design"><span>9am-10am <strong>Design</strong></span></li>
							<li class="english"><span>9am-10am <strong>English</strong></span></li>
							<li class="psychology"><span>9am-10am <strong>Psychology</strong></span></li>
						</ul>
						<ul>
							<li>10am</li>
							<li class="english"><span>10am-11am <strong>English</strong></span></li>
							<li class="design"><span>10am-11am <strong>Design</strong></span></li>
							<li class="math"><span>10am-11am <strong>Mathemathics</strong></span></li>
							<li class="psychology"><span>10am-11am <strong>Psychology</strong></span></li>
							<li class="biology"><span>10am-11am <strong>Biology</strong></span></li>
						</ul>
						<ul>
							<li>11am</li>
							<li class="psychology"><span>11am-12pm <strong>Psychology</strong></span></li>
							<li class="english"><span>11am-12pm <strong>English</strong></span></li>
							<li class="biology"><span>11am-12pm <strong>Biology</strong></span></li>
							<li class="math"><span>11am-12pm <strong>Mathemathics</strong></span></li>
							<li class="design"><span>11am-12pm <strong>Design</strong></span></li>
						</ul>
						<ul>
							<li>12pm</li>
							<li class="day-5 break"><span>12pm-1pm <strong>Lunch Break</strong></span></li>
						</ul>
						<ul>
							<li>1pm</li>
							<li class="design"><span>1pm-2pm <strong>Design</strong></span></li>
							<li class="math"><span>1pm-2pm <strong>Mathemathics</strong></span></li>
							<li class="english"><span>1pm-2pm <strong>English</strong></span></li>
							<li class="biology"><span>1pm-2pm <strong>Biology</strong></span></li>
							<li class="psychology"><span>1pm-2pm <strong>Psychology</strong></span></li>
						</ul>
						<ul>
							<li>2pm</li>
							<li class="math"><span>2pm-3pm <strong>Mathemathics</strong></span></li>
							<li class="biology"><span>2pm-3pm <strong>Biology</strong></span></li>
							<li class="design"><span>2pm-3pm <strong>Design</strong></span></li>
							<li class="english"><span>2pm-3pm <strong>English</strong></span></li>
							<li class="psychology"><span>2pm-3pm <strong>Psychology</strong></span></li>
						</ul>
						<ul>
							<li>3pm</li>
							<li class="english"><span>3pm-4pm <strong>English</strong></span></li>
							<li class="design"><span>3pm-4pm <strong>Design</strong></span></li>
							<li class="math"><span>3pm-4pm <strong>Mathemathics</strong></span></li>
							<li class="psychology"><span>3pm-4pm <strong>Psychology</strong></span></li>
							<li class="biology"><span>3pm-4pm <strong>Biology</strong></span></li>
						</ul>
						<ul>
							<li>4pm</li>
							<li class="psychology"><span>4pm-5pm <strong>Psychology</strong></span></li>
							<li class="english"><span>4pm-5pm <strong>English</strong></span></li>
							<li class="biology"><span>4pm-5pm <strong>Biology</strong></span></li>
							<li class="math"><span>4pm-5pm <strong>Mathemathics</strong></span></li>
							<li class="design"><span>4pm-5pm <strong>Design</strong></span></li>
						</ul>
					</div>
					<div class="schedule-table-content-mobile">
						<ul>
							<li>Monday</li>
							<li class="math"><span>9am-10am <strong>Mathemathics</strong></span></li>
							<li class="english"><span>10am-11am <strong>English</strong></span></li>
							<li class="psychology"><span>11am-12pm <strong>Psychology</strong></span></li>
							<li class="break"><span>12pm-1pm <strong>Lunch Break</strong></span></li>
							<li class="design"><span>1pm-2pm <strong>Design</strong></span></li>
							<li class="math"><span>2pm-3pm <strong>Mathemathics</strong></span></li>
							<li class="english"><span>3pm-4pm <strong>English</strong></span></li>
							<li class="psychology"><span>4pm-5pm <strong>Psychology</strong></span></li>
						</ul>
						<ul>
							<li>Tuesday</li>
							<li class="biology"><span>9am-10am <strong>Biology</strong></span></li>
							<li class="design"><span>10am-11am <strong>Design</strong></span></li>
							<li class="english"><span>11am-12pm <strong>English</strong></span></li>
							<li class="break"><span>12pm-1pm <strong>Lunch Break</strong></span></li>
							<li class="math"><span>1pm-2pm <strong>Mathemathics</strong></span></li>
							<li class="biology"><span>2pm-3pm <strong>Biology</strong></span></li>
							<li class="design"><span>3pm-4pm <strong>Design</strong></span></li>
							<li class="english"><span>4pm-5pm <strong>English</strong></span></li>
						</ul>
						<ul>
							<li>Wednesday</li>
							<li class="design"><span>9am-10am <strong>Design</strong></span></li>
							<li class="math"><span>10am-11am <strong>Mathemathics</strong></span></li>
							<li class="biology"><span>11am-12pm <strong>Biology</strong></span></li>
							<li class="break"><span>12pm-1pm <strong>Lunch Break</strong></span></li>
							<li class="english"><span>1pm-2pm <strong>English</strong></span></li>
							<li class="design"><span>2pm-3pm <strong>Design</strong></span></li>
							<li class="math"><span>3pm-4pm <strong>Mathemathics</strong></span></li>
							<li class="biology"><span>4pm-5pm <strong>Biology</strong></span></li>
						</ul>
						<ul>
							<li>Thursday</li>
							<li class="english"><span>9am-10am <strong>English</strong></span></li>
							<li class="psychology"><span>10am-11am <strong>Psychology</strong></span></li>
							<li class="math"><span>11am-12pm <strong>Mathemathics</strong></span></li>
							<li class="break"><span>12pm-1pm <strong>Lunch Break</strong></span></li>
							<li class="biology"><span>1pm-2pm <strong>Biology</strong></span></li>
							<li class="english"><span>2pm-3pm <strong>English</strong></span></li>
							<li class="psychology"><span>3pm-4pm <strong>Psychology</strong></span></li>
							<li class="math"><span>4pm-5pm <strong>Mathemathics</strong></span></li>
						</ul>
						<ul>
							<li>Friday</li>
							<li class="psychology"><span>9am-10am <strong>Psychology</strong></span></li>
							<li class="biology"><span>10am-11am <strong>Biology</strong></span></li>
							<li class="design"><span>11am-12pm <strong>Design</strong></span></li>
							<li class="psychology"><span>1pm-2pm <strong>Psychology</strong></span></li>
							<li class="psychology"><span>2pm-3pm <strong>Psychology</strong></span></li>
							<li class="biology"><span>3pm-4pm <strong>Biology</strong></span></li>
							<li class="design"><span>4pm-5pm <strong>Design</strong></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<section class="academics-pdf-download">
			<a href="#" class="join hvr-push">Download as PDF</a>
		</section>


 
