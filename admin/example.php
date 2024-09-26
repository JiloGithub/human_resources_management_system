<?php


function save($TableName, $data, $data2)
{
    $column = implode(',', array_keys($data));
    $placeholder = implode(',', array_fill(0, count($data), '?'));
    $placeholder2 = implode(',', array_fill(0, count($data2), '?'));

    $sql = "INSERT INTO `$TableName` (" . $column . ") VALUES (" . $placeholder . ")";

    if ($data2 !== null) {
        $sql .= ",(" . $placeholder2 . ")";
    }
    return $sql;
}

$data = [
    'ELEMENTARY' => 'Elementary1',
    'ELEMENTARY_ADDRESS' => 'San Andres 2',
    'ELEMENTARY_FROM' => '2019',
    'ELEMENTARY_TO' => '2023',
];
$data2 = [
    'ELEMENTARY' => 'Elementary1',
    'ELEMENTARY_ADDRESS' => 'San Andres 2',
    'ELEMENTARY_FROM' => '2019',
    'ELEMENTARY_TO' => '2023',
];

$sql = save('educ', $data, $data2);
print_r($sql);
