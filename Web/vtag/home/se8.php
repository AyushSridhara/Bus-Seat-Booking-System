



<section class = "se6">

<div class="wrapper">
	<div class="slider">
		<div class="slide-track">
		>
			<!-- Img Code -->
			<div class="slide">
				<img src="vtag/img/1.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/2.png" />
			</div>
			

			
			<div class="slide">
				<img src="vtag/img/4.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/5.png" />
			</div>


            <div class="slide">
				<img src="vtag/img/1.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/2.png" />
			</div>
			

			
			<div class="slide">
				<img src="vtag/img/4.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/5.png" />
			</div>


            <div class="slide">
				<img src="vtag/img/1.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/2.png" />
			</div>
			

			
			<div class="slide">
				<img src="vtag/img/4.png" />
			</div>
			
			<div class="slide">
				<img src="vtag/img/5.png" />
			</div>
			
			
			<!-- Img Code End -->
			
		</div>
	</div>
</div>












</section>











<style>
.se6{
    padding-bottom:40px;
}

.wrapper {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 250px;
    
}
.slider {
	height: 500px;
	margin: auto;
	overflow: hidden;
	position: relative;
	width: 100%;
}


.slider .slide-track {
	-webkit-animation: scroll 30s linear infinite;
	animation: scroll 30s linear infinite;
	display: flex;
	width: calc(100px * 14);
}

.slider .slide {
	height: 100px;
	width: 3500px;
}

.slider .slide img {
    width: auto;
	height: 400px;
}

@-webkit-keyframes scroll {
	0% {
		transform: translateX(0);
	}
	100% {
		transform: translateX(calc(-250px * 7));
	}
}

@keyframes scroll {
	0% {
		transform: translateX(0);
	}
	100% {
		transform: translateX(calc(-250px * 7));
	}
}



@media (max-width:400px){

    .slider .slide img {
    width: auto;
	height: 200px;
}


.wrapper {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 50px;
}

}

nav .navbar .nav-links .links li .home{
    color:#0D6E8D;
}


</style>