<html>
    <body>
        <?php
        $con=new mysqli("localhost","root","GuruDev20*","e_ticket");
        $sql="SELECT * FROM movie";
        if($res=mysqli_query($con, $sql)) {
            if(mysqli_num_rows($res) > 0) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Movie Name</th>";
                echo "<th>Movie Language</th>";
                echo "<th>Movie Quality</th>";
                echo "<th>Total Seats</th>";
                echo "<th>Seat Nos</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td>".$row['movie_name']."</td>";
                    echo "<td>".$row['movie_language']."</td>";
                    echo "<td>".$row['movie_quality']."</td>";
                    echo "<td>".$row['total_seats']."</td>";
                    echo "<td>".$row['seat_no']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($res);
            }
            else {
                echo "No matching records are found.";
            }
        }
        else {
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
        }
        mysqli_close($con);
        ?>
    </body>
</html>