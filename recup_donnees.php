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
                $Passeport = $_POST['passeport'];
                $Country = $_POST['country'];
                $dateoftravel = $_POST['date'];
                $Phonenum = $_POST['number'];
                $Email = $_POST['email'];
                $Message = $_POST['message'];
                
                 
               
                

                $sql = ("INSERT INTO `users` (`NAME`, `Object`, `passeport`, `Country`,  `dateoftravel`, `phonenum`, `Email`,  `Message` ) VALUES (:NAME, :Object, :Passeport, :Country, :dateoftravel, :Phonenum, :Email, :Message)"); 
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':NAME', $NAME);
                $stmt->bindParam(':Object', $Object);
                $stmt->bindParam(':Passeport', $Passeport);
                $stmt->bindParam(':Country', $Country);
                $stmt->bindParam(':dateoftravel', $dateoftravel);
                $stmt->bindParam(':Phonenum', $Phonenum);
                $stmt->bindParam(':Email', $Email);
                $stmt->bindParam(':Message', $Message);
 
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
