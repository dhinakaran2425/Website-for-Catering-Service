<div class="slidetoggleForm">
    
  
</div>
<div class="slidetoggleFormInner">
        <img src="images/enquire.png" class="slideFormBtn">
         <form method="post" action="send_email.php">
                        <div class="qucik-form">
                           <div class="row">
                             <div class="col-xs-12 col-sm-12 col-md-12 ">
                              <div class="form-group">
                                 <input name="name" value="" type="text" class="form-control" placeholder="Name * " tabindex="11" required="">
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 ">
                              <div class="form-group">
                                 <input name="mobile" type="text" class="form-control" placeholder="Phone * " tabindex="14" required="">
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 ">
                              <div class="form-group">
                                 <input name="message" type="text" class="form-control" placeholder="Message * " tabindex="14" required="">
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 ">
                              <button type="submit" class="link btn btn-3 btn-3e ">Send message <i class="fa fa-arrow-right "> </i></button>
                           </div>
                           </div>
                        </div>
                     </form>
    </div>
    <script>
        $(window).scroll(function() {
                if ($(this).scrollTop() > 50){  
                    $('header').addClass("sticky");
                }
                else{
                    $('header').removeClass("sticky");
                }
            });
        </script>
        <script>
            $("form").submit(function(event) {
               var recaptcha = $("#g-recaptcha-response").val();
               if (recaptcha === "") {
                  event.preventDefault();
                  alert("Please check the recaptcha");	  
               }
            });
            </script>