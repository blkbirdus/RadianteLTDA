<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

$servername = "18.230.217.41";
$username = "admin";
$password = "adminsistema";
$database = "radiantedb";


$link = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$tipo_sonho = array(acao, terror, comedia, drama, romance, ficcao, aventura);
$host_name = gethostname();
$valor_sonho =  rand(250, 2500);


$query = "INSERT INTO dados (IdUser, FirstName, Surname, Tema_Sonho, Valor_Desejado, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_sonho','$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
