<?php

require 'config.php';

class DB
{

    public $conn;

    public function __construct()
    {
        $this->connection();
    }

    public function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("ket noi khong thanh cong: " . $this->conn->connect_errno);
        }
        //echo "da ket noi csdl thanh cong";
    }

    //function query
    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    //escape_string
    public function escape_string($string)
    {
        return $this->conn->real_escape_string($string);
    }

    //Insert
    public function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$this->escape_string($v)}'";
        }

        $list_field = implode(',', $list_field);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";

        if ($this->query($sql) == true) {
            return $this->conn->insert_id;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
        //echo $sql;
    }

    //Select
    //select column1,column2,...
    //from table_name where...
    public function get($table, $field = array(), $where = "")
    {
        $field = !empty($field) ? implode(",", $field) : "*";
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "SELECT {$field} FROM {$table} {$where}";
        //echo $sql;
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1) {
                return $data;
            } else {
                return $data[0];
            }
        } else {
            echo "khong tim thay ban ghi nay";
        }
    }

    //update
    //UPDATE table_name
    //SET column1 = value1, column2 = value2,...
    //WHERE condition
    public function update($table, $data = array(), $where = "")
    {
        $data_insert = array();
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}`='{$v}'";
        }
        $data_insert = implode(",", $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "UPDATE {$table} SET {$data_insert} {$where}";
        if ($this->query($sql) == true) {
            echo "cap nhat thanh cong";
        } else {
            echo "Loi: " . $this->conn->error;
        }
    }

    //delete
    //delete from table_name where condition
    public function delete($table, $where = "")
    {
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "DELETE FROM {$table} {$where}";
        if ($this->query($sql)) {
            return 1;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

}

$db = new DB();
$db->delete('usersf', 'id = 1');

//$data = array(
//    'username' => 'Trần Minh',
//    'password' => md5('minh!@#')
//);
//
//$db->update('users', $data, 'id = 5');
