<h1> Switch </h1>
<?php
$role = "student";

switch($role)
{
    case 'student':
        echo "You're Student";
        break;
    
    case 'instructor':
        echo "You're instructor";
        break;
    
    case 'admin':
        echo "You're admin";
        break;
    
    default:
        echo "Who are you";
        break;
}
?>