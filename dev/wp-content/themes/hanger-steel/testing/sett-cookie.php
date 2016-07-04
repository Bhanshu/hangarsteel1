<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script-->
 <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<form id="Form" method="post" action="">
                       <div>
                            <label for="Name"> Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                          <div>
                            <label for="number">Phone</label>
                            <input type="text" name="phone" id="phone">
                        </div>

                        <div>
                            <label for="Email1"> Email</label>
                            <input type="email" name="email" id="email">
                        </div>
							    <input name = "send1" type = "submit" id = "send" 
                              value = "send">
 </form>
 <?php
 
if($_COOKIE['bhanu@gmail.com'] == 'bhanu@gmail.com')
{ 
echo"1";
}
?>
 <script>
jQuery(document).on( 'click', '#send', function(e) {
e.preventDefault();
var name = $('#name').val();

var phone = $('#phone').val();

var email = $('#email').val();

if(name=='' || phone=='' ||email=='' ) {
jQuery('#form').html('At least one of the form fields is empty.');
return false;
} else {
         jQuery.ajax({
           type: 'POST',
           url: 'http://hanger-steel.stagingdevsite.com/dev/wp-content/themes/hanger-steel/testing/get-cookie.php',
           data:{name:name,
		   phone:phone,
		   email:email},



           success: function(data) {
jQuery("#form").html(data);
           jQuery('#done').html('form submitted successfully.');
           }
         });
}
});
</script>