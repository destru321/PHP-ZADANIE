<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
        
            $conn = new mysqli("localhost", "root", "", "dziennik");

            $req = "SELECT count(imie) as imie from nauczyciel where data_urodzenia < '1950-01-01'";
            $res = mysqli_query( $conn, $req);

            echo "liczba nauczycieli urodzonych przed 1950 rokiem : ";

            while($row = mysqli_fetch_assoc($res)) {
                echo $row['imie'];
            }

            mysqli_close($conn);
        ?>
</body>
</html>