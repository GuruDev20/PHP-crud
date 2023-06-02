<html>
    <body>
        <?php
            $con=new mysqli("localhost","root","GuruDev20*","e_ticket");
            $movie_name=$_POST['a1'];
            $movie_language=$_POST['a2'];
            $movie_quality=$_POST['a3'];
            $total_seats=$_POST['a4'];
            $seat_no=$_POST['a5'];
            $sql="INSERT INTO movie (movie_name,movie_language,movie_quality,total_seats,seat_no)VALUES('$movie_name','$movie_language','$movie_quality','$total_seats','$seat_no')";
            if($con->query($sql) === TRUE){
                echo "New record created successfully";
            }
            else{
                echo "Error: ".$sql."\n".$con->error;
            }
        ?>
    </body>
</html>