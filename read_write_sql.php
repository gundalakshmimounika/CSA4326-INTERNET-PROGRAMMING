<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $regno = $_POST['regno'];

    mysqli_query($conn,
        "INSERT INTO students (name, regno) VALUES ('$name', '$regno')"
    );

    echo "Data inserted successfully<br><br>";
}
?>

<!-- HTML FORM -->
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Reg No: <input type="text" name="regno" required><br><br>
    <input type="submit" name="insert" value="Insert">
</form>

<hr>
<h3>Student Records</h3>
<?php
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<table border='1' cellpadding='5'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Reg No</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['regno']}</td>
          </tr>";
}

echo "</table>";
?>
