<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    
}

</style>

<head>

    <script src="RegistrationFormValidation.js"></script>
    <title>Registration Form</title>

</head>

<body>



    <p id = "t1"> </p>
    
    <script>

        function createAjaxRequest() 

    {
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status ==200)
            {
                console.log("Tridip");

                document.getElementById('t1').innerHTML = xhttp.responseText;
            }
        }

        xhttp.open("GET", "DataBaseForAJAX.php", true);
        xhttp.send();

    }
    </script>





  
  


    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid blue; border-collapse: collapse;">
           
            <tr>
                <td style="border: 2px solid blue; border-collapse: collapse; " width="5%" >
                   
                </td>
                
                <td>
                
                    <table width="250%">
                        <tr>
                            <td colspan="7">
                                <h2> STUDENT REGISTRATION FORM</h2>
                            </td>
                        </tr>
                        


            <form method="post" action="DataBaseForRegistrationForm.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    


                                    First Name: <br>
                                    <input type="text" id="firstname" name="firstname">
                                    <span class="error" id="errorMsgfirstname"></span>
                                    <br> <br>


                                    Last Name: <br>
                                    <input type="text" id="lastname" name="lastname">
                                    <span class="error" id="errorMsglastname"></span>
                                    <br> <br>


                                    Gender:<input type="radio" name="gender" id="gender" value="male">Male
                                    <input type="radio" name="gender" id="gender" value="female">Female
                                    <input type="radio" name="gender" id="gender" value="other">Other
                                   <span class="error" id="errorMsggender"></span>
                                    <br> <br>


                                    Date of Birth: <br>
                                    <input type="Date" id="dob" name="dob">
                                    <span class="error" id="errorMsgdob"></span>
                                    <br> <br>



                                    Present Address : <br>
                                    <input type="text" id="presentaddress" name="presentaddress">
                                    <span class="error" id="errorMsgpresentaddress"></span>
                                    <br> <br>


                                    Permanent Address : <br>
                                    <input type="text" id="permanentaddress" name="permanentaddress">
                                    <span class="error" id="errorMsgpermanentaddress"></span>
                                    <br> <br>



                                    Mobile: <br>
                                    <input type="text" id="mobile" name="mobile">
                                    <span class="error" id="errorMsgmobile"></span>
                                    <br> <br>


                                    Email: <br>
                                    <input type="text" id="email" name="email">
                                    <span class="error" id="errorMsgemail"></span>
                                    <br> <br>
                             
                                
                <input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Submit" >
                 &nbsp  &nbsp  &nbsp &nbsp  &nbsp
                <button onclick = "createAjaxRequest()">AJAX</button>

                &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp
                                    <br>

                                </p>
                            </td>


                        </tr>

                        
                        </form>


                        <tr>
                            <td colspan="3">

                                

                            </td>
                        </tr>


                    </table>

                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    
                </td>
            </tr>

        </table>
        <div>
</body>

</html>