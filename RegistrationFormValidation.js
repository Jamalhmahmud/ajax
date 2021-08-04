function validateForm() {
				
				var firstname = document.getElementById('firstname').value;
				var lastname = document.getElementById('lastname').value;
				var gender = document.getElementById('gender').value;
				var dob = document.getElementById('dob').value;
				var presentaddress = document.getElementById('presentaddress').value;
				var permanentaddress = document.getElementById('permanentaddress').value;
				var mobile = document.getElementById('mobile').value;
				var email = document.getElementById('email').value;
				
				
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				var flag7=true;
				var flag8=true;
             
				console.log(firstname);


				if(firstname == "") 
				{
					document.getElementById('errorMsgfirstname').innerHTML = "Add First Name";
					document.getElementById('errorMsgfirstname').style.color = "red";
					//return false;
					flag1 = false;	
				}
				
				else if(lastname == "") 
				{
					document.getElementById('errorMsglastname').innerHTML = "Add Last Name";
					document.getElementById('errorMsglastname').style.color = "red";
					//return false;
					flag2 = false;	
				}

				else if(gender == "") 
				{
					document.getElementById('errorMsggender').innerHTML = "Add Gender";
					document.getElementById('errorMsggender').style.color = "red";
					//return false;	
					flag3 = false;
				}


				else if(dob == "") 
				{
					document.getElementById('errorMsgdob').innerHTML = "Add Date of Birth";
					document.getElementById('errorMsgdob').style.color = "red";
					//return false;	
					flag4 = false;
				}


				


				else if(presentaddress == "") 
				{
					document.getElementById('errorMsgpresentaddress').innerHTML = "Add Present Address";
					document.getElementById('errorMsgpresentaddress').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(permanentaddress == "") 
				{
					document.getElementById('errorMsgpermanentaddress').innerHTML = "Add Permanent Address";
					document.getElementById('errorMsgpermanentaddress').style.color = "red";
					//return false;	
					flag6 = false;
				}


					else if(mobile == "") 
				{
					document.getElementById('errorMsgmobile').innerHTML = "Give Mobile Number";
					document.getElementById('errorMsgmobile').style.color = "red";
					//return false;	
					flag7 = false;
				}




				else if(email == "") 
				{
					document.getElementById('errorMsgemail').innerHTML = "Insert Your Email";
					document.getElementById('errorMsgemail').style.color = "red";
					//return false;	
					flag8 = false;
				}




				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true && flag7==true && flag8 ==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}