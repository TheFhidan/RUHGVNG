<!--
Developed by :
######## ##     ## ########    ######## ##     ## #### ########     ###    ##    ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ##   ## ##   ###   ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ##  ##   ##  ####  ##
   ##    ######### ######      ######   #########  ##  ##     ## ##     ## ## ## ##
   ##    ##     ## ##          ##       ##     ##  ##  ##     ## ######### ##  ####
   ##    ##     ## ##          ##       ##     ##  ##  ##     ## ##     ## ##   ###
   ##    ##     ## ########    ##       ##     ## #### ########  ##     ## ##    ##
.. The Fhidan ~ me@Fhidan.com ~ Fhidan.com ..
 -->
 <?php
$sql = "SELECT * FROM Songs ORDER BY ID DESC";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . '<p class="songname">' . $row['Name'] . "</p></td>";
                echo '<td><a target="_blank" href=' . $row['YouTube'] . '><img src="img/y.png"</a></td>';
                echo '<td><a target="_blank" href=' . $row['SoundCloud'] . '><img src="img/s.png"</a></td>';
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
