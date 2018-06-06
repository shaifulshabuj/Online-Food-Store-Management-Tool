<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
		text-align: center;
    }

    td, th {
        border: 1px solid #dddddd;
        padding: 8px;
		text-align: center;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
		text-align: center;
    }
</style>

<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'foodzone');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( mysqli_error($connection) );
    $sql = "SELECT * FROM foodinfo ORDER BY foodPrice";

    
    if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Food Name</th>";
                echo "<th>Food Price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['foodName'] . "</td>";
                echo "<td>" . $row['foodPrice'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($connection); 
?>
