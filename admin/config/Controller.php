<?php
include 'Connection.php';
class Controller extends Connection
{

	public function isAuth()
	{
		if (!isset($_SESSION["isAuth"])) {
			header('location:index.php');
			exit(0);
		}
	}
	public function save($TableName, $data, $data2 = null, $data3 = null, $data4 = null)
	{
		$column = implode(',', array_keys($data));
		$placeholder = implode(',', array_fill(0, count($data), '?'));


		$sql = "INSERT INTO `$TableName` (" . $column . ") VALUES (" . $placeholder . ")";

		if ($data2 !== null) {
			$placeholder2 = implode(',', array_fill(0, count($data2), '?'));
			$sql .= ",(" . $placeholder2 . ")";
		}
		if ($data3 !== null) {
			$placeholder3 = implode(',', array_fill(0, count($data3), '?'));
			$sql .= ",(" . $placeholder3 . ")";
		}
		if ($data4 !== null) {
			$placeholder4 = implode(',', array_fill(0, count($data4), '?'));
			$sql .= ",(" . $placeholder4 . ")";
		}
		$stmt = $this->conn->prepare($sql);
		$i = 1;
		foreach ($data as $value) {
			$stmt->bindValue($i, $value);
			$i++;
		}
		if ($data2 !== null) {
			foreach ($data2 as $value) {
				$stmt->bindValue($i, $value);
				$i++;
			}
		}
		if ($data3 !== null) {
			foreach ($data3 as $value) {
				$stmt->bindValue($i, $value);
				$i++;
			}
		}
		if ($data4 !== null) {
			foreach ($data4 as $value) {
				$stmt->bindValue($i, $value);
				$i++;
			}
		}

		$success = $stmt->execute();
		if ($success) {
			$id = $this->conn->lastInsertId();
			return $id;
		} else {
			return false;
		}
	}

	public function select($TableName, $data)
	{
		$column = implode(',', array_keys($data));
		$placeholder = implode(',', array_fill(0, count($data), '?'));


		$sql = "SELECT * FROM `$TableName` WHERE " . $column . " = " . $placeholder . "";
		$stmt = $this->conn->prepare($sql);
		foreach ($data as $value) {
			$stmt->bindValue(1, $value);
		}
		$stmt->execute();
		return $stmt;
	}

	public function selectAll($TableName)
	{
		$sql = "SELECT * FROM `$TableName`";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

	public function Inner_Join($table1, $param1, $table2, $param2, $table3 = null, $param3 = null, $table4 = null, $param4 = null, $table5 = null, $param5 = null, $WhereClause = null)
	{

		$sql = "SELECT * FROM `$table1` INNER JOIN `$table2` ON $table1.$param1 = $table2.$param2";
		if ($table3 !== null && $param3 !== null) {
			$sql .= " INNER JOIN `$table3` ON $table1.$param1 = $table3.$param3";
		}
		if ($WhereClause !== null) {
			$sql .= " INNER JOIN `$table3` ON $table1.$param1 = $table3.$param3";
		}

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

	public function update($TableName, $data, $WhereClause, $WhereClause2 = null)
	{


		$sql = "UPDATE `$TableName` SET ";
		$columns = [];

		foreach ($data as $column => $value) {
			$columns[] = "$column = ?";
		}
		$sql .= implode(', ', $columns);
		$sql .= " WHERE " . $WhereClause . "";

		if ($WhereClause2 !== null) {
			$sql .= " AND " . $WhereClause2 . "";
		}


		$stmt = $this->conn->prepare($sql);
		$i = 1;
		foreach ($data as $column => $value) {
			$stmt->bindValue($i, $value);
			$i++;
		}
		$stmt->execute();
		return $stmt;
	}

	public function delete($TableName, $WhereClause)
	{

		$sql = "DELETE FROM `$TableName` WHERE $WhereClause";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
	public function where($column, $data)
	{
		return $column . ' = ' . $data;
	}
}
