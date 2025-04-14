<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
</head>
<body>
    <h3>Chessboard</h3>
    <table border="1" width="400px" height="400px">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<td bgcolor='$color' width='50px' height='50px'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
echo "This code is executed by Kulraj Singh 113!!";
?>