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

            $req = "SELECT count(imie) from uczen where imie Like '%a'";
            $req2 = "SELECT count(imie) from nauczyciel where imie Like '%a';";
            $res = mysqli_query( $conn, $req);
            $res2 = mysqli_query( $conn, $req2);

            $liczba = 0;

            while($row = mysqli_fetch_assoc($res)) {
                $liczba += $row["count(imie)"];

            }

            while($row = mysqli_fetch_assoc($res2)) {
                $liczba += $row["count(imie)"];

            }
            echo "liczba osob z imieniem konczacym sie na a: ";
            echo $liczba;

            mysqli_close($conn);
        ?>
</body>
</html>