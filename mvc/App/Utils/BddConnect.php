<?php
    namespace App\Utils;
    class BddConnect{
        //fonction connexion BDD
        public function connexion(){
            //import du fichier de configuration
            include './env.php';
            //retour de l'objet PDO
            return new \PDO('mysql:host='.$host.';dbname='.$database.'', $login, $password, 
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        }
    }
?>

<!-- *// 
// What Is PDO?
// PDO in PHP offers a data-access abstraction layer, 
// which means you can issue queries and fetch data using the same functions 
// regardless of which database you're using. PDO isn't a database abstraction; 
// it doesn't rewrite SQL or imitates features that aren't accessible.

// Predefined Constants
// PDO::PARAM_BOOL (int)
// This represents a boolean data type.

// PDO::PARAM_NULL (int)
// It represents the SQL NULL data type.

// PDO::PARAM_INT (int)
// The command represents the SQL INTEGER data type.

// PDO::PARAM_STR (int)
// This offers the SQL CHAR, VARCHAR, or other string data type.

// PDO::PARAM_STR_NATL (int)
// This is used to denote a string that uses the national character set. Available since PHP 7.2.0

// The PDO Class
// There are three PDO in PHP groups to choose from as mentioned below:

// PDO - A relation between PHP and the database is represented by PDO.
// PDOStatement - It represents a prepared statement 
// and sets an associated outcome after the statement is executed.
// PDOException - This class represents PDO errors.

// Details of the PDO Class Methods
// PDO:: Construct

// Creates a PDO instance that represents a database relation.

// Syntax:

// PDO::__construct() 
// ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )

// DSN - The Data Source Name, or DSN, 
// is a string of characters that contains the information needed to link to a database. 
// The prefix name (for example, pgsql for PostgreSQL database), 
// a colon, and the server keyword make up the string.

// Username - A string containing the username of the user. 
// For certain PDO drivers, this parameter is optional.

// Password - The user's password is stored in this string. 
// For certain PDO drivers, this parameter is optional.

// Driver options - This is an optional parameter—a key=>value list of link options unique to the driver.

// On completion, this method returns a PDO in PHP object. 
// If there is a mistake, a PDOException object is returned.

// Details of PDO Statement Class
// The PDO represents a relation between PHP and a database server. 
// The PDOStatement reflects a prepared statement and the corresponding result set after it is executed. 
// The PDOException class reflects a PDO in PHP error.

// Represents a prepared statement and its corresponding outcome collection after it is executed.

// For example: The following example demonstrates how to bind a variable to a column in a result collection.

// 

// try {

// $dbhost = 'localhost';

// $dbname='hr';

// $dbuser = 'root';

// $dbpass = '';

// $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// }catch (PDOException $e) {

// echo "Error : " . $e->getMessage() . "<br/>";

// die();

// }

// $query = "SELECT fname, lname, dtob, country, emailid FROM user_details where gender = 'M'";

// $stmt = $conn->prepare($query);

// $stmt->execute();

// $stmt->bindColumn('emailid', $email);

// while ( $row = $stmt->fetch( PDO::FETCH_BOUND ) )

// {

// echo "$email"."<br>";

// } -->


