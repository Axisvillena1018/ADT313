<h1>Function</h1>
<?php
function GenerateUser()
{
    $user = "User 1";
    $role = "Student";

    echo $user."<br>";
    echo $role."<br>";
}

function editUser($value, $age)
{
    echo "Edit".$value."<br>";
    echo "Age".$age."<br>";
}

$age2 = 22;
GenerateUser();
editUser("Valueeeeeeeee",$age2);
?>