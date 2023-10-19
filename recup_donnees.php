<?php
              
            $servername = "localhost";
            $username ="root";
            $password = "root";
            $dbname = "fromDonnees";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "la connexion a ete bien etablie";

                if(isset($_POST['Отправить']))
            {

 
                $NAME = $_POST['name'];
                $Object = $_POST['object'];
                $Email = $_POST['email'];
                $Message = $_POST['message'];
                $Phonenum = $_POST['number'];
                $dateofbirth = $_POST['date']; 
                $Country = $_POST['pays'];

                

                $sql = ("INSERT INTO `users` (`NAME`, `Object`, `Email`, `Message`, `Phonenum`, `dateofbirth`, `Country` ) VALUES (:NAME, :Object, :Email, :Message, :Phonenum, :dateofbirth, :Country)"); 
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':NAME', $NAME);
                $stmt->bindParam(':Object', $Object);
                $stmt->bindParam(':Email', $Email);
                $stmt->bindParam(':Message', $Message);
                $stmt->bindParam(':Phonenum', $Phonenum);
                $stmt->bindParam(':dateofbirth', $dateofbirth);
                $stmt->bindParam(':Country', $Country);

                
                
 

                

                $stmt->execute();
                echo "inside ";

                
             
 
            }
            

 
            echo "New records created successfully";
            $conn = null;
            $stmt->close(); 
            }
            catch(PDOException $e){
                echo "la connexion a echoué: /n" . $e->getMessage();
            }

            
?>
