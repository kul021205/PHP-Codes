<html>
<body>

<form method="post">
    <input type="date" name="dob" required>
    <input type="submit" value="Calculate Age">
</form>

<?php
if (!empty($_POST["dob"])) {
    $age = date("Y") - date("Y", strtotime($_POST["dob"]));
    echo "Your Age: $age Years.<br>";
    echo "This code is executed by Kulraj Singh 113!";
}
?>

</body>
</html>