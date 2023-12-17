<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include ("header.inc");
	?>
</head>

<body>
	<!-- Uniform header -->
	<header>
		<h1><span class="highlight">Enhancements</span></h1>
	</header>
	<?php
		include ("menu.inc");
	?>
	<!-- Content -->
	<article class="main_content">

		<section>
			<ul>
				<li>
					<h2><span class="highlight"> 3D Transformation and Transition</span></h2>
				</li>
			</ul>
			<!--how it goes beyond the basic requirements of the assignment -->
			<p>&nbsp;&nbsp;&nbsp;Our group has enhanced the presentation of one of the webite's content by creating
				vocabulary cards. At the front of the card will show the terms, and when the users hover the mouse over
				each card, it will flip to the back of the card where their definitions are located. This feature
				presented the definition in a more creative and interesting style rather than just lists of texts. We
				also indicated the front and the back of the cards to be in different colors so that the users can
				identify the difference between term cards and description cards. This enhancement goes beyond basic
				requirements as it is a combination of two advanced CSS features: 3D Transformation and CSS Transition,
				where the former one will specify cards to rotate in y-aixs, and the latter one will specify duration of
				the card when transformation.

			</p>
			<!--Code for this feature-->
			<p>Although this feature works mainly on CSS part, we still need to create class for each element of cards
				on HTML as well.</p>
			<div class="column">
				<p>Here is the HTML code format for this enhancement:</p>
				<p>
					<code>
					&lt;div class = "card-holder"&gt;
					<br>&lt;div class = "card -small -back -flipped"&gt;
					<br>&lt;dt> #term# &lt;/dt&gt;
					<br>&lt;dd> #definition# &lt;/dd&gt;
					<br>&lt;/div&gt;
					<br>&lt;div class = "card -small -front"&gt;
					<br>&lt;p> #term# &lt;/p&gt;
					<br>&lt;/div&gt;
					<br>&lt;/div&gt;
				</code>
				</p>
			</div>
			<div class="column">
				<p>Here is the CSS code for this enhancement:</p>
				<p>
					<code>
					.card-holder:hover .card.-front {
					<br>transform: rotateY(-0.5turn);
					<br>}
					<br>.card-holder:hover .card.-back {
					<br>transform: rotateY(0turn);
					<br>}
					<br>.card {
					<br>position: absolute;
					<br>transition: transform 1s ease;
					<br>backface-visibility: hidden;
					<br>}
					<br>.-flipped {
					<br>transform: rotateY(0.5turn);
					<br>}
					<br>.card.-front {
					<br>width: 300px;
					<br>height: 100px;
					<br>background-color: #7952B3;
					<br>text-align: center;
					<br>}
					<br>.card.-back {
					<br>width: 300px;
					<br>height: auto;
					<br>background-color: #bb9b49;
					<br>}
				</code>
				</p>
			</div>

			<!--hyperlink to where the enhancement located-->
			<p>
				Please click on the button below to link to where this enhancement is located.<br>
				<button class="bt" onclick="window.location.href='topic.html';">Description Page</button>
			</p>
		</section>
		<section>
			<ul>
				<li>
					<h2><span class="highlight"> CSS Animation</span></h2>
				</li>
			</ul>
			<!--how it goes beyond the basic requirements of the assignment -->
			<p>&nbsp;&nbsp;&nbsp;This feature is applied to the History page for presenting the development of logos. It
				provides different styles of animation for both texts and images, with "grow" style for logos' images
				and "rotate in down left" style for the logo's description.
				We also applied the "gelatine" style to the dropdown on navigation bar. This feature not only gives
				users unique experiences when hovering over our website's dropdown, but it also helps users to clearly
				notice topics that they are hovering.
				This feature has extended the basic HTML and CSS beyond what we have learned in the lectures and
				tutorials as it needs to specify keyframes for the animation code and the duration of the animation in
				the element that we want to apply the feature to. We have to define directions or scale for each
				transformation.
				In this enhancement, we specified changes of style in both percentage and keywords, where 0% or "from"
				is the beginning of the animation, and 100% or "to" indicates that the animation is complete.
			</p>
			<!--Code for this feature-->
			<p>The CSS animation feature consists of two elements of code:</p>
			<div class="column2">
				<p>The element to apply the animation to:</p>
				<p>
					<code>
					.selector {
					<br>text-align: center;
					<br>width:100%;
					<br>animation: selector #duration of this animation# s;
					<br>}
					</code>
				</p>
			</div>
			<div class="column2">
				<p>The animation code format for "rotate in down left" style:</p>
				<p>
					<code>
					@keyframes selector {
					<br> 0% {
					<br>transform-origin: left bottom;
					<br>transform: rotate(-90deg);
					<br>opacity: 0;
					<br>}
					<br>100% {
					<br>transform-origin: left bottom;
					<br>transform: rotate(0);
					<br>opacity: 1;
					<br>}
					<br>}
					</code>
				</p>
			</div>
			<div class="column2">
				<p>The animation code format for "grow" style:</p>
				<p>
					<code>
					@keyframes selector {
					<br>from { transform: scale(0); }
					<br>to { transform: scale(1); }
					<br>}
					</code>
				</p>
			</div>
			<!--hyperlink to where the enhancement located-->

			<p class="but">
				Please click on these buttons below to link to where this enhancement located.<br>
				<button class="bt" onclick="window.location.href='history.html';">History page </button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="bt" onclick="window.location.href='index.html';">Dropdown</button>
			</p>

		</section>
		<section>
			<ul>
				<li>
					<h2><span class="highlight"> Responsive Web Design</span></h2>
				</li>
			</ul>
			<!--how it goes beyond the basic requirements of the assignment -->
			<p>&nbsp;&nbsp;&nbsp;For another enhancement, we enhanced the website to be a mobile-friendly website to
				support the mobile users to read our content more conveniently. In order to creating mobile version for
				the website, we have to create another CSS stylesheet and resize the HTML elements like texts and
				images. The responsive CSS works by checking whether the window size is above or below 768px. If it is
				below, the html automatically applies our second CSS stylesheet that reformats the page for a mobile
				friendly experience. Our website supports all type of users' gadgets whether it be laptops, mobiles, or
				tablets to give each user the best experience while exploring our website. You can see this enhancement
				on every page of the website. Try it out on our home page! Don't forget to resize your browser window
				first to see the difference!

			</p>
			<!--Code for this feature-->
			<p>In order to make this feature works, we first need to define the different CSS style sheet in
				&lt;head&gt; tag on HTML page for different screensize conditions. Below is the format that we use:</p>
			<p>
				<code>&lt;link href="styles/style.css" rel="stylesheet" media="screen and (min-width:768px)"/&gt;
					<br>&lt;link href="styles/style2.css" rel="stylesheet" media="screen and (max-width:768px)"/&gt;
					</code>
			</p>
			<p>Then, we will resize the content elements to be bigger on the mobile-version stylesheet. Below are the
				codes comparison between original version and responsive version:</p>
			<div class="column">
				<p>Original Version</p>
				<p>
					<code>
							aside{
							<br>float:right;
							<br>width:30%;
							<br>border-style:solid;
							<br>border-color:#b48811;
							<br>border-radius:14px;
							<br>color: white;
							<br>background-color: #7952B3;
							<br>}
						</code>
				</p>
			</div>
			<div class="column">
				<p>Responsive Version</p>
				<p>
					<code>
							aside{
							<br>float:right;
							<br>width:100%;
							<br>border-style:solid;
							<br>border-color:#b48811;
							<br>border-radius:14px;
							<br>color: white;
							<br>background-color: #7952B3;
							<br>}
						</code>
				</p>
			</div>
			<!--hyperlink to where the enhancement located-->
			<p>
				Please click on this button to link to where this enhancement located.<br>
				<button class="bt" onclick="window.location.href='index.html';">Home Page</button>
			</p>
		</section>
		<section>
			<!--the source of the techniques-->
			<hr>
			<h2><span class="highlight"> Sources of these features</span></h2>

			<ul>
				<li>
					<h3>3D Transformation and Transition</h3>
				</li>
			</ul>
			<p>
				iEatWebsites, 2020. 'Create a 3D Flip Card using CSS 3D Transforms', 22 November, viewed 10 March 2022,
				<a href="https://www.youtube.com/watch?v=mTSBnMeQzuc" target="_blank">
					&#60;https://www.youtube.com/watch?v=mTSBnMeQzuc&#62;,</a>
			</p>
			<p>
				W3 Schools, n.d. ‘CSS 3D Transformation’, viewed 16 March 2022, <a
					href="https://www.w3schools.com/css/css3_3dtransforms.asp" target="_blank">
					&#60;https://www.w3schools.com/css/css3_3dtransforms.asp&#62;,</a>
			</p>
			<p>
				W3 Schools, n.d. ‘CSS Transition’, viewed 16 March 2022, <a
					href="https://www.w3schools.com/css/css3_transitions.asp" target="_blank">
					&#60;https://www.w3schools.com/css/css3_transitions.asp&#62;,</a>
			</p>
			<ul>
				<li>
					<h3>CSS Animation</h3>
				</li>
			</ul>
			<p>
				Jones, de N., n.d. ‘CSS Bounce -in animation’, viewed 20 March 2022, <a
					href="https://codepen.io/nelledejones/pen/gOOPWrK" target="_blank">
					&#60;https://codepen.io/nelledejones/pen/gOOPWrK&#62;,</a>
			</p>

			<ul>
				<li>
					<h3>Responsive Web Design</h3>
				</li>
			</ul>
			<p>
				W3 Schools, n.d. ‘HTML Responsive Web Design’, viewed 28 March 2022, <a
					href="https://www.w3schools.com/html/html_responsive.asp" target="_blank">
					&#60;https://www.w3schools.com/html/html_responsive.asp&#62;,</a>

			</p>
		</section>
	</article>
	<?php
		include ("footer.inc");
	?>
</body>
</html>