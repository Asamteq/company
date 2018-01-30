<DOCTYPE HTML>
<html>
	<head>
   	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>ASAM TEQ</title>
        <link rel="stylesheet" href="<?php echo $this->config->item('base_url')?>assets/css/bootstrap.css" type="text/css">
         <link rel="stylesheet" href="<?php echo $this->config->item('base_url')?>assets/css/style.css" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <script src="<?php echo $this->config->item('base_url')?>assets/js/jquery.js" type="text/JavaScript"></script>
        <script src="<?php echo $this->config->item('base_url')?>assets/js/bootstrap.js" type="text/JavaScript"></script>
    </head>
 <body>
 <div id="navigation-section">
 	<div id="logo">
    </div>
 	<div id="menu">
		<ul>
        	<li><a href="<?php echo $this->config->item('base_url')?>front">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services-section">Services</a></li>
            <li><a href="">Our Work</a></li>
            <li><a href="">Carrer</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="<?php echo $this->config->item('base_url')?>front/contact" class="btn btn-generic-style">Contact Us</a></li>
        </ul>
    </div>
 </div><!--end of navigation section-->
        <!--creation of contact page of hero image with parallex effeect-->
<div id="contact-hero-image" class="parallex">
     <h3>Get in Touch with Us!!</h3>
</div><!--end of contact us section-->
     <!--creation of request query-->
     <div id="complain-area">
        <h3>For Any Issue Compalin us</h3>
         <div class="container">
             <div class="row" >
                 <div class="col-md-6" id="form-styling" >
                    <div class="form-group">
                        <form action="">
                            <input type="text" placeholder="Enter your Name" class="form-control">
                            <input type="text" placeholder="Enter your Email" class="form-control">
                            <input type="text" placeholder="Enter your Phone number" class="form-control">
                            <textarea row="8" class="form-control">
                            </textarea>
                            <a href="" class="btn btn-primary btn-lg pull-right" id="contact-btn-style">Submit</a>
                        </form>
                     </div>           
                 </div>
                 <div class="col-md-6-offset-6"></div>
             </div> 
         </div>
     </div><!--end of complain area section-->
     <!--creation of footer section-->
     <div id="footer-section">
        <div class="container">
            <div class="col-md-4 footer-information">
                 <h4>Contact Infromation</h4>
                <strong><span class="glyphicon glyphicon-phone"> Phone:</span></strong><label> 923134445588</label><br>
                <strong><span class="glyphicon glyphicon-envelope"> Email:</span></strong>&nbsp;<label> asamtech@gmail.com</label><br>
                <strong><span class="glyphicon glyphicon-facetime-video"> Skype:</span></strong>&nbsp;<label> assamteq@skype.com</label>
            </div>
                <div class="col-md-8">
                    <h4 class="address-heading-styling">Office:&nbsp;&nbsp;&nbsp;Pakistan Office 504 Liberty Tower</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4189.5606058968815!2d74.31772515108666!3d31.469715586419827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391906a9efb63f51%3A0xfdeb76efa466feee!2sNew+Liberty+Tower!5e0!3m2!1sen!2s!4v1516892381035" width="760px" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
         </div>
     </div><!--end of footer section-->
 </body>   
</html>
