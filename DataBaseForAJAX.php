<?php 

                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "mobileshop";


					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else 

					{
							//echo "<h3> Data Base Connection Successful </h3>";
							//echo "<br>";

					}

						    $sql = "SELECT firstname,lastname,gender,dob,presentaddress,permanentaddress, mobile, email FROM users";  // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

						{
									// show result
							//echo "<br>";
							//echo " <h2> Train ID & Train Name Are Verified </h2";
							//echo "<br>";
							echo "<h2> Showing Student Details By AJAX </h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							  {
										

                            echo "<br>";
                             echo " First Name = " . $row['firstname'];
                             echo "<br>";
                             echo " Last Name = " . $row['lastname'];
                             echo "<br>";
                             echo " Gender = " . $row['gender'];
                             echo "<br>";
                             echo " Date of Birth = " . $row['dob'];
                             echo "<br>";
                             echo "  Present Address = " . $row['presentaddress'];
                             echo "<br>";
                             echo "  Permanent Address = " . $row['permanentaddress'];
                             echo "<br>";
                             echo "  Mobile = " . $row['mobile'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";
                             
                             
                             
                             

							   }


							echo "</ol>";
							echo "<br>";

						}

							else 
								{
									echo "<h1> Wrong Input Inserted...</h1>";

									
								}
							
                          $conn->close();

                    
                        
      


 ?>



 <br><br>

  <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
  <table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='RegistrationForm.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 




	

	

