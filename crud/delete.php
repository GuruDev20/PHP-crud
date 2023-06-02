<html>
    <body>
        <?php
            $con=new mysqli("localhost","root","GuruDev20*","e_ticket");
            $movie_name=$_POST['a1'];
            $sql="DELETE FROM movie WHERE movie_name='$movie_name'";
            if($con->query($sql)===TRUE){
                echo "record deleted successfully";
            }
            else{
                echo "Error: ".$sql."\n".$conn->error;
            }
        ?>
    </body>
</html>