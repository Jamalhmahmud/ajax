<?php 
$name = filter_input(INPUT_POST,'name');
$password = filter_input(INPUT_POST,'password');



      function login($name,$pwd)
      {
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
              


              //$sql = "INSERT INTO buyticket (name,trainname,destination,mobile) values ('$name','$trainname','$destination','$mobile')";


    $sql = "SELECT * FROM logindata WHERE name='".$name."' and  password='".$password."' "; 

                         if ($conn->query($sql))

                        {

                          //echo " <h2> Your Ticket Is Verified </h2";
                          echo "<br>";
                          

                
                // Query

              $result = $conn -> query($sql); // result set

              if($result->num_rows > 0) 

              {
                
              
              return true;
              
             
                }

                else
                {



                    $conn->close();

                    }
      }
                        
      

}


}


 ?>



 

 




  

  

