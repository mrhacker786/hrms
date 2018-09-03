function login() {
	var username = $("#txtusername").val();
	var password = $("#txtpassword").val();

	if (username == "" || password == "") {
		alert("Must Fill All Fields");
	}
	else{
		$.ajax({
	      url:"includes/action.php",
	      method:"POST",
	      data:{
	          user: username,
	          pass: password
	      },

	      success:function(data){
	          if (data == "login successfully") 
	          {
	            $("#login-form").fadeOut(500);
	            $("#login-succ").fadeIn(1000);
	            setTimeout(function(){window.location.href = "home.php"},1000);
	          }
	          else if(data == "no data")
	          {
	            alert("use right credentials");
	            $('#txtusername').val("");
	            $('#txtpassword').val("");
	          }
	      }
	  });

	}
}