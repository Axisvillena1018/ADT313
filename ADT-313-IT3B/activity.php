<h1>Hands-on activity</h1>

<?php
    $table = array(
        "header" => array (
            "Student id",
            "FirstName",
            "LastName",
            "Section",
            "Course",
            "Year Level"
        ),
        "body" =>[
            array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
            ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        ),
        array (
            "FirstName" => "FirstName",
            "LastName" => "LastName",
            "Section" => "Section",
            "Course" => "Course",
            "Year Level" => "Year Level"
        )
        ]
        );

//HTML TABLE
?>

<table border="1">
    <thead>
        <?php
        for ($j = 0; $j <=5; $j++)
        {
            echo "<th>".$table['header'][$j]."</th>";
        }
        ?>
    </thead>
    <tbody>
        <tr>
            <?php
            for ($i = 0; $i < 10; $i++)
            {
                echo "<td>".$i."</td>";
                echo "<td>".$table['body'][$i]["FirstName"]." ".$i."</td>";
                echo "<td>".$table['body'][$i]["LastName"]." ".$i."</td>";
                echo "<td>".$table['body'][$i]["Section"]." ".$i."</td>";
                echo "<td>".$table['body'][$i]["Course"]." ".$i."</td>";
                echo "<td>".$table['body'][$i]["Year Level"]." ".$i."</td>";
                echo "</tr>";
            }
            ?>
        </tr>
    </tbody>
</table>