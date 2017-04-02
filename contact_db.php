    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hashinc";

if(!empty($_POST))
{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "OOPS!, We have a problem with database server";
} 

$sql = "INSERT INTO queries (name, phone, email, message)
VALUES ('$name', '$phone', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
   header("Location:contact.php?name=$name#success");
}

$conn->close();
}
?>