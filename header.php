<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta setup -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <!-- Page information -->
    <title>Primary Keyword - Secondary Keyword | Brand Name</title>
    <meta name="description" content="The infamous meta description tag is used for one major purpose: to describe the page to searchers as they read through the SERPs. This tag doesn't influence ranking, but it's very important regardless. It's the ad copy that will determine if users click on your result. Keep it within 160 characters, and write it to catch the user's attention. Sell the page — get them to click on the result. Here's a great article on meta descriptions that goes into more detail.">
	<meta name="author" content="www.gavinbaxter.com">
	<link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Style links -->
	<link rel="stylesheet" type="text/css" href="../assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/grid.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/tools.css" />

	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="../assets/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/header.css" />

</head>
<body>

<!-- ====================================================== -->


<header class="flex-full flex-row header">

	<!-- ================ Left section - logos -->
	<div class="flex-full flex-row">
		<a class="flex-full header-logo" href="http://google.com">
			<img class="header-logo--lite" alt="Alttxt" src="https://via.placeholder.com/100x33">
			<img class="header-logo--dark hider" alt="Alttxt" src="https://via.placeholder.com/100x33">
		</a>
	</div>

	<!-- ================ Right section - nav, hamburger -->
	<div class="flex-full flex-row header-nav">
		
		<ul class="flex-full flex-row header-nav__list">

			<!-- BUTTON LIST ITEM -->
			<a href="http://google.com" style="height: 100%;">
				<li class="flex-full header-nav__li">Button</li>
			</a>

			<!-- SCROLL LIST ITEM -->
			<li data-name="scroll-to-ID" class="flex-full header-nav__scroll header-nav__li">Scroll</li>

			<!-- NESTED LIST ITEM WITH TOP BUTTON -->
			<li class="flex-full header-nav__top-list header-nav__sublist">
				<a href="http://google.com" class="flex-full">Sublist Button&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
				<ul class="header-nav__sublist--display">
					<li data-name="scroll-to-ID" class="header-nav__scroll header-nav__sublist--item">Register &amp; Fees</li>
					<li data-name="scroll-to-ID" class="header-nav__scroll header-nav__sublist--item">Agenda</li>
					<li data-name="scroll-to-ID" class="header-nav__scroll header-nav__sublist--item">Travel &amp; Hotel</li>
				</ul>
			</li>

			<!-- NESTED LIST REGULAR -->
			<li class="flex-full header-nav__li header-nav__sublist">Sublist&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
				<ul class="header-nav__sublist--display">
					<a href="http://google.com"><li class="header-nav__sublist--item">Greater Midwest</li></a>
					<a href="http://google.com"><li class="header-nav__sublist--item">Greater Midwest</li></a>
					<a href="http://google.com"><li class="header-nav__sublist--item">Greater Midwest</li></a>
					<a href="http://google.com"><li class="header-nav__sublist--item">Greater Midwest</li></a>
				</ul>
			</li>
			
		</ul>
		
		<!-- CONTACT -->
		<a href="mailto:eventsupport@avb.net" class="flex-full header-contact">Contact</a>
	</div>

	<!-- ========= -->
	<!-- HAMBURGER -->
	<!-- ========= -->
	<div class="flex-full header-hamburger">
		<div class="header-hamburger__bar1"></div>
		<div class="header-hamburger__bar2"></div>
		<div class="header-hamburger__bar3"></div>
	</div>

	<!-- HAMBURGER MENU -->
	<div class="flex-full flex-col header-hamburger-nav">

		<!-- LIST OF BUTTONS -->
		<ul class="flex-full flex-col header-hamburger__list">
			<li>Home</li>
			<li data-name="scroll-to-ID" class="header-nav__scroll">Register &amp; Fees</li>
			<li data-name="scroll-to-ID" class="header-nav__scroll">Agenda</li>
			<li data-name="scroll-to-ID" class="header-nav__scroll">Travel &amp; Hotel</li>

			<!-- EXPANDABLE -->
			<li class="header-hamburger--expand">Regions <i class="fas fa-caret-down"></i>
				<ul class="flex-full flex-col header-hamburger__list__nested hider">
					<li class="flex-full flex-row">
						<a href="http://www.avbevents.com/regions/greater-midwest/">Greater Midwest</a>
						<a href="http://www.avbevents.com/regions/great-plains/">Great Plains</a>
					</li>
					<li class="flex-full flex-row">
						<a href="http://www.avbevents.com/regions/michigan/">Michigan</a>
						<a href="http://www.avbevents.com/regions/mid-america/">Mid-America</a>
					</li>
					<li class="flex-full flex-row">
						<a href="http://www.avbevents.com/regions/north-atlantic/">North Atlantic</a>
						<a href="http://www.avbevents.com/regions/north-central/">North Central</a>
					</li>
				</ul>
			</li>

		</ul>

		<!-- CONTACT -->
		<a href="mailto:eventsupport@avb.net">
			<div class="flex-full header-hamburger__contact">Contact</div>
		</a>
	</div>

</header>

<!-- HAMBURGER BLACKOUT -->
<div class="header-hamburger__blackout"></div>

<div style="height:2000px"></div>