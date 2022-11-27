<html>

<head>
    <title>PHP CONNECTION TEST</title>
</head>

<body>

    <?php
$servername = "mysql";
$database = "mysql";

$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    $dsn = "mysql:host=$servername;dbname=$database";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print("<p>접속에 성공했습니다.</p>");
} catch(PDOException $e) {
    print("<p>접속에 실패했습니다.</p>");
    echo $e->getMessage();
}

$conn = null;
print('<p>종료합니다.</p>');

?>
</body>

</html>