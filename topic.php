<!DOCTYPE html>
<html lang = "en">
<!-- Has a head with title and meta tags as specified in template -->
<head>
	<?php
		include ("header.inc");
	?>
</head>
<body>
		<!-- Uniform header -->
		<header>
			<h1><span class="highlight">Bootstrap</span></h1>
		</header>
		<?php
		include ("menu.inc");
		?>
		<!-- Content -->
		<article>
			<!-- Quick summary about Bootstrap -->
			<section>
				<hr>
				<!-- What is the technology? -->
				<h2 id="about"><span class="highlight"> About Bootstrap </span></h2>
				<p> The open source and free Bootstrap is the most popular HTML, CSS, and JavaScript framework for designing and prototyping responsive, front-end, mobile-first websites. </p>				
				<ul>
					<li> It comes with many built-in components, which you can drag and drop to assemble responsive web pages. </li>
					<li> It contains design templates for typography, forms, buttons, navigation, and other interface components. </li>
					<li> It contains three main files: 
						<ul>
							<li> bootstrap.js (A JavaScript / jQuery framework) </li>
							<li> bootstrap.css (A CSS framework) </li>
							<li> glyphicons (A set of icon fonts) </li>
						</ul>
					</li>
					<!-- What groups are responsible for managing it? -->
					<li> Bootstrap is maintained by a small team of 12 developers (including the founders) on GitHub. </li>
				</ul>
				<!-- A table containing some data related to your topic -->
				<!-- Advantages and Disadvantages of using Bootstrap -->
				<table id="topicTable">
					<tr>
						<th><span class="highlight"> Advantages </span></th>
						<th><span class="highlight"> Disadvantages </span></th>
					</tr>
					<tr>
						<td>
							<!-- At least one ordered list -->
							<ol>
								<li> Easy to use: Anybody with just basic knowledge of HTML and CSS can start using Bootstrap </li>
								<li> Responsive features: Bootstrap's responsive CSS adjusts to phones, tablets, and desktops </li>
								<li> Browser compatibility: Bootstrap is a consistent framework, compatible with all modern browsers including Chrome, Firefox, Internet Explorer, Edge, Safari, and Opera </li>
							</ol>
						</td>
						<td> 
							<!-- At least one ordered list -->
							<ol>
								<li> Since a framework has an inbuilt standard set of grids and selectors and other codes, it restricts your design. So for any new kind of design idea that you want to implement, you would have to learn a new framework. </li>
								<li> The extra code comes up from the list of predefined codes that come with the framework. You can choose not to use them through the frameworks you use. </li>
								<li> While we can build a responsive website with Bootstrap, the end results can be quite a bit heavy for the users in terms of slower loading times, as well as battery drain issues. </li>
							</ol>
						</td>
					</tr>
				</table>
				<hr>
			</section>
			<!-- More than one section -->
			<!-- Why use it? -->
			<section>
				<!-- Purpose / function / features -->
				<h2 id="why"><span class="highlight"> Why use Bootstrap? </span></h2>
				<ul>
					<li> <em> Mobile-first approach: </em> In the Bootstrap 3 and above framework, there is a pre-existing mobile-first style through all the library and not as separate files. </li>
					<li> <em> Very simple and easy to learn: </em> If you know HTML and CSS, you can quickly start working with Bootstrap, and its documentation is provided on the official site. </li>
					<li> <em> Responsive look: </em> The web pages that are designed by using the Bootstrap framework has responsive CSS that can adjust to the screen according to the size of desktops, tablets, notebooks, and mobiles. </li>
					<li> <em> Customization: </em> It provides some built-in components and functionalities that are helpful for customizing. </li>
					<li> <em> Clean UI for Developers: </em> Bootstrap framework provides a new and consistent result for building user interfaces in web pages. </li>
				</ul>
				<hr>
			</section>
			<!-- More than one section -->
			<!-- Beginning of Bootstrap -->
			<section>
				<!-- Who developed it? When? Why? -->
				<h2 id="development"><span class="highlight"> Developing Bootstrap </span></h2>
				<p> <em> â€œA year-and-a-half ago, a small group of Twitter employees set out to improve our teamâ€™s internal analytical and administrative tools. After some early meetings around this one product, we set out with a higher ambition to create a toolkit for anyone to use within Twitter, and beyond. Thus, we set out to build a system that would help folks like us build new projects on top of it, and Bootstrap was conceived.â€ </em> </p>
				<p> Bootstrap, originally named Twitter Blueprint, was initially created in mid-2010 and then released in August 2011, by Mark Otto and Jacob Thornton at Twitter as a framework to encourage consistency across internal tools. Before Bootstrap, various libraries were used for interface development, which led to inconsistencies and a high maintenance burden. There was a need to standardize the frontend toolsets of engineers across the company. </p>
				<hr>
			</section>
			<!-- More than one section -->
			<!-- Current Bootstrap -->
			<!-- Basic Bootstrap File Structure -->
			<section>
				<h2 id="structure"><span class="highlight"> Bootstrap File Structure </span></h2>
				<!-- At least one appropriate image related to topic -->
				<!-- The image should be a figure element with captions -->
				<figure>
					<img src="images/filestructure.png" alt="Basic File Structure">
					<figcaption> Bootstrap file structure </figcaption> 
				</figure> 
					<p> This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. As visible in the image, it contains three main files, bootstrap.css (a compiled CSS framework), bootstrap.js (a compiled JavaScript / jQuery framework) and glyphicons (A set of icon fonts).
				<hr>
			</section>
			<!-- More than one section -->
			<!-- Elevating Bootstrap with Tools -->
			<section>
				<h2 id="tools"><span class="highlight"> Bootstrap Tools </span></h2>
					<p> <a href = "https://www.codeply.com/" target = "_blank"> Bootply </a> is known as the playground for Bootstrap. Itâ€™s not only a Bootstrap editor and builder, but itâ€™s also home to an extensive code repository. The editor enables you to drag and drop Bootstrap components then edit the code as you please. Bootply is also integrated with other popular Bootstrap plugins, micro libraries, and frameworks. Some of the tools you can leverage are Font Awesome, jQuery + jQuery UI, Bootstrap Select, FuelUX, AngularJS, Google Maps, and much more. Pricing: Free or $4/month to download source code. </p>
					<p> <a href = "https://bootstrapbay.com/blog" target = "_blank"> Bootstrap Starter Kit </a> is more than just another Bootstrap template, itâ€™s a collection of unique, professional Content Blocks, that can be pieced together by you to create unlimited layouts to suit any business. Use the drag and drop HTML Builder to create your perfect site quickly and visually or copy and-paste your chosen blocks for greater control. Whatever your level of knowledge using Bootstrap and HTML, anyone can build a great responsive Bootstrap website. </p>
					<p> <a href = "https://divshot.com/" target = "_blank"> Divshot </a> is not only a visual Bootstrap editor, but also an application grade hosting environment built for developers. The Bootstrap builder (known as Architect) enables you to create production quality code thatâ€™s properly nested with every new component. It also supports all other popular CSS frameworks like Foundation and Racthet, with new ones being added regularly. Pricing: Free â€“ $100/month (with hosting). </p>
					<p> <a href = "https://pinegrow.com/" target = "_blank"> Pinegrow </a> is a desktop app for Mac, Windows & Linux that lets you mock-up & design webpages faster with multipage editing, CSS & LESS styling and smart components for Bootstrap, Foundation, and other frameworks. The stylesheet editor lets you attach, detach, duplicate, and reorder stylesheets. Pinegrow doesnâ€™t try to take over your workflow. Rather, it is a tool that can be used to save effort and time, where it makes sense. Pricing: $49.95 for a onetime personal license. </p> 
					<p> <a href = "https://www.layoutit.com/" target = "_blank"> LayoutIt </a> is a simple but effective Bootstrap interface builder to make your frontend coding easier. You can start from scratch or use one of the base templates. Simply drag and drop the Bootstrap elements onto the canvas and download the HTML. From there, you can add your own styling and integrate it with any programming language. Pricing: Free </p>
					<p> <a href = "https://pingendo.com/" target = "_blank"> Pingendo </a> is a visual desktop application that helps you to prototype responsive web pages based on Bootstrap. Like most Bootstrap builders, you can add content from a rich collection of ready to use Bootstrap elements. You can start with a blank canvas or start your pages from a collection of ready to use layouts. From there you can drag, resize, and customize your contents. Pricing: Free Update! </p>
					<hr>
			</section>
			<!-- More than one section -->
			<!-- Related technologies and competition -->
			<section>
				<!-- Hierarchically structured headings -->
				<h2 id="competitors"> <span class="highlight"> Competitors </span> </h2>
				<h3> Foundation by Zurb </h3>
				<p> "A Framework for any device, medium, and accessibility." is what they call themselves and they certainly are true. With all the perks of an advanced framework, Foundation is the strongest alternative to Bootstrap. It is being used by some of the biggest organizations in the world for example, Adobe, Amazon, HP, eBay etc to quote a few. It included all the necessary components of an application like a responsive grid, buttons, basic typography, and many other UI elements. </p>
				<p>Not only this, but they also have â€˜Foundation for Emailsâ€™ which is a framework to code responsive HTML emails. This gains an additional advantage over Bootstrap. </p>
				<h3> Bulma </h3>
				<p> Bulma came to market around 6 years ago and became instantly popular. It was one of the first CSS frameworks to have implemented a full-fledged flexbox grid. Except this, it has a huge selection of components needed to code any kind of website. Bulma comes with a beautiful range of colours out-of-the-box, and it wonâ€™t be wrong if we call it the most beautiful framework out there in the market. It can be used directly to get nice-looking websites with very least effort. </p>
				<p> The only downside it has as compared to Bootstrap and Foundation is, it is only a CSS framework, no JavaScript. So, you will have to write your own JavaScript or jQuery to toggle your dropdowns or perform other basic interactions of the sort. Overall, it is a great alternative to Bootstrap, which is also being updated very frequently. </p>
				<h3> Skeleton </h3>
				<p> Skeleton is a lightweight CSS framework, majorly popular for its 12-column fluid grid, which consists of rows and columns, like other CSS grids. The newer version of Skeleton adopts a mobile-first approach, which enables the layout to be the centre of attraction, irrespective of the screen size. Being lightweight, Skeleton can speed up the front-end development process. </p>
				<p> Skeleton is the perfect alternative to Bootstrap if you wish to create something small and straightforward without having to go through heaps of utilities of larger frameworks. Skeleton will provide the developer with fundamental components such as buttons, lists, forms, tables and more, which are enough to get them started. </p>
				<h3> Pure </h3>
				<p> Pure.css is a CSS framework bunch of CSS modules clustered together. The crux of Pure lies in its weight. It is incredibly lightweight, as it has been crafted keeping mobile devices in mind, in which small file size is imperative. The framework is purely CSS in nature, doing justice to its name. </p>
				<p> It allows the developers to create responsive layouts by using grids, menus, menus, forms, buttons and much more. This small yet useful framework outperforms Bootstrap when it comes to mobile devices. </p>
				<h3> Groundwork </h3>
				<p> Groundwork is a responsive, lightweight, flexible front-end framework, which allows developers to create scalable and accessible web applications. It makes use of an exceedingly configurable, responsive, and adaptive fluid grid system, which enables the framework to work on any type of screenâ€”mobile phones notebooks and even big screens. </p>
				<p> The framework is easy to customize, and you can put in your own styles and bolt for additional functionality. The framework has been built on top of Sass and Compass and includes the tools one needs to create responsive headings, text blocks, and tablets. </p>
				<hr>
			</section>
			<!-- More than one section -->
			<!-- Predicted future of technology -->
			<!-- Explaining its growth or decline -->
			<section>
				<h2 id="future"> <span class="highlight"> Future of Bootstrap </span> </h2>
				<p> Currently, Bootstrap is the <strong> second most starred project </strong> on GitHub, with over <strong> 95 thousand stars </strong> and <strong> more than 40 thousand forks </strong>, proving that it is still useful in 2022 with the rise of JavaScript front-end frameworks and the constant changes in technology and tooling. </p>
				<p> Moreover, on GitHub, Bootstrap surpasses emerging frameworks in popularity, and with a healthy level of active development, Bootstrap is improving almost every day and working toward its next goal. </p>
				<p> To maintain its growth, Bootstrap is listening to its customer's critics. One such criticisms of Bootstrap is its reliance on jQuery, which doesn't seem to play well with many of today's front-end development options. In Bootstrap 5, jQuery has been removed, which opens a lot of doors for developers looking to move away from this particular dependency. </p>
				<p> Such evidence proves that easy-to-use Bootstrap will continue to grow amongst its customer base. </p> 
				<hr>
			</section>
			</article>
			<section>
			<!-- More than one section -->
			<!-- At least one definition List -->
				<!-- An aside with appropriate content -->
				<aside>
				<hr>
				<!-- An aside with appropriate content -->
					<!-- An unordered list -->
					<ul>
						<li> Downloading Bootstrap from <a href="https://getbootstrap.com/" target = "_blank"> getbootstrap.com </a> </li>
						<li> Including Bootstrap from a <a href="https://www.bootstrapcdn.com/" target = "_blank"> CDN </a> </li>
					</ul>
				<hr>
				<!--Enhancement: 3D Transformation and Transition begin -->
				<h2> <span class="highlight">Definitions</span> </h2>
					
						<div class="container -column">
							<div class="card-holder">
							    <div class="card -small -back -flipped">
								<dl>
							      <dt>Bootstrap</dt>
							      <dd>
							        The most popular HTML, CSS, and JavaScript framework for designing and prototyping responsive, front-end, mobile-first websites.
							      </dd>
								 </dl>
							    </div>

							    <div class="card -small -front ">
										<p>Bootstrap</p>
							    </div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
								<div class="card -small -back -flipped">
								<dl>
							      <dt>jQuery</dt>
							      <dd>>
							        A very extensive JavaScript database, which increases compatibility across browsers and simplifies JavaScript.
							      </dd>
								 </dl>
							    </div>
							    <div class="card -small -front ">
										<p>jQuery</p>
							    </div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
								<div class="card -small -back -flipped">
								<dl>
							      <dt>Responsive Web Design</dt>
							      <dd>
							        It is about creating web sites which automatically adjust themselves to look good on all devices, from small phones to large desktops.
							      </dd>
								</dl>
							    </div>
							    <div class="card -small -front ">
										<p>Responsive Web Design</p>
							    </div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
								<div class="card -small -back -flipped">
								<dl>
							      <dt>Bootply</dt>
							      <dd>
							        It is known as the playground for Bootstrap. Itâ€™s not only a Bootstrap editor and builder, but itâ€™s also home to an extensive code repository.
							      </dd>
								</dl>
							    </div>
							    <div class="card -small -front">
										<p>Bootply</p>
							    </div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
								<div class="card -small -back -flipped">
									<dl>
										<dt>Jetstrap</dt>
										<dd>
											A premium web-based interface building tool for Bootstrap 3 that helps developers and designers get websites up and running fast.
										</dd>
									</dl>
								</div>
								<div class="card -small -front ">
										<p>Jetstrap</p>
								</div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
								<div class="card -small -back -flipped">
									<dl>
										<dt>Divshot</dt>
										<dd>
											It is not only a visual Bootstrap editor, but also an application grade hosting environment built for developers.
										</dd>
									</dl>
								</div>
								<div class="card -small -front ">
										<p>Divshot</p>
								</div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
									<div class="card -small -back -flipped">
									<dl>
										<dt>Pinegrow</dt>
										<dd>
											A desktop app for Mac, Windows & Linux that lets you mock-up & design webpages faster with multipage editing, CSS & LESS styling and smart components for Bootstrap, Foundation, and other frameworks.
										</dd>
									</dl>
									</div>
									<div class="card -small -front ">
										<p>Pinegrow</p>
									</div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
									<div class="card -small -back -flipped">
									<dl>
										<dt>LayoutIt</dt>
										<dd>
											A simple but effective Bootstrap interface builder to make your front-end coding easier.
										</dd>
									</dl>
									</div>
									<div class="card -small -front ">
										<p>LayoutIt</p>
									</div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
									<div class="card -small -back -flipped">
									<dl>
										<dt>Pingendo</dt>
										<dd>
											A visual desktop application that helps you to prototype responsive web pages based on Bootstrap.
										</dd>
									</dl>
									</div>
									<div class="card -small -front ">
										<p>Pingendo</p>
									</div>
							</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
							<div class="card-holder">
									<div class="card -small -back -flipped">
									<dl>
										<dt>Bootstrap Starter Kit</dt>
										<dd>
											It is more than just another Bootstrap template, itâ€™s a collection of unique, professional Content Blocks, that can be pieced together by you to create unlimited layouts to suit any business.
										</dd>
									</dl>
									</div>
									<div class="card -small -front ">
										<p>Bootstrap Starter Kit</p>
									</div>
							</div>
						</div>
					
					<!--Enhancement: 3D Transformation and Transition end-->
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<!-- Link to references as not all data could be footnotes-->
					<p> To view the references used for this page, visit the <a href = "references.html" target = "_blank"> References page </a> </p>
				</aside>
		</section>
	<!-- Does not contain any deprecated elements/attributes -->
	<!-- Does not use iframe elements -->

	<?php
		include ("footer.inc");
	?>
</body>
</html>