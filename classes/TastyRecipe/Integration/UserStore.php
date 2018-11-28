<?php

namespace TastyRecipe\Integration;

use TastyRecipe\Model\Entry_user;
use TastyRecipe\Model\Entry;

class UserStore
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "myDB";

    public function __construct()
    {
    }

    public function storeUser($username, $password)
    {
        $conn = $this->openConnection();
        $sql = "INSERT INTO user (username, password)
        VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }

    public function login($username, $password)
    {
        $conn = $this->openConnection();
        $sql = "SELECT username, password FROM user";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                if ((trim($row["username"]) == $username)) {
                    if (password_verify($password, $row['password'])) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        } else {
            return false;
        }
    }


    public function openConnection()
    {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function addEntry(Entry $entry, $recipe)
    {
        $conn = $this->openConnection();
        $sql = "INSERT INTO comments (entry, recipe)
        VALUES ('$entry', '$recipe')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }
}