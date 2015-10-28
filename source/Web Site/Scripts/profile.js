$(function(){
    var done;
    var password;
    if(!done){
    var session;
      $.ajaxSetup({cache: false})
      $.get('getPassword.php', function (data) {
          session = data;
          //alert(session)
           sessionObj = JSON.parse(session)
           password = sessionObj.Password
      });
}
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
  $('#cancelProfile').click(function(){
    $('#Profile').removeClass('hidden')
    $('#ProfileForm').addClass('hidden');
  })


  $('.has-feedback  .form-control').blur(function(){
     var formItem = $(this);
      var value =  formItem.val()

    switch(this.name)
    {
        case "PIN":
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
    
        break;
        case "Phone":
        if(!value.match(/^\d{10}$/))
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
        break;
        case "Gender":
        value = value.toLowerCase()
        if(!(value=="male"||value=="female"||value=="others"))

      {
        formItem.next().removeClass('glyphicon-ok')
        formItem.next().addClass('glyphicon-remove')
        formItem.parent().removeClass('has-success')
        formItem.parent().addClass('has-error')
      } 
      else
      {
        formItem.val(value.charAt(0).toUpperCase() + value.slice(1));
        formItem.next().removeClass('glyphicon-remove')
        formItem.next().addClass('glyphicon-ok')
        formItem.parent().addClass('has-success')
        formItem.parent().removeClass('has-error')
      } 
        break;
        case "Email":
        value = value.toLowerCase()
        if(!value.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i))

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
        break;
        case "DOB":
        
        if(value=="")

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
        break;

        case "OldPassword":
        if(value!=password)

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
        break;

        case "NewPassword":
        case "ConfirmPassword":

        newPass = $('input[name="NewPassword"]')
        conPass = $('input[name="ConfirmPassword"]')

        if(conPass.val()!=newPass.val())

      {
        conPass.next().removeClass('glyphicon-ok')
        conPass.next().addClass('glyphicon-remove')
        conPass.parent().removeClass('has-success')
        conPass.parent().addClass('has-error')
        newPass.next().removeClass('glyphicon-ok')
        newPass.next().addClass('glyphicon-remove')
        newPass.parent().removeClass('has-success')
        newPass.parent().addClass('has-error')
      } 
      else
      {
        conPass.next().removeClass('glyphicon-remove')
        conPass.next().addClass('glyphicon-ok')
        conPass.parent().addClass('has-success')
        conPass.parent().removeClass('has-error')
        newPass.next().removeClass('glyphicon-remove')
        newPass.next().addClass('glyphicon-ok')
        newPass.parent().addClass('has-success')
        newPass.parent().removeClass('has-error')
      } 
        break;

        default:
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

        //alert("actual password = " + password);
        

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

      var Fname  = $('#Fname')
     var Lname = $('#Lname')
      var Email = $('#Email')
      var Phone = $('#Phone')
      var DOB = $('#DOB')
      var Gender = $('#Gender')
     if(Fname.hasClass('has-success')&&Lname.hasClass('has-success')&&Email.hasClass('has-success')&&Phone.hasClass('has-success')&&DOB.hasClass('has-success')&&Gender.hasClass('has-success'))
      {
        $('#saveProfile').removeAttr('disabled');
      }
      var Old  = $('#OldPassword')
     var New = $('#NewPassword')
      var Confirm = $('#OldPassword')
      if(Old.hasClass('has-success')&&New.hasClass('has-success')&&Confirm.hasClass('has-success'))
      {
        $('#savePassword').removeAttr('disabled');
      }
     //alert($('div').hasClass('has-error'))
   //  alert()

  })
  
}) 
