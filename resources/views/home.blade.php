@extends('layout.frontbase')
@section("custom_css")

@stop



@section('content')
    	<!-- content begins -->
	<div class="container">
		<div class="row">
			<!-- for large screen -->
			<div class="col-lg-6 d-none d-lg-block">	
				<img class="img-fluid" src="/frontend/assets/img/Consulting.png" alt="consulting">
			</div>
			<div class="col-lg-6 text-center mtop-10 d-none d-lg-block">	
				<h2 class="mb-3 ">TAKE YOUR </h2>
				<h2 class="text-orange mb-3">INVESTMENT STRATEGY</h2>
				<h2 class="mb-3">TO THE NEXT LEVEL</h2>
				<P>A profitable platform with high ROI on investment</P>
				<a class="btn btn_purple" href="#">GET STARTED</a>
			</div>

			<!-- small screen -->
			<div class="col-lg-6 text-center text-light bg-head pb-5 pt-5 d-block d-lg-none">

				<h2 class="mb-3 ">TAKE YOUR </h2>
				<h2 class="text-orange mb-3">INVEST STRATEGY</h2>
				<h2 class="mb-3">TO THE NEXT LEVEL</h2>
				<P>A profitable platform with high ROI on investment</P>
				<a class="btn btn_purple" href="#">GET STARTED</a>
			</div>	
		</div>	

		<div class="row">	
			<div class="col-lg-7 mt-5 ">	
				<h2>WELCOME TO ALSTOMFX</h2>
				<h1 class="text-orange"> A FEW WORDS ABOUT US</h1>
				<h3>To ensure our investors keep getting their ROI on stipulated days, we've created a unique fund management system</h3>
				<p>Alstomfx - a pacesetting trading training institute.Our goal is to educate you with the relevant knowledge on the majors you need to know about Binary Options Trading, Forex Trading and cryptocurrency Trading which include blockchain technology. Hence our aim is to help bring into reality your desired dream of Financial Freedom by helping you create wealth through Binary Options, Forex and cryptocurrency trading education. Our services also include Funds management firm and investment consultant, helping you bring to reality your Dreams of Financial Freedom as it relates to our vision and mission for the African Youth.</p>
			</div>
			<div class="col-lg-5 m-0">	
				<img class="img-fluid" src="/frontend/assets/img/Finance.png" alt="consulting">
			</div>
		</div>
	</div>

	<!-- section 3 begins -->

	<div class="hero-image">
		<div class="text-center pt-5">
			<h3>HOW YOU CAN INVEST WITH US </h3>
			<h1 class="text-orange">MAKE MONEY MORE SMARTLY</h1>
			<P>	It’s a simple way to start invest. You don’t need a deep wallet to start behoof. Pick an amount you can afford, and build your behoof over time.</P>
		</div>
		<div class="container pb-5">
			<div class="row mtop-10">
				<div class="col-lg-3 text-center">
					<span class="d-inline-block p-4 bg-purple rounded-circle text-light">1</span>
					<span class="d-inline-block">SIGN UP</span>
				</div>
				<div class="col-lg-3 text-center">
					<span class="d-inline-block p-4 bg-purple rounded-circle text-light">2</span>
					<span class="d-inline-block">CHOOSE AN INVESTMENT PLAN</span>
				</div>
				<div class="col-lg-3 text-center">
					<span class="d-inline-block p-4 bg-purple rounded-circle text-light">3</span>
					<span class="d-inline-block">INVEST</span>
				</div>
				<div class="col-lg-3 text-center">
					<span class="d-inline-block p-4 bg-purple rounded-circle text-light">4</span>
					<span class="d-inline-block">GET RETURN ON INVESTMENT </span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- section 3 ends -->

		<!-- section 4 ends -->
	<div class="text-center pt-5">
		<h3>INVESTMENT OFFER</h3>
		<h2 class="text-orange">OUR INVESTMENT PLANS</h2>
		<p>Alstomfx provides a straightforward and transparent mechanism to attract investments and make more profits.</p>
	</div>
	<div class="container pb-5">
		<div class="row mt-5">
			<div class="col-lg-4 text-center ">
                <div class="bg-orange pt-4 pb-4">
                    <p class="text-purple h1">Gold</p>
                    <p>For 6 months</p>
                    <p>Min. : $200 Max. : $1000</p>
                    <a class="btn btn_purple" href="#">MAKE DEPOSIT</a>
                </div>
			</div>
			<div class="col-lg-4 text-center">
                <div class="bg-orange pt-4 pb-4">
                    <p class="text-purple h1">Diamond</p>
                    <p>For 6 months</p>
                    <p>Min. : $1001 Max. : $3000</p>
                    <a class="btn btn_purple" href="#">MAKE DEPOSIT</a>
                </div>
			</div>
			<div class="col-lg-4 text-center">
                <div class="bg-orange pt-4 pb-4">
                    <p class="text-purple h1">Platinum</p>
                    <p>For 6 months</p>
                    <p>Min. : $3001 Max. : $5000</p>
                    <a class="btn btn_purple" href="#">MAKE DEPOSIT</a>
                </div>
			</div>
		</div>
	</div>
	<!-- section 4 ends -->

	<!-- section 5 starts -->
	<div class="bg_phone">
		<div class="text-center text-light pt-5 pb-5">
			<h3>ENROLL FOR TRAINING</h3>
			<h1 class="h2 text-orange">Learn how to trade on your own from experts</h1>
			<div class="container">
				<h4>Our training is coming to a city near you soon, Meanwhile you can book a FREE one on one online training session  with one of our expert traders by clicking the button below</h4>
			</div>
			<a class="mt-3 btn btn_reg" href="#">Register</a>
		</div>
	</div>
	<!-- section 5 ends -->



	<!-- section 6 start -->
	<div class="container">
		<div class="mt-5 mb-5 text-center">
			<h3 class="text-center">For promotions and updates</h3>
			<h2 class="text-center text-orange">Subscribe to our newletter</h2>
			<div class=" d-flex justify-content-center">
					<form>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="Enter your email">
						</div>

						<div class="text-center">
						<a class="btn btn_purple" href="#">Subscribe</a>
						</div>
					</form>
			</div>		
		</div>
	</div>
	<!-- section 6 end -->
	<!-- content end -->

@endsection


@section("javascript")


@stop