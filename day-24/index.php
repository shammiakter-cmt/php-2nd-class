<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    function fullName($fname, $lname){
        echo $fname . " " . $lname . "<br>";
    }
    fullName("Shammi", "Emu");
    // associative array
$persons = array("Jone" => 600, "Doe" => 1000, "Peter" => 5000);
    echo $persons["Peter"] . "<br>";


    // count
$cars = array("TOYOTA", "BMW", "VOLVO");
    echo count($cars) . "<br>";
for($x = 0; $x < count($cars); $x++){
        echo $cars[$x] . "<br>";
}
// superglobals
var_dump($_SERVER);
echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    ?>
</body>
</html>