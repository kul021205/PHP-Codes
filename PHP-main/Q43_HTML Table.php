<?php

$subjects = ["C-Programming", "Algorithm", "Data Structure", "DBMS", "Statistics"];
$marks = [
    [85, 75, 95],
    [78, 68, 88],
    [90, 80, 85],
    [88, 70, 92],
    [76, 66, 89]
];

echo "<table border='1'>";
echo "<tr>
<th>SRNO</th>
<th>Subject</th>
<th>Kamal</th>
<th>Shyam</th>
<th>Aakriti</th>
</tr>";

$total = [0, 0, 0];

for ($i = 0; $i < count($subjects); $i++) {
    echo "<tr>
<td>" . ($i + 1) . "</td>
<td>{$subjects[$i]}</td>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>{$marks[$i][$j]}</td>";
        $total[$j] += $marks[$i][$j];
    }
    echo "</tr>";
}

echo "<tr>
<th colspan='2'>Total</th>
<td>{$total[0]}</td>
<td>{$total[1]}</td>
<td>{$total[2]}</td>
</tr>";

echo "<tr>
<th colspan='2'>Percentage</th>
<td>" . ($total[0] / 5) . "%</td>
<td>" . ($total[1] / 5) . "%</td>
<td>" . ($total[2] / 5) . "%</td>
</tr>";

echo "</table>";
echo "This code is executed by Kulraj Singh 113!";

?>