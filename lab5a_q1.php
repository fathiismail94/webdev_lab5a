<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q1</title>
<style>

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<?php

$name = "MUHAMMAD FATHI BIN ISMAIL"; 
$matric_number = "AI230013"; 
$course = "SARJANA MUDA SAINS KOMPUTER (TEKNOLOGI WEB) DENGAN KEPUJIAN"; 
$year_of_study = 3; 
$address = "NO 2, JALAN SENANG 9, TAMAN SEDAP, PARIT RAJA, 86400 BATU PAHAT, JOHOR"; 
?>

<h1>My Details</h1>
<table>
    <tr>
        <th>Detail</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>