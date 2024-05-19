<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>SAA'DA</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/SAADA.css')}}"/>
	<link rel="icon" href="{{asset('Logo/link pic.jpg')}}" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
		integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
		integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

	<section class="hello-sec">
		<nav class="wow animate__animated animate__fadeInDown">
			<div class="nav_logo">
				<a href="{{route('home')}}"><img src="{{asset('Logo/nav.jpg')}}" /></a>
			</div>
			<div class="nav_items">
				<ul class="nav">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('home') }}#cards">Events</a></li>
					<li><a href="{{ route('about') }}">About us</a></li>
					<li><a href="{{ route('contact') }}">Contact us</a></li>
					<li><button class="sigin-btn" onclick="window.location.href='{{ route('login') }}'">sign in</button></li>
				</ul>
			</div>
			<i onclick="showsidebar()" class="fa-solid fa-bars nav-icon" id="NAV-icon"></i>
		</nav>

		<div class="filter">
			<div class="home-sec">
				<h1 class="wow animate__animated animate__backInLeft">welcome to SAA'DA</h1>
				<p class="wow animate__animated animate__backInRight">your dreams come true with us</p>
			</div>
		</div>
	</section>



	<section id="cards">
		<div class="what-we-do">
			<div class="what-we-do-para">
				<h1 class="wow animate__animated animate__backInDown">what events we make? </h1>
				<p class="wow animate__animated animate__backInUp">We “SAA'DA” create your special event the best way
					you
					like as possible as we could to make u
					remember
					this event happily with every detail of the day and make you memorize everything so we create all
					kinds of events ( birthday,anniversary,prom…etc) ao whatever the next event is … we
					can do it for you</p>
			</div>

			<div class="what-we-do-cards">
				<div class="wow first-card animate__animated animate__backInLeft">
					<h1>we make indoor events.</h1>
					<p>We provide you with all the essentials you need like (stage ,sound system,light
						system,photographer and videographer to cover all the event , cakes and corners with all you can
						eat) and all of this to make you satisfaction reaches the sky. </p>

					<div class="what-we-do-btn" id="what-we-do-inbtn">
						<button class="what-we-do-btn2" onclick="showindoor()">In-Door</button>
						<button class="what-we-do-btn3" onclick="hideindoor()"><i
								class="fa-solid fa-xmark"></i></button>
					</div>
				</div>



				<div class="second-card wow animate__animated animate__backInRight">
					<h1>we make outdoor events.</h1>
					<p>Outdoor we provide you with Secure Reliable location with all you need from a to z (lightning
						system,experienced photographers , Well-trained staff help you with what you need
						,chairs,food
						corners and so on…)you are in the right place with us</p>

					<div class="what-we-do-btn" id="what-we-do-outbtn">
						<button class="what-we-do-btn2" onclick="showoutdoor()">Out-Door</button>
						<button class="what-we-do-btn4" onclick="hideoutdoor()"><i
								class="fa-solid fa-xmark"></i></button>
					</div>
				</div>
			</div>

			<div class="indoor">

				<div class="indoor-cust">

					<div class="div1">
						<div class="div01" onclick="window.location.href='{{ route('birthdayindoor')}}'">
							<img class="birthdayimg" src="{{asset('Logo/birthday.jpg')}}" alt="" srcset="" />
							<div class="div010">
								<button class="div0100">Birthday</button>
							</div>
						</div>

						<div class="div02" onclick="window.location.href='{{ route('engagmentindoor')}}'">
							<img class="engagmentimg" src="{{asset('Logo/engagment.jpg')}}" alt="" srcset="" />
							<div class="div020">
								<p class="div0200">Engagment</p>
							</div>
						</div>
						<div class="div03" onclick="window.location.href='{{ route ('babyshowerindoor')}}'">
							<img class="babyshower" src="{{asset('Logo/baby shower.jpg')}}" alt="" srcset="" />
							<div class="divvv211">
								<p class="divvv2111">Baby Shower</p>
							</div>
						</div>
						<div class="div04" onclick="window.location.href='{{ route('anniversaryindoor')}}'">
							<img class="partyimg" src="{{asset('Logo/anniverse.jpg')}}" alt="" srcset="" />
							<div class="div040">
								<p class="div0400">Anniversary</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="outdoor">
				<div class="outdoor-cust">

					<div class="div1">
						<div class="div01" onclick="window.location.href='{{ route('birthdayoutdoor')}}'">
							<img class="birthdayimg" src="{{asset('Logo/birthday.jpg')}}" alt="" srcset="" />
							<div class="div010">
								<button class="div0100">Birthday</button>
							</div>
						</div>

						<div class="div02" onclick="window.location.href='{{ route('engagmentoutdoor')}}'">
							<img class="engagmentimg" src="{{asset('Logo/engagment.jpg')}}" alt="" srcset="" />
							<div class="div020">
								<p class="div0200">Engagment</p>
							</div>
						</div>
						<div class="div03" onclick="window.location.href='{{ route('wedding')}}'">
							<img class="weeding" src="{{asset('Logo/weeding.jpg')}}" alt="" srcset="" />
							<div class="div030">
								<p class="div0300">Wedding</p>
							</div>
						</div>
						<div class="div04" onclick="window.location.href='{{ route('funday')}}'">
							<img class="partyimg" src="{{asset('Logo/party.jpg')}}" alt="" srcset="" />
							<div class="div040">
								<p class="div0400">Funday</p>
							</div>
						</div>
					</div>

					<div class="divv2">
						<div class="divv12" onclick="window.location.href='{{ route('dishparty')}}'">
							<img class="dishparty" src="{{asset('Logo/dish party.jpg')}}" alt="" srcset="" />
							<div class="divv112">
								<button class="divv112">Dish Party</button>
							</div>
						</div>

						<div class="divvv21" onclick="window.location.href='{{ route('babyshoweroutdoor')}}'">
							<img class="babyshower" src="{{asset('Logo/baby shower.jpg')}}" alt="" srcset="" />
							<div class="divvv211">
								<p class="divvv2111">Baby Shower</p>
							</div>
						</div>
						<div class="divvvv31" onclick="window.location.href='{{ route('date')}}'">
							<img class="date" src="{{asset('Logo/date.jpg')}}" alt="" srcset="" />
							<div class="divvvv311">
								<p class="divvvv3111">Date</p>
							</div>
						</div>
						<div class="divvvvv41" onclick="window.location.href='{{ route('conference')}}'">
							<img class="Corporate" src="{{asset('Logo/confrence.jpg')}}" alt="" srcset="" />
							<div class="divvvvv411">
								<p class="divvvvv4111">Confrence</p>
							</div>
						</div>
					</div>

					<div class="lastdiv1">
						<div class="lastdiv11" onclick="window.location.href='{{ route('anniversary')}}'">
							<img class="anniverse" src="{{asset('Logo/anniverse.jpg')}}" alt="" srcset="" />
							<div class="lastdiv1111">
								<p class="lastdiv1111">Anniversary</p>
							</div>
						</div>
						<div class="lastdiv2" onclick="window.location.href='{{ route('prom')}}'">
							<img class="prom" src="{{asset('Logo/graduation.jpg')}}" alt="" srcset="" />
							<div class="lastdiv22">
								<p class="lastdiv222">Prom</p>
							</div>
						</div>
					</div>
				</div>

			</div>


	</section>



	<section class="choose-sec">
		<div class="choose-para">
			<h1>why choose <span>us?</span></h1>
			<p>everyday we work hard to make life of our clients better and happier. </p>
		</div>


		<div class="choose-cards">
			<div class="card1 wow animate__animated animate__fadeInLeft">


				<h3>Attention to <span>Detail</span></h3>
				<hr class="cards-hr">
				<p>Emphasize your meticulous attention to detail. Clients want assurance that every aspect of their
					event will be flawlessly executed, from venue selection to catering to decorations.
					Demonstrating your commitment to perfection can set you apart from competitors. </p>


			</div>

			<div class="card2 wow animate__animated animate__fadeInUpBig">
				<h3> WE CARE ABOUT YOUR EVENT</h3>
				<hr class="cards-hr">
				<p>
					Choosing SAA'DA is an investment in your event because we value and care for each and every one of
					our clients, With our knowledgeable staff, we ensure the success of your event, which is why we
					make sure that everything you see and receive far exceeds your wildest expectations.
				</p>
			</div>


			<div class="card3 wow animate__animated animate__fadeInRight">

				<h3>A TEAM WITH EXPERIENCE
				</h3>
				<hr class="cards-hr">
				<p>We will oversee and run the entire event from start to finish, leaving you free to enjoy your event
					and play special host to your guests. We create the ambiance in your venue, whether be it a hotel, a
					stately home or a marquee. </p>

			</div>


		</div>

	</section>


	<footer>Copyright ©2024 BIS. All rights reserved.</footer>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
		integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		new WOW().init();
	</script>

<script src="{{asset('js/SAADA.js')}}"></script>
<script src="{{asset('js/showcard.js')}}"></script>
	<script src="{{asset('js/hide cards.js')}}"></script>
</body>

</html>