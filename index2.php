<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Imie</th>
            <th>nazwisko</th>
            <th>data urodzenia</th>
        </tr>
        <?php 
        
            $conn = new mysqli("localhost", "root", "", "dziennik");

            $req = "SELECT imie, nazwisko, data_urodzenia from nauczyciel ORDER BY data_urodzenia desc";
            $res = mysqli_query( $conn, $req);

            while($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<th>";
                echo $row["imie"];
                echo "</th>";
                echo "<th>";
                echo $row["nazwisko"];
                echo "</th>";
                echo "<th>";
                echo $row["data_urodzenia"];
                echo "</th>";
                echo "</tr>";

            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>