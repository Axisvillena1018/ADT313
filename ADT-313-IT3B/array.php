<h1>arrays</h1>
<?php
$cars = array("Volvo","BMW","Toyota");

echo $cars[1];

$userinformation = array(
    "FirstName" => "axis",
    "LastName" => "villena",
    "Role" => "Student",
);
$userinformation["address"] = "Marilao";
$userinformation[] = "09603026940";
echo $userinformation['Role'];

print_r($userinformation);

$user = array(
    "Information" => array(
        "FName" => "Axis",
        "LName" => "Villena",
    ),
    "Roles" => array(
        "Instructor",
        "Student"
    ),
    "Address" => array(
        "Province" => "Bulacan",
        "Municipality" => "Marilao"
    )
    );


echo "<h1>". $user["Address"],["Province"] ."</h1>";
echo "<h2>".$user['Roles'],[1] . "</h2>";

?>