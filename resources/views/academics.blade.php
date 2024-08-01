@extends('layouts.app')

@section('content')


		<section class="academics-hero">
			<div class="container">
				<div class="hero-content">
					<div class="hero-caption">
						<h2>Academic Calendar</h2>
						<p>2017 - 2018</p>
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

		<section class="academics-content">
			<div class="container">
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>July <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>August <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>September <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>October <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>November <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>December <span>2017</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>January <span>2018</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>February <span>2018</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<div class="row">
					<div class="academic-month">
						<div class="row">
							<h2>March <span>2018</span></h2>
							<div class="calendar col-sm-5 col-md-4">
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
							<div class="calendar-note col-sm-7 col-md-8">
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
				</div>
				<a href="#" class="academics-load-more">
					<span>Load More <i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>
		<section class="academics-pdf-download">
			<a href="#" class="join hvr-push">Download as PDF</a>
		</section>
@endsection

