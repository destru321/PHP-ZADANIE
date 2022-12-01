<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
        
            $conn = new mysqli("localhost", "root", "", "dziennik");

            $req = "SELECT imie, nazwisko from uczen inner join klasa on uczen.id_klasa = klasa.id where klasa.numer = 3 and klasa.oznaczenie = 'TI' ORDER BY nazwisko";
            $res = mysqli_query( $conn, $req);

            while($row = mysqli_fetch_assoc($res)) {
                echo "<li>";
                echo $row["imie"];
                echo " ";
                echo $row["nazwisko"];
                echo "</li>";

            }
            mysqli_close($conn);
        ?>
    </ol>
</body>
</html>