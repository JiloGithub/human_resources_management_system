<?php
include 'Connection.php';
class Query extends Connection
{

    public function Create($TableName, $data)
    {
        $column = implode(',', array_keys($data));
        $placeholder = implode(',', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO `$TableName` (" . $column . ")VALUES (" . $placeholder . ")";
        $stmt = $this->conn->prepare($sql);
        $i = 1;
        foreach ($data as $value) {
            $stmt->bindValue($i, $value);
            $i++;
        }
        $stmt->execute();
        $id = $this->conn->lastInsertId();
        return $id;
    }

    public function SelectEmail($email)
    {
        $sql = "SELECT * FROM `users` WHERE EMAIL = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);
        return $stmt;
    }
}
