<?php
if(isset($_GET['mode']) && $_GET['mode'] == 'delete')
{
    delete();
}
elseif (isset($_GET['mode']) && $_GET['mode'] == 'toevoegen') 
{
    toevoegen();
}
elseif (isset($_GET['mode']) && $_GET['mode'] == 'wijzigen') 
{
    wijzigen();
}

//Haal de tabel op uit de database
    function getDatabase(){
        include 'db_connect.php';
        $sql = "SELECT *
              FROM users
              GROUP BY User_ID";

        $result = $conn->query($sql);
       
        echo "<table class='table'>";
            echo "<tr>";
            echo  "<th> id </th>";
            echo  "<th> Gebruikersnaam</th>";
            echo  "<th> Wachtwoord </th>";
            echo  "<th> Admin </th>";
            echo  "<th> Wijzig </th>";
            echo  "<th> Verwijder </th>";
            echo "</tr>";
            
            while ($row = $result->fetch()) 
            {
                echo "<tr>";
                echo "<td>"     .$row['user_id']. "</td>";
                echo "<td>"     .$row['username']. "</td>";
                echo "<td>"     .$row['password']."</td>";
                echo "<td>"     .$row['admin']."</td>";
                echo "<td>" .'<a href="./toevoeg_update.php?mode=update&&user_id='. $row['user_id'] . '">' . 'wijzig'. "</a>" ."</td>";
                echo "<td>" .'<a href="functions/CRUD_functions.php?mode=delete&&user_id='. $row['user_id'] . '">' . 'verwijder'. "</a>" ."</td>";
                echo "</tr>";
            }
        echo "</table>";
        $conn = null;
    }

//Delete rijen uit de database
    function delete(){
    	include 'db_connect.php';

    	$user_id = $_GET["user_id"];
    	$stmt = $conn->prepare("DELETE FROM users 
    							WHERE user_id = :user_id ");

    	$stmt->bindParam(':user_id', $user_id); 
    	if ($stmt->execute())
    	{
        	echo "<p>"."<strong>Regisseur verwijderd</strong>"."</p>";
    	}
    	$conn = null;
    	header("Location: ../database.php");
    }


//Voeg rijen toe aan de database
    function toevoegen(){
    	include 'db_connect.php';

		$user_id = $_POST["user_id"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$admin = $_POST["admin"];

		$stmt = $conn->prepare("INSERT INTO users (user_id, username, password, admin) 
								VALUES (:user_id, :username, :password, :admin)");
		$stmt->bindParam(':user_id', $user_id);
	    $stmt->bindParam(':username', $username);
	    $stmt->bindParam(':password', $password);
	    $stmt->bindParam(':admin', $admin);
		 
		if ($stmt->execute())
        {
				echo "<p>"."<strong>Regisseur toegevoegd</strong>"."</p>";
		}			
		$conn = null;
		header("Location: ../database.php");
    }

//Wijzig rijen in de database
    function wijzigen(){
	   include 'db_connect.php';

        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $admin = $_POST["admin"];

        $stmt = $conn->prepare("UPDATE users SET username = :username, password = :password, admin = :admin
                                WHERE id = :id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':admin', $admin);
         
        if ($stmt->execute())
        {
                echo "<p>"."<strong>Leerling gewijzigd</strong>"."</p>";
        }           
        $conn = null;
        header("Location: ../database.php");
	}
?>