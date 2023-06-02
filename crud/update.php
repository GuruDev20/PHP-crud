<html>
    <body>
        <?php
        $con=new mysqli("localhost","root","GuruDev20*","e_ticket");
        $movie_name=$_POST['a1'];
        $movie_language=$_POST['a2'];
        $sql="UPDATE movie SET movie_name='$movie_name' WHERE movie_language='$movie_language'";
        if($con->query($sql)===TRUE){
            echo "record updated successfully";
        }
        else{
            echo "Error: ".$sql."\n".$conn->error;
        }
        ?>
    </body>
</html>