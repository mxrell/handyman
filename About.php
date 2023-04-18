  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column1 {
  float: left;
  width: 20%;
  margin-bottom: 40px;
  padding: 0 8px;
}
@media screen and (max-width: 650px) {
  .column1 {
    width: 100%;
    display: block;
  }
}
@media (max-width: 768px) {
  .row-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .column1 {
    width: 100%;
  }
}
.container1 {
  padding: 0 16px;
  text-align: center;
}
.container1::after, .row1::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: grey;
}
.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button1:hover {
  background-color: #555;
}
.img1{
	display: block;
  margin-left: auto;
  margin-right: auto;
  width:70%; 
  padding: 20px; 
  border-radius: 50%;
}
</style>
<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img src="img/about_img.png" alt="" style=" width: 100%">
				</div>
				<div class="col-md-6">
					<div class="about-text">
						<h3>Handyman</h3>
							Handyman is a platform that offers a comprehensive solution for employers and freelancers looking to connect and work together. Our platform is designed to make the entire process of hiring and working with freelancers as streamlined and straightforward as possible.</p>
						 	<p>Our platform also provides an opportunity to build your reputation and expand your network, as you receive feedback and ratings from employers and connect with other freelancers in our supportive community.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">	
		<div class="about">	
			<div class="row">
				<div class="col-md-4">
					<!-- Heading and para -->
					<div class="block-heading-two">
						<h3><span>Why Choose Us?</span></h3>
					</div>
						<p>Our platform attracts high-quality freelancers from around the world, who possess the necessary skills and experience to complete your project to a high standard.</p>
				</div>
				<div class="col-md-4">
					<div class="block-heading-two">
						<h3><span>Our Solution</span></h3>
					</div>		
					<!-- Accordion starts -->
					<div class="panel-group" id="accordion-alt3">
						<!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
						<div class="panel">	
						<!-- Panel heading -->
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
										<i class="fa fa-angle-right"></i> Quality Freelancers
									</a>
								</h4>
							</div>
							<div id="collapseOne-alt3" class="panel-collapse collapse">
								<!-- Panel body -->
								<div class="panel-body">
									Our platform attracts high-quality freelancers from around the world, who possess the necessary skills and experience to complete your project to a high standard.
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
										<i class="fa fa-angle-right"></i> Easy to Use
									</a>
								</h4>
							</div>
							<div id="collapseTwo-alt3" class="panel-collapse collapse">
								<div class="panel-body">
									Our website is user-friendly and easy to navigate, with clear instructions on how to post a project, hire a freelancer and make payments.
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
										<i class="fa fa-angle-right"></i> Wide Range of Services
									</a>
								</h4>
							</div>
							<div id="collapseThree-alt3" class="panel-collapse collapse">
								<div class="panel-body">
									We offer a wide range of services, from programming and design to writing and translation, ensuring that you can find the right freelancer for your project.
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
										<i class="fa fa-angle-right"></i> Community
									</a>
								</h4>
							</div>
							<div id="collapseFour-alt3" class="panel-collapse collapse">
								<div class="panel-body">
									Our platform offers a supportive and collaborative community of freelancers and employers, allowing you to connect with like-minded professionals and build long-term relationships.
								</div>
							</div>
						</div>
					</div>	
				</div>	<!-- Accordion ends -->	
				<div class="col-md-4">
					<div class="block-heading-two">
						<h3><span>Our Expertise</span></h3>
					</div>								
					<h6>Web Development</h6>
						<div class="progress pb-sm">
							<!-- White color (progress-bar-white) -->
							<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
						<h6>Designing</h6>
							<div class="progress pb-sm">
								<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
							<h6>User Experience</h6>
							<div class="progress pb-sm">
								<div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
							<h6>Development</h6>
								<div class="progress pb-sm">
									<div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
										<span class="sr-only">40% Complete (success)</span>
									</div>
								</div>
							</div>
						</div>		 
						<br>
						<!-- Our Team starts -->
						<!-- Heading -->
						<div class="block-heading-six">
							<h3 class="bg-color">Our Team</h3>
						</div>
						<br>	
						<!-- Our team starts -->						
						<div class="row1">
							<div class="column1">
           			<div class="card">
               			<img class="img1" src="img/team2.jpg" alt="">
               				<div class="container1">
                 				<h5>Lindsy Lou Capuyan</h5>
                 					<p class="title">Programmer</p>
                 					<!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
               				</div>
           			</div>
        			</div>
  						<div class="column1">
    						<div class="card">
      							<img class="img1"src="img/team1.jpg" alt="">
      							<div class="container1">
        							<h5>Zahra Vette Luangco</h5>
        							<p class="title">Asst. Programmer</p>
        							<!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
      							</div>
    						</div>
  						</div>
             	<div class="column1">
              	<div class="card">
                  <img class="img1" src="img/team3.jpg" alt="">
                 	<div class="container1">
                    <h5>Yana Go</h5>
                    <p class="title">Document Specialist</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
                  </div>
              	</div>
             	</div>
              <div class="column1">
                <div class="card">
                  <img class="img1" src="img/team4.jpg" alt="">
                  <div class="container1">
                    <h5>Ericka Mhae Jinete</h5>
                      <p class="title">Documant Specialist</p>
                      <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
                  </div>
                </div>
              </div>
              <div class="column1">
                <div class="card">
                  <img class="img1" src="img/team5.jpg" alt="">
                    <div class="container1">
                      <h5>Angel Largado</h5>
                      <p class="title">Document Specialist</p>
                      <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p> -->
                    </div>
                  </div>
               	</div>
  						</div>
						<!-- Our team ends -->
		</div>
	</section><br><br>
</body>
</html>