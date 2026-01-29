<form method="post">
    Username: <input type="text" name="us"><br><br>
    Password: <input type="password" name="pw"><br><br>
    <input type="submit" name="submit" value="Insert">
</form>

<?php
$c = mysqli_connect("localhost", "root", "", "IP");

mysqli_query($c, "CREATE TABLE IF NOT EXISTS users (
    us VARCHAR(50),
    pw VARCHAR(50)
)");

if (isset($_POST['submit'])) {
    mysqli_query($c,
        "INSERT INTO users (us, pw) VALUES ('$_POST[us]', '$_POST[pw]')"
    );

    echo "Data successfully inserted";
}
?>





