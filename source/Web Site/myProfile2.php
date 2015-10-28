<script src="Scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(function(){
  $('#editAddress').click(function(){

    $('#Address').addClass('hidden')
    $('#AddressForm').removeClass('hidden');
  })
  $('#editProfile').click(function(){

    $('#Profile').addClass('hidden')
    $('#ProfileForm').removeClass('hidden');
  })
  $('#cancelAddress').click(function(){
    $('#Address').removeClass('hidden')
    $('#AddressForm').addClass('hidden');
  })
  $('.has-feedback  .form-control').blur(function(){
     var formItem = $(this);
      var value =  formItem.val()

      if(this.name=="PIN"){
        
      if(!value.match(/^\d{6}$/))
      {
        formItem.next().removeClass('glyphicon-ok')
        formItem.next().addClass('glyphicon-remove')
        formItem.parent().removeClass('has-success')
        formItem.parent().addClass('has-error')
      } 
      else
      {
        formItem.next().removeClass('glyphicon-remove')
        formItem.next().addClass('glyphicon-ok')
        formItem.parent().addClass('has-success')
        formItem.parent().removeClass('has-error')
      } 
    }
     else{
      if(formItem.val() == "")
      {
        formItem.next().removeClass('glyphicon-ok')
        formItem.next().addClass('glyphicon-remove')
        formItem.parent().removeClass('has-success')
        formItem.parent().addClass('has-error')
      } 
      else
      {
        formItem.next().removeClass('glyphicon-remove')
        formItem.next().addClass('glyphicon-ok')
        formItem.parent().addClass('has-success')
        formItem.parent().removeClass('has-error')
      }
      } 
    

     var State  = $('#State')
     var City = $('#City')
      var Country = $('#Country')
      var Pin = $('#PostCode')
      var Line1 = $('#AddressLine1')
      var Line2 = $('#AddressLine2')
     if(Line1.hasClass('has-success')&&Line2.hasClass('has-success')&&Pin.hasClass('has-success')&&Country.hasClass('has-success')&&State.hasClass('has-success'))
      {
        $('#saveAddress').removeAttr('disabled');
      }
     //alert($('div').hasClass('has-error'))
   //  alert()

  })
  
}) 
</script>
<?php
require_once("header.php");
?>
<div class="container">
    <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Personal Info</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Address</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Orders</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            <div class="container">
                                <div class="row">
                                    <div id="Profile">
                                        <div class="col-sm-3 col-md-3">
                                            <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
                                                alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                   
                                          <?php
                                          
                                        echo "
                                        <blockquote>
                                            <h3>
                                        <p>$_SESSION[Fname] $_SESSION[Lname]</p> <small><cite title='Source Title'>$_SESSION[State], $_SESSION[Country]  <i class='glyphicon glyphicon-map-marker'></i></cite></small>
                                         </blockquote>
                                        <p> <i class='glyphicon glyphicon-envelope'></i> $_SESSION[Email]
                                            
                                            <br /> <i class='glyphicon glyphicon-phone'></i> $_SESSION[Phone]
                                            <br /> <i class='glyphicon glyphicon-gift'></i> $_SESSION[DOB]
                                            <br /> <i class='glyphicon glyphicon-user'></i> $_SESSION[Gender]
                                        </p>";
                                        ?>
                                            </h3>
                                        </div>
                                        <div class = "col-sm-3 col-md-3">
                                          <button id = "editProfile" class='btn btn-link btn-primary'><i class="glyphicon glyphicon-pencil"></i> Edit Profile</button>
                                        </div>
                                    </div>
                                    <div id = "ProfileForm" class="col-md-6 col-md-offset-3 hidden">
                               <form class="form-horizontal" role="form"  method = "post" action="updateProfile.php" >

                                <fieldset>

          
                                  <legend>Profile Details</legend>

                                    <div  class="form-group has-feedback">
                                      <label class="col-sm-2 control-label" for="textinput">* First Name</label>
                                      <div id="Fname" class="col-sm-10" >
                                        <input name="Fname" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-2 control-label" for="textinput">* Last Name</label>
                                      <div id="Lname" class="col-sm-10">
                                        <input name="Lname" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <div class="form-group ">
                                      <label class="col-sm-2 control-label" for="textinput">* Email</label>
                                      <div id ="Email" class="col-sm-10">
                                        <input name="Email" type="text" id="Address Line 3" class="form-control">

                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-2 control-label" for="textinput">* DOB</label>
                                      <div id="DOB" class="col-sm-10">
                                        <input name="DOB" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-2 control-label" for="textinput">* Gender</label>
                                      <div id="Gender" class="col-sm-4">
                                        <input name="Gender" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                      <label class="col-sm-2 control-label" for="textinput">* Phone</label>
                                      <div id="Phone" class="col-sm-4">
                                        <input name="Phone" type="text"  class="form-control">
                                        <span class='glyphicon form-control-feedback'></span>
                                      </div>
                                    </div>  

                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <div class="pull-right">
                                          
                                          <button id="saveProfile" type = "submit" value="submit" class="btn btn-primary" disabled="disabled" >Save</button>
                                        </div>
                                      </div>
                                    </div>


                                 </fieldset>
                                </form>
                               <button id ="cancelProfile" class="btn btn-default pull-right">Cancel</button>
                             </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            <div class = "container">
                               <div class="row" >
                                    <div id="Address">
                    <div class="col-sm-3 col-md-3">
                    <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
                    alt="" class="img-rounded img-responsive" />
                    </div>
                     <div class="col-sm-6 col-md-6 ">
                    <blockquote>
                        <h3>
                          <?php
                  
                echo "<p>$_SESSION[Fname] $_SESSION[Lname]</p> <small><cite title='Source Title'>$_SESSION[State], $_SESSION[Country]  <i class='glyphicon glyphicon-map-marker'></i></cite></small>
            </blockquote>
            <h3><p> $_SESSION[Line1]<br>
                        $_SESSION[Line2],$_SESSION[Line3] <br>
                        $_SESSION[City]<br>
                        $_SESSION[Pincode]<br>

                    </p>
                </h3>
";
            ?>
                        
                                    </h3>
                </div>
                <div class = "col-sm-3 col-md-3">
                    <button id = "editAddress" class='btn btn-link btn-primary'><i class="glyphicon glyphicon-pencil"></i> Edit Address</button>
                 </div>
            </div>
            <div id = "AddressForm" class="col-md-6 col-md-offset-3 hidden">
      <form class="form-horizontal" role="form"  method = "post" action="updateAddress.php" >

        <fieldset>

          <!-- Form Name -->
          <legend>Address Details</legend>

          <!-- Text input-->
          <div  class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Line 1</label>
            <div id="AddressLine1" class="col-sm-10" >
              <input name="Line1" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Line 2</label>
            <div id="AddressLine2" class="col-sm-10">
              <input name="Line2" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group ">
            <label class="col-sm-2 control-label" for="textinput">Line 3</label>
            <div class="col-sm-10">
              <input name="Line3" type="text" id="Address Line 3" class="form-control">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* City</label>
            <div id="City" class="col-sm-10">
              <input name="City" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* State</label>
            <div id="State" class="col-sm-4">
              <input name="State" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* PIN</label>
            <div id="PostCode" class="col-sm-4">
              <input name="PIN" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group has-feedback">
            <label class="col-sm-2 control-label" for="textinput">* Country</label>
            <div id="Country" class="col-sm-10">
              <input name="Country" type="text"  class="form-control">
              <span class='glyphicon form-control-feedback'></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                
                <button id="saveAddress" type = "submit" value="submit" class="btn btn-primary" disabled="disabled" >Save</button>
              </div>
            </div>
          </div>


        </fieldset>
      </form>
      <button id ="cancelAddress" class="btn btn-default pull-right">Cancel</button>
    </div>
                               </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
	</div>
</div>

<br/>