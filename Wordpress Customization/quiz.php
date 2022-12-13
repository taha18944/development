<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VikiMiki</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />	 -->
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<style>
		.section-2,.section-3,.section-4,.section-5,.section-6,.section-7,.section-8,.section-9,.section-10,.section-11,.section-12{
			display: none;
		}
		body {
			background-color: #f6e7cf;
		}
		.vikimiki-custom-h1 {
			/*font-family: poppins;*/
			font-size: 30px;
			font-weight: bold;
			text-align: center;
		}
		.vikimiki-custom-h3 {
			font-family: poppins;
			font-size: 20px;
			font-weight: 700;
			margin-top: 15px;
		}
		.vikimiki-custom-p {
			font-family: poppins;
			font-size: 16px;
			font-weight: normal;
		}
		.vikimiki-custom-p a {
			text-decoration: underline;
			color: #292929;
		}
		.vikimiki-custom-select {
			border: 2px solid #CECECE;
			border-radius: 20px;
			padding: 50px 0;
			margin-bottom: 15px;
		}
		.vikimiki-custom-select img {
			display: block;
		    margin: 0 auto;
		}
		.vikimiki-custom-radio {
		    margin: 0 auto;
			margin-bottom: 50px;
		}
		input[type="radio"] {
			 -webkit-appearance: none;
			/* Remove most all native input styles */
			 appearance: none;
			/* For iOS < 15 */
			 background-color: var(--form-background);
			 font: inherit;
			 color: #c6ae89;
			 width: 1.15em;
			 height: 1.15em;
			 border: 0.15em solid #c6ae89;
			 border-radius: 50%;
			 transform: translateY(-0.075em);
			 display: grid;
			 margin: 0 auto !important;
			 place-content: center;
		}
		 input[type="radio"]::before {
			 content: "";
			 width: 0.65em;
			 height: 0.65em;
			 border-radius: 50%;
			 transform: scale(0);
			 transition: 120ms transform ease-in-out;
			 box-shadow: inset 1em 1em #c6ae89;
		}
		 input[type="radio"]:checked::before {
			 transform: scale(1);
		}
		.vikimiki-custom-select h3 {
			text-align: center;
		}
		.vikimiki-custom-box {
			background-color: #FFFFFF;
			border-radius: 20px;
			padding: 70px 40px;
		}
		.vikimiki-custom-backbutton a {
			text-decoration: none;
			color: #CECECE;
		}
		.vikimiki-custom-nextbutton a {
			text-decoration: none;
			padding: 10px 26px;
			color: #292929;
			border: 2px solid #292929;
			border-radius: 20px;
		}
		.vikimiki-custom-nextbutton-div{
			padding: 10px 26px;
			color: #292929;
			border: 2px solid #292929;
			border-radius: 20px;
		}
		.vikimiki-custom-progressbar {
			border-radius: 15px;
		}
		.vikimiki-custom-progressbar>div {
			background-color: #292929;
			border-radius: 15px;
		}
		.vikimiki-custom-h2{
			text-align: center;
			font-size: 20px;

		}
		/* The container */
		.container-check {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 16px;
		  cursor: pointer;
		  font-size: 18px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container-check input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  border: 2px solid #ccc;
		}


		/* When the checkbox is checked, add a blue background */
		.container-check input:checked ~ .checkmark {
		  background-color: #C6AE89;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
		  content: "";
		  border: 2px solid #ccc;
		  position: absolute;
		  display: none;
		}

		/* Show the checkmark when checked */
		.container-check input:checked ~ .checkmark:after {
		  display: block;
		}

		/* Style the checkmark/indicator */
		.container-check .checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}
		.padding-10{
			padding: 10px 0;
		}
		.padding-10 h3{
			margin-top: 10px;
		}
		.popover-content{
			width: 545px;
			border: 2px solid #333;
			padding: 30px;
			border-radius: 7%;
			margin-left: 50px;
			margin-bottom: 20px;
			/*display: none*/
		}
		.popover-content-2{
			width: 643px;
			border: 2px solid #333;
			padding: 30px;
			/*border-radius: 7%;*/
			margin-left: 50px;
			/*display: none*/
		}
		.para{
			font-size: 14px;
		}
		.d-sm-blockc{
			display: none;
		}
		.d-mobile-block{
			display: none;
		}
		.accordion-button:not(.collapsed){
		    background-color: #fff;
		}
		.vikimiki-tabs-ul {
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			width: max-content;
			border-radius: 50px;
		}
		.vikimiki-tabs-button {
			/*font-family: 'poppins';*/
			font-weight: 600;
			font-size: 12px;
			color: #8B8B8B;
		}
		.vikimiki-tabs-button:hover {
			color: #C6AE89;
		}
		.vikimiki-tabs-button.active {
			color: #C6AE89 !important;
			background-color: #fff !important;
			border: 1px solid #C6AE89;
			border-radius: 50px;	
		}
		.vikimiki-tab-content {
			background-color: #FFFFFF;
			border-radius: 23px;
			padding: 20px;
		}
		.vikimiki-tab-content p {
			/*font-family: 'poppins';*/
			font-weight: 400;
			font-size: 13px;
			color: #4E4E4E;
		}
		/****Responsive****/
		@media (max-width: 426px) {
			.d-mobile-block{
				display: block !important;
			}
			.vikimiki-custom-h3 {
				font-size: 14px;
			}
			.vikimiki-custom-h2{
				font-size: 16px;
			}
			.vikimiki-custom-h1 {
				font-size: 24px;
			}
			.vikimiki-custom-progressbar {
				height: 2rem;
			}
			.vikimiki-custom-backbutton {
				margin-bottom: 30px;
			}
			.popover-content{
				margin-left: 10px;
			}
			.d-sm-nonec{
				display: none;
			}
			.d-sm-blockc{
				display: block;
			}
			.owl-theme .owl-nav{
			    margin-top: -80% !important;
			}
			.table-slider-up{
				margin-top: 60% !important;
			}
			.slider_setting {
			    width: 100% !important;
			}
			.owl-carousel .owl-item img {
			    object-fit: contain !important;
			}
			.custom_table_mobile tbody, td, tfoot, th, thead, tr {
			    border-color: inherit;
			    border-style: solid;
			    width: 100%;
			    border-width: 0;
			}
			.d-desktop-block{
				display: none !important;
			}
			.two-col-with-mobile{
				padding: 20px 10px !important;
			}
			.two-col-mobile-2{
				padding-left: 0px !important;
			}
			.two-col-mobile-2 p, h3{
				text-align: center !important;
			}
			.vikimiki-custom-img{
				padding-right: 0px !important;
				margin-bottom: 20px !important;
			}
		}
		@media (max-width: 320px) {
			.popover-content{
				width: 270px;
				border: 2px solid #333;
				padding: 30px;
				/*border-radius: 20%;*/
				margin-left: 10px;
				/*display: none*/
			}
			.d-sm-nonec{
				display: none;
			}
			.d-sm-blockc{
				display: block;
			}
		}
		.slider_setting{
			text-align: center;
		    width: 180px;
		    margin: 0 auto;
		}
		.slider_setting h5{
			font-size: 14px;
			font-weight: 500;
		}
		.slider_setting p{
			font-size: 14px;
			font-weight: 400;
		}
		.slider_setting a, .slider_a{
			color: black;
			font-size: 12px;
			font-weight: 400;
			text-decoration: underline;
		}
		.owl-carousel .owl-item img {
		    display: block;
		    width: 100%;
		    object-fit: none;
		    height: 180px;
		}
		.mb-10 {
		    margin-bottom: 80px;
		}
		article.thumbnail.item {
		    text-align: center;
		}
		.owl-theme .owl-nav {
			display: flex;
			text-align: center;
			-webkit-tap-highlight-color: transparent;
			justify-content: space-between;
			font-size: 50px;
			margin-top: -20%;
			position: inherit;
		}
		.border-custom{
		    border: 3px solid #E5E5E5!important;
		    border-left: 0!important;
		    border-bottom: 0!important;
		    border-top: 0!important;
		}
		.table-striped>tbody>tr:nth-child(odd), 
		.table-striped>tbody>tr:nth-child(odd)>th {
			/*background: red;*/
			background: rgb(255,255,255);
			background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 48%, rgba(250,250,250,1) 100%);
		}
		.table-striped>tbody>tr:nth-of-type(odd) {
		    --bs-table-accent-bg: none;
		}
		.table-slider-up{
			margin-top: 10%;
		}
		.d-desktop-block{
			display: inline-table;
		}
		.two-col-with-mobile{
			padding: 20px 50px;
		}
		.two-col-mobile-2{
			padding-left: 20px;
		}
		.gallery-images img:nth-child(1){
			margin-left: 0px !important;
		}
		.gallery-images img{
			padding: 7px;
			border-radius: 20%;
		}
		.accordion-button:not(.collapsed)::after {
		  content: "\f358";
		  font-family: "Font Awesome 6 Free";
		  color: #C6AE89;
		  background-image: none;
		}

		.accordion-button.collapsed::after {
		  /* content: "\f057";  x*/
		  /* content: "\f058";  check*/
		  /* "\f067"  plus*/
		  /* "\f068"  minus*/
		  content: "\f358";
		  color: black;
		  font-weight: 400;
		  font-family: "Font Awesome 6 Free";
		  background-image: none;
		}
		.accordion-button {
		    color: black;
		    box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
		}
		.accordion-button:not(.collapsed) {
		    color: #C6AE89;
		    box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
		}
		.border-black{
			border:2px solid black;
		}
	</style>
	<br>
		<div class="container section-1">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 1/5</h1>
					<p class="vikimiki-custom-p">Pasirinkite savo kūdikio kraitelio tipą <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 32.png" alt="Vienam vaikui">
						<h3 class="vikimiki-custom-h3">Vienam vaikui</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1001.png" alt="Dvynukams">
						<h3 class="vikimiki-custom-h3">Dvynukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1002.png" alt="Trynukams">
						<h3 class="vikimiki-custom-h3">Trynukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 554.png" alt="Pametinukams">
						<h3 class="vikimiki-custom-h3">Pametinukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" move="no">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="1" next="2">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-2">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 2/5</h1>
					<p class="vikimiki-custom-p">Pasirinkite vaikelio lytį <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 32.png" alt="Mergaitė">
						<h3 class="vikimiki-custom-h3">Mergaitė</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 25.png" alt="Berniukas">
						<h3 class="vikimiki-custom-h3">Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 27.png" alt="Dar nežinome">
						<h3 class="vikimiki-custom-h3">Dar nežinome</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="2">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="2" next="3">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-3">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 2/5</h1>
					<p class="vikimiki-custom-p">Pasirinkite vaikelio lytį <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1003.png" alt="Mergaitės">
						<h3 class="vikimiki-custom-h3">Mergaitės</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1004.png" alt="Berniukai">
						<h3 class="vikimiki-custom-h3">Berniukai</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1007.png" alt="Mergaitė ir Berniukas">
						<h3 class="vikimiki-custom-h3">Mergaitė ir Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select" style="padding: 34px 0;">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 1005.png" alt="Dar nežinome">
						<h3 class="vikimiki-custom-h3">Dar nežinome</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="3">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="3" next="4">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-4">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 2/5</h1>
					<p class="vikimiki-custom-p">Pasirinkite vaikelio lytį <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 713.png" alt="Mergaitė">
						<h3 class="vikimiki-custom-h3">Mergaitė</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/son.png" alt="Berniukas">
						<h3 class="vikimiki-custom-h3">Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Pasirinkite vaikelio lytį</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 73.png" alt="Mergaitė">
						<h3 class="vikimiki-custom-h3">Mergaitė</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 70.png" alt="Berniukas">
						<h3 class="vikimiki-custom-h3">Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 25.png" alt="Dar nežinome">
						<h3 class="vikimiki-custom-h3">Dar nežinome</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="4">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="4" next="5">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-5">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 3/5</h1>
					<p class="vikimiki-custom-p">Kada turėtų gimti Jūsų mažylė/is? <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 58.png" alt="Pavasarį">
						<h3 class="vikimiki-custom-h3">Pavasarį</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 59.png" alt="Vasarą">
						<h3 class="vikimiki-custom-h3">Vasarą</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 60.png" alt="Rudenį">
						<h3 class="vikimiki-custom-h3">Rudenį</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 61.png" alt="Žiemą">
						<h3 class="vikimiki-custom-h3">Žiemą</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="5">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="5" next="6">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-6">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 4/5</h1>
					<p class="vikimiki-custom-p">Kada turėtų gimti Jūsų mažylė/is? <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<h3 class="vikimiki-custom-h2">MINI</h3>	
						<h3 class="vikimiki-custom-h3">Vienam vaikui</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<h3 class="vikimiki-custom-h2">MIDI</h3>	
						<h3 class="vikimiki-custom-h3">Dvynukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<h3 class="vikimiki-custom-h2">MAXI</h3>
						<h3 class="vikimiki-custom-h3">Trynukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<h3 class="vikimiki-custom-h2">PREMIUM</h3>
						<h3 class="vikimiki-custom-h3">Pametinukams</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="6">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="6" next="7">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-7">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Bendriniai klausimai 5/5</h1>
					<p class="vikimiki-custom-p">Galbūt jau turite kažkuriuos kūdikio kraitelio daiktus įsigiję? Nebėda! Žemiau pažymėkite ką jau turite  <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>	
				<br>
			</div>
			<div class="row my-5">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<label class="container-check">Rinkinys į ligoninę
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Rūbeliai
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Vežimėlis
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Lovytė
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Pataliukai / užvilkimai
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Čiužinys
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Žaisliukai
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<label class="container-check">Lavinimo kilimėlis
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Gultukas
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Nešioklė
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Čiulptukai / laikikliai
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Vystimo lenta
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Sauskelnės
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Sauskelnės
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<label class="container-check">Vontelė / stovas
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Mobili auklė
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Pledas
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
					<label class="container-check">Vonelė + higienos rinkinys
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="7">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="7" next="8">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-8">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Vežimėlis</h1>
					<p class="vikimiki-custom-p">Kokios komplektacijos vežimėlio ieškote?  <span onclick="popover('p')"><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="popover-content popover-p rounded" style="display: none;">
					<div class="text-end pb-3 d-sm-blockc" style="text-decoration: underline;" onclick="popover('p')"><strong>X &nbsp;</strong>uždaryti komentarą</div>
					<i>
						Apgalvokite kur ir kada planuojate naudoti vežimėlį ir kur jį laikysite. Jeigu gyvenate nuosavame name ar kotedže, greičiausiai vežimėlio daug nešioti neteks, todėl galite rinktis ir sunkesnį, tačiau, jeigu gyvenate bute, ypatingai, jeigu tai ne pirmieji aukštai, tuomet reikėtų apgalvoti ar turėsitegalimybę vežimėlį laikyti automobilyje, rūsyje ar kitoje saugioje patalpoje.
					</i>
					<br>
					<br>
					<span style="font-size: 18px">Galimi vežimėlių tipai</span>
					<br>
					<br>
					<div class="row d-xs-none d-sm-nonec">
						<div class="col-lg-3">
							<img src="/vikimiki/wp-content/uploads/quizimages/Repeat Grid 2.png" alt="">
						</div>
						<div class="col-lg-9 para">
							<p>4 in 1 - tai vežimėlio tipas, į kurio komplektaciją įeina vežimėlio rėmas, lopšys, sportinė dalis, automobilinė kėdutė (dažniausiai jau su adapteriais, kurie skirti kėdutės tvirtinimui ant rėmo) ir automobilinės kėdutės Isofix baze, kuri skirta kėdutės tvirtinimui automobilyje. Pagrindinis skirtumas, kad į šią komplektaciją įeina automobilinės kėdutės bazė, kurios dėka galima lengvai įdėti ir pritvirtinti kėdutę. Isofix bazė leidžia kėdutę pasukti 90-180 laipsnių (priklauso nuo kėdutės tipo). Pagrindinis šio tipo privalumas - lengvas ir sklandus kėdutės tvirtinimas automobilyje.</p>
						</div>
					</div>
					<div class="row d-xs-none d-sm-nonec">
						<div class="col-lg-3">
							<img src="/vikimiki/wp-content/uploads/quizimages/3in1.png" alt="">
						</div>
						<div class="col-lg-9 para">
							<p>3 in 1 - tai vežimėlio į kurio komplektaciją įeina vežimėlio rėmas, lopšys, sportinė dalis ir automobilinė kėdutė (dažniausiai jau su adapteriais, kurie skirti kėdutės tvirtinimui ant rėmo). Toks vežimėlio tipas pilnai patenkins Jūsų ir mažylio poreikius maždaug iki 1 metų, (kitiems ir ilgiau) vėliau pakeičiant tik automobilinę kėdutę.</p>
						</div>
					</div>
					<div class="row d-sm-nonec">
						<div class="col-lg-3">
							<img src="/vikimiki/wp-content/uploads/quizimages/2in1.png" alt="">
						</div>
						<div class="col-lg-9 para">
							<p>2 in 1 - tai vežimėlio į kurio komplektaciją įeina vežimėlio rėmas, lopšys ir sportinė dalis. Šis tipas tinkamas toms šeimoms, kurios renkasi ne nešiojamas, o stacionariai tvirtinamas automobilines kėdutes.</p>
						</div>
					</div>
					<div class="row d-sm-nonec">
						<div class="col-lg-3">
							<img src="/vikimiki/wp-content/uploads/quizimages/Lopšys.png" alt="">
						</div>
						<div class="col-lg-9 para">
							<p>Lopšys - tai vežimėlio į kurio komplektaciją įeina tik vežimėlio rėmas ir lopšys. Šis tipas tinkamas toms šeimoms, kurios lopšį planuoja naudoti neilgai ir vėliau įsigys lengvesnį sportinį vežimėlį. Taip pat tinka tiems, kurie dar nežino kokio sportinio vežimėlio ateityje reikės ir norėsis arba tiems, kurie galvoja sportinę dalį tiesiog nusipirkti vėliau.</p>
						</div>
					</div>
					<div class="row d-sm-nonec">
						<div class="col-lg-3">
							<img src="/vikimiki/wp-content/uploads/quizimages/Sportinis vežimas.png" alt="">
						</div>
						<div class="col-lg-9 para">
							<p>Sportinis - tai vežimėlio tipas, į kurio komplektacija įeina tik vežimėlio rėmas ir sportinė dalis. Šį tipą renkasi šeimos, kurios jau turi vežimėlį su lopšiu arba kurioms lopšys nereikalingas. Šiuolaikiniai vežimai dauguma turi pilnai gulimą padėtį, kurią naudojant galima vežti net naujagimį. Toks pasirinkimas turi privalumų, pvz. išleidžiama mažesnė suma kraiteliui, bet taip pat turi ir minusų, pvz. sportinė dalis yra daug atviresnė nei lopšys, todėl mažyliams, gimsiantiems žiemą tai nėra tinkamas pasirinkimas.</p>
						</div>
					</div>
					<div class="row d-sm-blockc">
						<div class="col-lg-12">
							<div class="accordion" id="accordionPanelsStayOpenExample">
							  <div class="accordion-item">
							      <h2 class="accordion-header bg-light" id="panelsStayOpen-headingTwo">
							        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
							          4 In 1
							        </button>
							      </h2>
							      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse para" aria-labelledby="panelsStayOpen-headingTwo">
							        <div class="accordion-body">Tai vežimėlio tipas, į kurio komplektaciją įeina vežimėlio rėmas, lopšys, sportinė dalis, automobilinė kėdutė (dažniausiai jau su adapteriais, kurie skirti kėdutės tvirtinimui ant rėmo) ir automobilinės kėdutės Isofix baze, kuri skirta kėdutės tvirtinimui automobilyje. Pagrindinis skirtumas, kad į šią komplektaciją įeina automobilinės kėdutės bazė, kurios dėka galima lengvai įdėti ir pritvirtinti kėdutę. Isofix bazė leidžia kėdutę pasukti 90-180 laipsnių (priklauso nuo kėdutės tipo). Pagrindinis šio tipo privalumas - lengvas ir sklandus kėdutės tvirtinimas automobilyje.</div>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forP">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">4 in 1</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forP">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">3 in 1</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forP">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">2 in 1</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forP">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Sportinio</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forP">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Lopšio</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row forP">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Pasirinkite vežimėlio pravažumą  <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Didelis pravažumas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Vidutinis pravažumas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Mažas pravažumas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-1" value="">
				</div>
			</div>
			<div class="row forP">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Pasirinkite Jūsų arba antrosios pusės ūgį  <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">< 170 cm</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-2" value="">
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">170 cm - 190 cm</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-2" value="">
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">> 190 cm</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-2" value="">
				</div>
			</div>
			<div class="row forP">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Ar Jums teks vežimėlį dažnai nešioti?  
						<span onclick="popover('t')"><a href="javascript:void(0)"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<p class="popover-content popover-t" style="display: none;">
					<i>
						Apgalvokite kur ir kada planuojate naudoti vežimėlį ir kur jį laikysite. Jeigu gyvenate nuosavame name ar kotedže, greičiausiai vežimėlio daug nešioti neteks, todėl galite rinktis ir sunkesnį, tačiau, jeigu gyvenate bute, ypatingai, jeigu tai ne pirmieji aukštai, tuomet reikėtų apgalvoti ar turėsitegalimybę vežimėlį laikyti automobilyje, rūsyje ar kitoje saugioje patalpoje.
					</i>
					<br>
					<br>
					Taip, vežimėli teks dažnai nešioti - Gyvenu bute, palikti neturėsiu kur, 
					teks nešioti.
					<br>
					<br>
					Ne, vežimėlio neteks dažnai nešioti - Gyvenu bute arba nuosavame 
					name, vežimėlį laikysiu automobilyje, rūsyje, kitoje patalpoje – nešioti 
					neteks.
				</p>
				<div class="col-lg-2 col-md-3 col-sm-3 forT">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Taip </h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-3" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 forT">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Ne</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-3" value="">
				</div>
			</div>
			<div class="row forT forP">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Ar Jums svarbu, kad vežimėlio sportinė dalis susilankstytų kartu su važiuokle?  <span><a href="#"><img src="/vikimiki/wp-content/uploads/quizimages/Specialisto komentaras.png" alt="Specialisto komentaras"></a></span></p>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Svarbu </h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-4" value="">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3">
					<div class="vikimiki-custom-select padding-10">
						<h3 class="vikimiki-custom-h3">Nesvarbu</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio-4" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="8">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="8" next="9">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>

			</div>
		</div>
	</div>
	<div class="container section-9">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Jums tinkantys vežimėliai</h1>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Group 713.png" alt="Mergaitė">
						<h3 class="vikimiki-custom-h3">Mergaitė</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/son.png" alt="Berniukas">
						<h3 class="vikimiki-custom-h3">Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="vikimiki-custom-p">Pasirinkite vaikelio lytį</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 73.png" alt="Mergaitė">
						<h3 class="vikimiki-custom-h3">Mergaitė</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 70.png" alt="Berniukas">
						<h3 class="vikimiki-custom-h3">Berniukas</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="vikimiki-custom-select">
						<img class="vikimiki-custom-img" src="/vikimiki/wp-content/uploads/quizimages/Mask Group 25.png" alt="Dar nežinome">
						<h3 class="vikimiki-custom-h3">Dar nežinome</h3>
					</div>
					<input class="vikimiki-custom-radio" type="radio" id="radio-1" name="radio-1" value="">
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="9">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="9" next="10">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-10">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12">
					<h1 class="vikimiki-custom-h1">Jums tinkantys vežimėliai</h1>
					<p class="d-mobile-block text-center">Išsirinkite Jums labiausiai patinkantį vežimėlį iš siūlomų variantų</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div id="owl-demo-2" class="owl-carousel owl-theme">
						<article class="thumbnail item">
							<a class="slider_a"><i class="fa fa-close"></i> Pašalinti</a>
							<img class="" src="/vikimiki/wp-content/uploads/quizimages/slide-1.png" alt="">
							<div class="caption slider_setting">
								<h5>Britax Romer Smile III 3in1 vežimėlis Atlantic Green</h5>
								<p class="flex-text">905.99 EUR</p>
								<a class="open_modal_product">Plačiau apie prekę</a>
							</div>
						</article>

						<article class="thumbnail item">
							<a class="slider_a"><i class="fa fa-close"></i> Pašalinti</a>
							<img class="" src="/vikimiki/wp-content/uploads/quizimages/slide-2.png" alt="">
							<div class="caption slider_setting">
								<h5>Cybex Balios S Lux</h5>
								<p class="flex-text">905.99 EUR</p>
								<a class="open_modal_product">Plačiau apie prekę</a>
							</div>
						</article>

						<article class="thumbnail item">
							<a class="slider_a"><i class="fa fa-close"></i> Pašalinti</a>
							<img class="" src="/vikimiki/wp-content/uploads/quizimages/slide-3.png" alt="">
							<div class="caption slider_setting">
								<h5>Cybex Gazelle S</h5>
								<p class="flex-text">905.99 EUR</p>
								<a class="open_modal_product">Plačiau apie prekę</a>
							</div>
						</article>

						<article class="thumbnail item">
							<a class="slider_a"><i class="fa fa-close"></i> Pašalinti</a>
							<img class="" src="/vikimiki/wp-content/uploads/quizimages/slide-1.png" alt="">
							<div class="caption slider_setting">
								<h5>Britax Romer Smile III 3in1 vežimėlis Atlantic Green</h5>
								<p class="flex-text">905.99 EUR</p>
								<a class="open_modal_product">Plačiau apie prekę</a>
							</div>
						</article>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 table-slider-up">
					<h5 class="mb-2">Bendriniai ypatumai:</h5>
					<table class="table table-striped mb-10 d-desktop-block">
						<tbody>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td>Britax Romer</td>
								<td>Cybex</td>
								<td>Cybex</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-striped mb-10 d-mobile-block custom_table_mobile">
						<tbody>
							<tr>
							</tr>
							<tr>
								<td>Gamintojas</td>
								<td></td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
							<tr>
								<td>Gamintojas</td>
							</tr>
							<tr>
								<td>Britax Romer</td>
								<td>Cybex</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="10">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="10" next="11">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<div class="row">
			      		<div class="col-lg-6">
			      			<span class="badge badge-pill px-2 float-end rounded" style="background-color:#C6AE89;">-47%</span>
					      	<!-- <img src="/vikimiki/wp-content/uploads/quizimages/Joolz Hub vežimėlis 2in1.png" class="img-thumbnail border-0" alt="">	 -->
					      	<ul id="imageGallery">
					      	 
					      	  <li data-thumb="wp-content/uploads/quizimages/Joolz Hub vežimėlis 2in1.png">
					      	 
					      	    <img src="/vikimiki/wp-content/uploads/quizimages/Joolz Hub vežimėlis 2in1.png" />
					      	 
					      	  </li>
					      	 
					      	  <li data-thumb="wp-content/uploads/quizimages/Joolz Hub vežimėlis 2in1.png">
					      	 
					      	    <img src="/vikimiki/wp-content/uploads/quizimages/Joolz Hub vežimėlis 2in1.png" />
					      	 
					      	  </li>
					      	 
					      	</ul>
			      		</div>
			      		<div class="col-lg-6">
			      			<p style="font-size: 18px;">Joolz Hub vežimėlis 2in1</p>
			      			<p style="font-size: 18px;color:#AB0000;">89.99 EUR  &nbsp;<del><font color="#D1D1D1">119.99 EUR</font></del></p>
			      			<p class="lead" style="font-size: 10px;">Kaina su PVM</p>
			      			<p>Spalva:</p>
			      			<div class="gallery-images">
				      			<img src="/vikimiki/wp-content/uploads/quizimages/Joolz small.png" id="img-1" class="ms-2 shadow" style="">
				      			<img src="/vikimiki/wp-content/uploads/quizimages/Joolz small.png" id="img-2" class="ms-2 shadow" style="">
				      			<img src="/vikimiki/wp-content/uploads/quizimages/Joolz small.png" id="img-3" class="ms-2 shadow" style="">
			      			</div>
			      			<p class="mt-lg-3 mt-md-2 mt-xs-1">Kiekis:</p>
			      			<div class="row">
				      			<div class="col-lg-4 col-md-6">
					      			<div class="d-flex py-3">
					      				<button class="btn btnminus" style="color: #D8D8D8;>"><i class="fa fa-minus" aria-hidden="true"></i></button>
					      				<input type="text" class="text-center finalVal" style="width: 40px;" value="1">
					      				<button class="btn btnplus"><i class="fa fa-plus" aria-hidden="true"></i></button>
					      			</div>
				      			</div>
			      				<div class="col-lg-6 col-md-6">
					      			<button class="btn text-light px-5 py-3" style="background: #C6AE89;border-radius: 70px;">Į krepšelį</button>
			      				</div>
			      			</div>
			      			<hr>
			      		</div>
			      	</div>
			      	<div class="row">
			      		<div class="col-lg-6 col-md-6"></div>
			      		<div class="col-lg-6 col-md-6">
			      			<div class="row">
				      			<div class="col-6">
					      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 62.png" alt="">
				      				<span class="para">Saugus atsiskaitymas</span>
				      			</div>
				      			<div class="col-6" style="padding-top: 4px">
					      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 63.png" alt="">
				      				<span class="para">Pinigų grąžinimas</span>
				      			</div>
			      			</div>
			      		</div>
				      	</div>
			      	<div class="row d-flex justify-content-center d-sm-nonec">
						<ul class="nav nav-pills mb-1 mt-5 vikimiki-tabs-ul d-sm-nonec" id="pills-tab" role="tablist">
						  <li class="nav-item" role="presentation">
						    <button class="nav-link vikimiki-tabs-button active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bendriniai</button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link vikimiki-tabs-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sportin? dalis</button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link vikimiki-tabs-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Išmatavimai</button>
						  </li>
						</ul>
					</div>
					<div class="tab-content vikimiki-tab-content bg-light shadow d-sm-nonec m-3" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  	<p>Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
							lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

							Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
							pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
							pulvinar a.</p>
					  </div>
					  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  	<p>
					  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
							lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

							Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
							pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
							pulvinar a.
						</p>
					  </div>
					  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					  	<p>
					  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
							lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

							Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
							pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
							pulvinar a.
						</p>
					  </div>
					</div>
					<div class="accordion mt-3 d-sm-blockc" id="accordionExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingOne">
					      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					        Apie produktą
					      </button>
					    </h2>
					    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
					      	Vestibulum ante ipsum primis in faucibus 
					      	orci luctus et ultrices posuere cubilia Curae; 
					      	Donec velit neque, 
					      	auctor sit amet aliquam vel, ullamcorper sit 
					      	amet ligula. Pellentesque in ipsum id orci 
					      	porta dapibus. 
					      	Vivamus suscipit tortor eget felis porttitor 
					      	volutpat.
					      	<br>
					      	<br>
					      	Praesent sapien massa, convallis a 
					      	pellentesque nec, egestas non nisi. 
					      	Curabitur aliquet quam id dui 
					      	posuere blandit. Cras ultricies ligula sed 
					      	magna dictum porta.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					        Papildoma informacija
					      </button>
					    </h2>
					    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
					  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
							lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
							<br><br>
							Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
							pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
							pulvinar a.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					        Accordion Item #3
					      </button>
					    </h2>
					    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					      <div class="accordion-body">			      	
				      	  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
				      			lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
				      			<br><br>
				      			Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
				      			pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
				      			pulvinar a.
					      </div>
					    </div>
					  </div>
					</div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="container section-11">
			<div class="vikimiki-custom-box">
				<div class="row">
					<div class="col-md-12">
						<h1 class="vikimiki-custom-h1">Išsirinkite čiužinio tipą</h1>
						<p class="vikimiki-custom-p d-sm-blockc">Renkantis čiužinį yra svarbu atkreipti dėmesį į jo pagaminimo medžiagą ir jos privalumus bei trūkumus</p>	
					</div>
				</div>
				<div class="row d-sm-nonec">
					<table class="table table-borderless table-striped">
						<thead>
						</thead>
						<tbody>
							<tr>
								<td class="w-50">
									<div class="pe-0 m-3" style="font-weight: 600;">
										<p style="font-weight: 700;font-size: 20px;">Čiužinių pasirinkimai</p>
										<p class="me-0" style="color: #6C6C6C;">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Donec 
										sollicitudin molestie malesuada.</p>	
									</div>
								</td>
								<td class="border-custom">
									<button class="btn btn-success p-3 px-5 rounded mt-4 m-lg-3 m-md-1" style="background: #85C16E;outline: none;">
										<i class="fa fa-thumbs-up"></i> Privalumai
									</button>
								</td>
								<td>
									<button class="btn btn-danger p-3 px-5 rounded mt-4 m-lg-3 m-md-1" style="background: #F7645E;outline: none;">
										<i class="fa fa-thumbs-down"></i> Trūkumai
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="para-block row border border-dark rounded m-3">
										<div class="col-lg-4">
											<img src="/vikimiki/wp-content/uploads/quizimages/baby-mattresses-bio-bamboo-baby-.png" alt="">
										</div>
										<div class="col-lg-8 pt-2">
											<p class="para">Kokosinis - poroloninis</p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
										</div>
									</div>
									<div class="pt-2">
										<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
									</div>
								</td>
								<td class="border-custom">
									<div class="m-3">
										<ul>
											<li>Yra itin tvirtas</li>
											<li>Pralaidus orui</li>
											<li>Atsparus drėgmei</li>
											<li>Ekologiškas</li>
											<li>Antialergiškas</li>
											<li>Gerai išlaiko formą</li>
											<li>Ilgaažmiai</li>
											<li>Alternatyva kokosiniam čiužiniui</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="m-3">
										<ul>
											<li>Gali traukti šaltį</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="para-block row border border-dark rounded m-3">
										<div class="col-lg-4">
											<img src="/vikimiki/wp-content/uploads/quizimages/baby-mattresses-bio-bamboo-baby-.png" alt="">
										</div>
										<div class="col-lg-8 pt-2">
											<p class="para">Kokosinis - poroloninis</p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
										</div>
									</div>
									<div class="pt-2">
										<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
									</div>
								</td>
								<td class="border-custom">
									<div class="m-3">
										<ul>
											<li>Gerai sugeria drėgmę</li>
											<li>Gali atlikti masažinę funkciją</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="m-3">
										<ul>
											<li>Po miego reikia išpurenti jog neliktų jokių įdubimų</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="para-block row border border-dark rounded m-3">
										<div class="col-lg-4">
											<img src="/vikimiki/wp-content/uploads/quizimages/baby-mattresses-bio-bamboo-baby-.png" alt="">
										</div>
										<div class="col-lg-8 pt-2">
											<p class="para">Kokosinis - poroloninis</p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
										</div>
									</div>
									<div class="pt-2">
										<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
									</div>
								</td>
								<td class="border-custom">
									<div class="m-3">
										<ul>
											<li>Ekologiškas</li>
											<li>Netoksiškas</li>
											<li>Antialergiškas</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="m-3">
										<ul>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="para-block row border border-dark rounded m-3">
										<div class="col-lg-4">
											<img src="/vikimiki/wp-content/uploads/quizimages/baby-mattresses-bio-bamboo-baby-.png" alt="">
										</div>
										<div class="col-lg-8 pt-2">
											<p class="para">Kokosinis - poroloninis</p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada.</p>
										</div>
									</div>
									<div class="pt-2">
										<input class="vikimiki-custom-radio" type="radio" id="" name="radio" value="">
									</div>
								</td>
								<td class="border-custom">
									<div class="m-3">
										<ul>
											<li>Vidutinio kietumo</li>
											<li>Prisitaiko prie kūno svorio</li>
											<li>Kvėpuojantis - padeda išvengti prakaitavimo</li>
											<li>Gerai šalina drėgmę</li>
											<li>Neleidžia kauptis dulkių erkėms</li>
											<li>Geras kainos ir kokybės santykis</li>
											<li>Lengvas</li>
											<li>Paprasta priežiūra</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="m-3">
										<ul>
											<li>Greičiau nei kito tipo čiužiniuose atsirandantys išgulėjimai</li>
											<li>Ant paviršiaus atsiranda įdubimų</li>
										</ul>
									</div>
								</td>
							</tr>	
						</tbody>
					</table>
				</div>
				<div class="row d-sm-blockc">
					<div class="accordion" id="accordionPanelsStayOpenExample">
					  <div class="accordion-item">
					      <h2 class="accordion-header bg-light" id="panelsStayOpen-headingTwo">
					        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
					        	Kokosinis - paroloninis
					        </button>
					      </h2>
					      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse para" aria-labelledby="panelsStayOpen-headingTwo">
					        <div class="accordion-body">
								<img src="/vikimiki/wp-content/uploads/quizimages/baby-mattresses-bio-bamboo-baby-.png" class="img-thumbnail border mb-1" alt="">
								<p>
									Cras ultricies ligula sed magna dictum 
									porta. Curabitur non nulla sit amet nisl 
									tempus convallis quis ac lectus. Nulla 
									porttitor accumsan tincidunt. Donec 
									sollicitudin molestie malesuada.
								</p>	
								<p class="p-1 px-2 rounded mt-4" style="color: #85C16E;outline: none;">
									<i class="fa fa-thumbs-up"></i> Privalumai
								</p>
								<div class="row text-center">
									<div class="col-6">
										<ul>
											<li>Yra itin tvirtas</li>
											<li>Pralaidus orui</li>
											<li>Netoksiškas</li>
											<li>Antialergiškas</li>
											<li>Alternatyva kokosiniam čiužiniui</li>
										</ul>
									</div>
									<div class="col-6">
										<li>Atsparus drėgmei</li>
										<li>Ekologiškas</li>
										<li>Gerai išlaiko formą</li>
										<li>Ilgaažmiai</li>
									</div>
								</div>
								<hr>
								<p class="p-1 px-2 rounded mt-4" style="color: #F7645E;outline: none;">
									<i class="fa fa-thumbs-down"></i> Trūkumai
								</p>
								<div class="col-6">
									<li>Gali traukti šaltį</li>
								</div>
					      </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="11">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" current="11" next="12">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container section-12">
		<div class="vikimiki-custom-box">
			<div class="row">
				<div class="col-md-12 mb-5">
					<h1 class="vikimiki-custom-h1">Susitikimui su kūdykėliu Jums prireiks..</h1>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="vikimiki-custom-select two-col-with-mobile">
						<div class="two-col-box d-md-flex">
						<div>
							<img class="vikimiki-custom-img" style="border-right:1px solid #F4F4F4;padding-right: 20px;" src="/vikimiki/wp-content/uploads/quizimages/2colbox.png" alt="Mergaitė">
						</div>
						<div class="two-col-mobile-2">
							<h3 class="vikimiki-custom-h2" style="text-align: left;">Bodžiukai</h3>
							<p class="text-left">Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="vikimiki-custom-nextbutton-div open_baby_modal col-12 text-center">
								<a style="color: #292929;text-decoration: none;">Išsirinkti bodžiuką</a>
							</div>
							<p class="text-center mt-2"><i class="fa fa-check" style="color:#85C16E;"></i>Krepšelyje turite <span style="color:#85C16E;font-weight:900;">2/2</span> bodžiukų</p>	
						</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="vikimiki-custom-select two-col-with-mobile">
						<div class="two-col-box d-md-flex">
						<div>
							<img class="vikimiki-custom-img" style="border-right:1px solid #F4F4F4;padding-right: 20px;" src="/vikimiki/wp-content/uploads/quizimages/2colbox.png" alt="Mergaitė">
						</div>
						<div class="two-col-mobile-2">
							<h3 class="vikimiki-custom-h2" style="text-align: left;">Bodžiukai</h3>
							<p class="text-left">Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="vikimiki-custom-nextbutton-div open_baby_modal col-12 text-center">
								<a style="color: #292929;text-decoration: none;">Išsirinkti bodžiuką</a>
							</div>
							<p class="text-center mt-2"><i class="fa fa-check" style="color:#85C16E;"></i>Krepšelyje turite <span style="color:#85C16E;font-weight:900;">2/2</span> bodžiukų</p>	
						</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="vikimiki-custom-select two-col-with-mobile">
						<div class="two-col-box d-md-flex">
						<div>
							<img class="vikimiki-custom-img" style="border-right:1px solid #F4F4F4;padding-right: 20px;" src="/vikimiki/wp-content/uploads/quizimages/2colbox.png" alt="Mergaitė">
						</div>
						<div class="two-col-mobile-2">
							<h3 class="vikimiki-custom-h2" style="text-align: left;">Bodžiukai</h3>
							<p class="text-left">Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="vikimiki-custom-nextbutton-div open_baby_modal col-12 text-center">
								<a style="color: #292929;text-decoration: none;">Išsirinkti bodžiuką</a>
							</div>
							<p class="text-center mt-2"><i class="fa fa-check" style="color:#85C16E;"></i>Krepšelyje turite <span style="color:#85C16E;font-weight:900;">2/2</span> bodžiukų</p>	
						</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="vikimiki-custom-select two-col-with-mobile">
						<div class="two-col-box d-md-flex">
						<div>
							<img class="vikimiki-custom-img" style="border-right:1px solid #F4F4F4;padding-right: 20px;" src="/vikimiki/wp-content/uploads/quizimages/2colbox.png" alt="Mergaitė">
						</div>
						<div class="two-col-mobile-2">
							<h3 class="vikimiki-custom-h2" style="text-align: left;">Bodžiukai</h3>
							<p class="text-left">Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="vikimiki-custom-nextbutton-div open_baby_modal col-12 text-center">
								<a style="color: #292929;text-decoration: none;">Išsirinkti bodžiuką</a>
							</div>
							<p class="text-center mt-2"><i class="fa fa-check" style="color:#85C16E;"></i>Krepšelyje turite <span style="color:#85C16E;font-weight:900;">2/2</span> bodžiukų</p>	
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-2 col-md-3 col-12 vikimiki-custom-backbutton" current="12">
					<a href="#"><i class="fa-solid fa-chevron-left"></i> Atgal</a>
				</div>
				<div class="col-lg-8 col-md-6 col-6">
					<div class="progress vikimiki-custom-progressbar">
					  <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6 vikimiki-custom-nextbutton" move="no">
					<a href="#">Toliau <i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="girlModal" tabindex="-1" aria-labelledby="girlModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-12 mb-3">
	      			<h1 class="vikimiki-custom-h1">Jums tinkantys bodžiukai</h1>
	      			<p class=" text-center">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl 
					<br class="d-sm-nonec">tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. </p>
	      		</div>
	      	</div>
	      	<div class="row">
	      		<div class="col-lg-6">
			      	<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 104.png" class="img-thumbnail m-0 border-0 p-lg-5 p-md-4" alt="">	
	      		</div>
	      		<div class="col-lg-6">
	      			<p style="font-size: 18px;">Bodžiuko pavadinimas</p>
	      			<p style="font-size: 18px;color:#AB0000;">89.99 EUR  &nbsp;<del><font color="#D1D1D1">119.99 EUR</font></del></p>
	      			<p>Bodžiukų pasirinkimai:</p>
	      			<div class="gallery-images">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0020" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0021" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0022" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0023" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0024" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0025" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0026" class="ms-2 shadow" style="">
	      			</div>
	      			<div class="gallery-images">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0027" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0028" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0029" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0030" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0031" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0032" class="ms-2 shadow" style="">
		      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 89.png" id="img-0033" class="ms-2 shadow" style="">
	      			</div>
	      			<p style="font-size: 12px;" class="mt-3"><i class="fas fa-exclamation-triangle" style="color: red;"></i>&nbsp;Krepšelyje turite <font color="red"> 0/2</font> bodžiukų</p>
	      			<p class="mt-lg-3 mt-md-2 mt-xs-1">Kiekis:</p>
	      			<div class="row">
		      			<div class="col-lg-4 col-md-6">
			      			<div class="d-flex py-3">
			      				<button class="btn btnminus" style="color: #D8D8D8;>"><i class="fa fa-minus" aria-hidden="true"></i></button>
			      				<input type="text" class="text-center finalVal" style="width: 40px;" value="1">
			      				<button class="btn btnplus"><i class="fa fa-plus" aria-hidden="true"></i></button>
			      			</div>
		      			</div>
	      				<div class="col-lg-6 col-md-6">
			      			<button class="btn text-light px-5 py-3" style="background: #C6AE89;border-radius: 70px;">Į krepšelį</button>
	      				</div>
	      			</div>
	      			<hr>
	      		</div>
	      	</div>
	      	<div class="row">
	      		<div class="col-lg-6 col-md-6"></div>
	      		<div class="col-lg-6 col-md-6">
	      			<div class="row">
		      			<div class="col-6">
			      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 62.png" alt="">
		      				<span class="para">Saugus atsiskaitymas</span>
		      			</div>
		      			<div class="col-6" style="padding-top: 4px">
			      			<img src="/vikimiki/wp-content/uploads/quizimages/Mask Group 63.png" alt="">
		      				<span class="para">Pinigų grąžinimas</span>
		      			</div>
	      			</div>
	      		</div>
		      	</div>
	      	<div class="row d-flex justify-content-center d-sm-nonec">
				<ul class="nav nav-pills mb-1 mt-5 vikimiki-tabs-ul d-sm-nonec" id="pills-tab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <button class="nav-link vikimiki-tabs-button active" id="pills-home-tab-1" data-bs-toggle="pill" data-bs-target="#pills-home-1" type="button" role="tab" aria-controls="pills-home-1" aria-selected="true">Bendriniai</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link vikimiki-tabs-button" id="pills-profile-tab-1" data-bs-toggle="pill" data-bs-target="#pills-profile-1" type="button" role="tab" aria-controls="pills-profile-1" aria-selected="false">Sportin? dalis</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link vikimiki-tabs-button" id="pills-contact-tab-1" data-bs-toggle="pill" data-bs-target="#pills-contact-1" type="button" role="tab" aria-controls="pills-contact-1" aria-selected="false">Išmatavimai</button>
				  </li>
				</ul>
			</div>
			<div class="tab-content vikimiki-tab-content bg-light shadow d-sm-nonec m-3 p-3" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home-1" role="tabpanel" aria-labelledby="pills-home-tab-1">
			  	<p>Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
					lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

					Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
					pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
					pulvinar a.</p>
			  </div>
			  <div class="tab-pane fade" id="pills-profile-1" role="tabpanel" aria-labelledby="pills-profile-tab-1">
			  	<p>
			  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
					lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

					Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
					pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
					pulvinar a.
				</p>
			  </div>
			  <div class="tab-pane fade" id="pills-contact-1" role="tabpanel" aria-labelledby="pills-contact-tab-1">
			  	<p>
			  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
					lectus. Vivamus suscipit tortor eget felis porttitor volutpat.

					Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
					pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
					pulvinar a.
				</p>
			  </div>
			</div>
			<div class="accordion mt-3 d-sm-blockc" id="accordionExample">
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="headingOne">
			      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        Apie produktą
			      </button>
			    </h2>
			    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			      <div class="accordion-body">
			      	Vestibulum ante ipsum primis in faucibus 
			      	orci luctus et ultrices posuere cubilia Curae; 
			      	Donec velit neque, 
			      	auctor sit amet aliquam vel, ullamcorper sit 
			      	amet ligula. Pellentesque in ipsum id orci 
			      	porta dapibus. 
			      	Vivamus suscipit tortor eget felis porttitor 
			      	volutpat.
			      	<br>
			      	<br>
			      	Praesent sapien massa, convallis a 
			      	pellentesque nec, egestas non nisi. 
			      	Curabitur aliquet quam id dui 
			      	posuere blandit. Cras ultricies ligula sed 
			      	magna dictum porta.
			      </div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="headingTwo">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			        Papildoma informacija
			      </button>
			    </h2>
			    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
			      <div class="accordion-body">
			  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
					lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
					<br><br>
					Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
					pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
					pulvinar a.
			      </div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="headingThree">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			        Accordion Item #3
			      </button>
			    </h2>
			    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
			      <div class="accordion-body">			      	
		      	  		Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac 
		      			lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
		      			<br><br>
		      			Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a 
		      			pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh 
		      			pulvinar a.
			      </div>
			    </div>
			  </div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			var owl = $("#owl-demo-2");
			owl.owlCarousel({
				autoplay: false,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				items: 3,
				loop: true,
				center: false,
				rewind: false,
				mouseDrag: true,
				touchDrag: true,
				pullDrag: true,
				freeDrag: false,
				margin: 20,
				stagePadding: 10,
				merge: false,
				mergeFit: true,
				autoWidth: false,
				startPosition: 0,
				responsive: {
					0: {
						items: 2,
						nav: true,
						dots: false,
					},
					480: {
						items: 2,
						nav: true,
						dots: true,
					},
					768: {
						items: 3,
						nav: true,
						loop: false
					},
					992: {
						items: 3,
						nav: true,
						loop: true,
						dots: false
					}
				},
				responsiveRefreshRate: 200,
				responsiveBaseElement: window,
				fallbackEasing: "swing",
				info: false,
				nestedItemSelector: false,
				itemElement: "div",
				stageElement: "div",
				refreshClass: "owl-refresh",
				loadedClass: "owl-loaded",
				loadingClass: "owl-loading",
				rtlClass: "owl-rtl",
				responsiveClass: "owl-responsive",
				dragClass: "owl-drag",
				itemClass: "owl-item",
				stageClass: "owl-stage",
				stageOuterClass: "owl-stage-outer",
				grabClass: "owl-grab",
				autoHeight: false,
				lazyLoad: false
			});

			$(".next").click(function () {
				owl.trigger("owl.next");
			});
			$(".prev").click(function () {
				owl.trigger("owl.prev");
			});
		});
		$(document).ready(function() {
			$(".section-2,.section-3,.section-4,.section-5,.section-6,.section-7,.section-8,.section-9,.section-10,.section-11,.section-12").hide();
		});
		$(document).on('click','.vikimiki-custom-nextbutton',function () {
			let current = $(this).attr('current');
			let next = $(this).attr('next');
			let move = $(this).attr('move');
			if (move!=''&&move=='no') {
				alert('finish');
			}else{
				$(`.section-${current}`).hide();
				$(`.section-${next}`).show();
			}
		});
		$(document).on('click','.vikimiki-custom-backbutton',function () {
			let current = $(this).attr('current');
			let move = $(this).attr('move');
			if (move!=''&&move=='no') {
				alert('sorry!');
			}else{
				$(`.section-${current}`).hide();
				$(`.section-${current-1}`).show();
			}
		});
		function popover(type) {
			if (type == 't') {
				var x = $(".popover-t");
			  	x.toggle();
			  	$(".forT").toggle();
			}else if(type == 'p'){
				var x = $(".popover-p");
			  	x.toggle();
			  	$(".forP").toggle();
			}
		};
		// $(document).ready(function () {
		// });
		$(document).on('click','.btnplus',function () {
			let finalVal = $('.finalVal').val();
			let val = (+finalVal)+(+1);
			$('.finalVal').val(val);
			if (finalVal==1) {
			}else{
				$('.btnminus').css('color','black');
			}
		});
		$(document).on('click','.btnminus',function () {
			let finalVal = $('.finalVal').val();
			if (finalVal!=1) {
				let val = (finalVal)-1;
				$('.finalVal').val(val);
			}else{
				$('.btnminus').css('color','#D8D8D8');
			}
		});
		$(document).on('click','.open_modal_product',function () {
			$('#exampleModal').modal('show');
		});
		$(document).on('click','.open_baby_modal',function () {
			$('#girlModal').modal('show');
		});
		$(document).on('click','.gallery-images img',function () {
			let id = $(this).attr('id');
			$(`#${id}`).toggleClass('border-black');
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
    $(document).ready(function() {
        // $("#lightSlider").lightSlider();
       $('#imageGallery').lightSlider({
 
      gallery:true,
 
      minSlide:1,
 
      maxSlide:1,
 
      currentPagerPosition:'left'  
 
    });  
    });
	</script>
</body>
</html>