$(document).ready(function(){  
$("#submit").click(function(){
var name = $("#name").val();
var msg = $("#msg").val();

if(name ==''|| msg==''){
alert("Some fields are blank");   	
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("process.php",{
 Name: name,
 Message: msg
},
			function(data) {
			//alert(data);
			$('#form')[0].reset(); //To reset form fields after submission

			$('#alert').animate({ //for fade in animation
				opacity:'show',
				height:'show',
				marginTop:'show',
				marginBottom:'show',
				paddingTop:'show',
				paddingBottom:'show'
			});
			
				$('#alert').fadeTo(2000,500).slideUp(500,function(){ //fade out
					$('#alert').addClass('hiden'); //adds a class .hidden
				});
		
			});
    
    }
});
});

	