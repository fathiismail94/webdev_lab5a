<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q2</title>
<style>
    /* Styling to match the required output table appearance */
    table {
        border-collapse: collapse;
        width: 300px; /* Adjust width as needed */
    }
    th, td {
        border: 2px solid black;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #f0f0f0;
        font-weight: bold;
    }
</style>
</head>
<body>

<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

<h1>Student Records</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>