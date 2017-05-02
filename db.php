 <?php

class DB{
          
	 private static function connect(){
                                 $servername = "127.0.0.1";
                                 $username = "root";
                                  $password = "";
                                 $dbname="letstagon";
                        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,$password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                      }

                public static function query($query, $params = array()) 
                {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);
                 
                 if (explode(' ', $query)[0] == 'SELECT') 
                 {
                     $data = $statement->fetchAll();
                     return $data;
                 }
   
              }
    }

?>