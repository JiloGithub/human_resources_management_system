<?php

$time_in = strtotime('8:00 am');
$time_out = strtotime('5:00 pm');

$time_difference = ($time_in - $time_out);
$working_hrs = $time_difference / 3600;

$formatted_hrs = number_format($working_hrs);

$TableName = 'users';
$data = [
    'UNIQUE_ID' => 'TIN_000111',
];
$AndClause = [
    'DATE' => date('M d, Y'),
];

$column = implode(',', array_keys($data));
$placeholder = implode(',', array_fill(0, count($data), '?'));

$column2 = implode(',', array_keys($AndClause));
$placeholder2 = implode(',', array_fill(0, count($AndClause), '?'));


$sql = "SELECT * FROM `$TableName` WHERE " . $column . " = " . $placeholder . " AND " . $column2 . " = " . $placeholder2 . "";

// $stmt = $this->conn->prepare($sql);
// foreach ($data as $value) {
//     $stmt->bindValue(1, $value);
// }
// foreach ($AndClause as $value) {
//     $stmt->bindValue(1, $value);
// }

print($sql);
