<?php

class Connection 
{
    private string $host;
    private string $database;
    private string $username;
    private string $password;

    public $conn;

    public function __construct()
    {
        $this->host      = 'localhost';
        $this->database  = 'catalogo_filmes';
        $this->username  = 'root';
        $this->password  = '';

        $this->conn = $this->getConnection();
    }
    
    public function getConnection()
    {
        $connection = new \mysqli($this->host, $this->username, $this->password, $this->database);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        return $connection;
    }

    public function closeConnection()
    {
        if ($this->conn !== null)
        {
            $this->conn->close();
        } 
    }

}