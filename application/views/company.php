<?php $this->load->view('header');?>
 <div id="hero-image" class="parallex">
 	<div id="hero-text">
     	<h3>Welcome to Web Design & Development</h3>
       	<h1>Web Design & Development Services</h1>
        <h2>Creating solutions With More Features To Reach The Market Faster</h2> 
        <div id="info-box">
        	<h2>Get Free Quets<br>Contact to our site</h2>
        </div>
     </div>
</div><!--end of hero data-->
<div id="about-data">
    <h3>About</h3>
    <div class="underline"></div>
     <div class="container-fluid">
        <div class="row">
         <div class="col-md-6">
             <div id="about-content">
                <h4>About</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <br>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It<br> was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                 <a href=""></a>
            </div>
             </div>
         <div class="col-md-6">
             <img src="<?php echo $this->config->item('base_url')?>assets/images/about-picture.jpg" width="100%">
            </div>
         </div>    
     </div>
 </div><!--end of about data-->
                    <!--creation of services section-->
    <div id="services-section">
        <h3>Services We Offered</h3>
        <div class="underline-services"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  col-md-offset services-coloumn-style">
                    <h4>Web Designing</h4>
                    <img src="<?php echo $this->config->item('base_url')?>assets/images/web-design.jpg" width="100%">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 col-md-offset-1 services-coloumn-style">
                    <h4>Web Development</h4>
                     <img src="<?php echo $this->config->item('base_url')?>assets/images/web-develop.jpg" width="100%">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-3 col-md-offset-1 services-coloumn-style">
                    <h4>Seo</h4>
                      <img src="<?php echo $this->config->item('base_url')?>assets/images/seo.jpg" width="100%">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                  <div class="col-md-3  col-md-offset services-coloumn-style">
                    <h4>Mobile Development</h4>
                      <img src="<?php echo $this->config->item('base_url')?>assets/images/mobile-develop.png" width="100%">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                 <div class="col-md-4 col-md-offset-1 services-coloumn-style">
                    <h4>Ios Development</h4>
                    <img src="<?php echo $this->config->item('base_url')?>assets/images/ios-develop.jpg" width="80%">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-3 col-md-offset-1 services-coloumn-style">
                    <h4>Game Development</h4>
                    <img src="<?php echo $this->config->item('base_url')?>assets/images/game-develop.jpg" width="100%">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                </div>
            </div>
        </div><!--end of services section-->
    <?php $this->load->view('footer')?>
 
 
 
 
 
 </body>   
</html>
