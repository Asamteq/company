<?php $this->load->view('header');?>
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
                        <div><?php if(!empty($this->session->flashdata('message_name'))) {
                                echo $this->session->flashdata('message');
                            }?>
            
                        </div>
                        <form action="<?php echo $this->config->item('base_url')?>front/contact" method="post">
                            <input type="text" placeholder="Enter your Name" name="name" class="form-control">
                            <input type="text" placeholder="Enter your Email" name="email" class="form-control">
                            <input type="text" placeholder="Enter your Phone number"  name="phone"class="form-control">
                            <textarea name="message" class="form-control">
                            </textarea>
                            <input type="submit"class="btn btn-primary btn-lg pull-right" value="Send" id="contact-btn-style"/>
                        </form>
                     </div>           
                 </div>
                 <div class="col-md-6-offset-6"></div>
             </div> 
         </div>
     </div><!--end of complain area section-->
     <!--creation of footer section-->
     <?php $this->load->view('footer')?>
 </body>   
</html>
