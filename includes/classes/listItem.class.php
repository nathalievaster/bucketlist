<?php

class ListItem
{
    private $db;
    private $name;
    private $description;
    private $priority;
    private $created_at;

    function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_errno) {
            die("Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error);
        }
    }

    public function getList(): array
    {
        $sql = "SELECT * FROM bucketlist ORDER BY created_at DESC";
        $result = $this->db->query($sql);

        $list = [];
        while ($row = $result->fetch_assoc()) {
            $list[] = $row;
        }
        return $list;
    }

    public function addItem (string $name, string $description, string $priority): bool
    {
        if (!$this->setName($name) || !$this->setDescription($description) || !$this->setPriority($priority)) {
            return false;
        }
        $sql = "INSERT INTO bucketlist (name, description, priority) VALUES ('{$this->name}', '{$this->description}', {$this->priority})";

        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    // Setters
    public function setName(string $name): bool
    {
        if ($name != "") {
            $this->name = $this->db->real_escape_string($name);
            return true;
        }
        return false;   
    }

    public function setDescription(string $description): bool
    {
        if ($description != "") {
            $this->description = $this->db->real_escape_string($description);
            return true;
        }
        return false;   
    }
    public function setPriority(int $priority): bool
    {
        if (in_array($priority, [1, 2, 3])) {
            $this->priority = $priority;
            return true;
        }
        return false;   
    }

    // Getters
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getpriority(): int
    {
        return $this->priority;
    }

    // ChatGPT-generated delete metod
    public function deleteItem(int $id): bool
{
    $id = intval($id); // säkerhet
    $sql = "DELETE FROM bucketlist WHERE id = $id";
    return $this->db->query($sql);
}

}