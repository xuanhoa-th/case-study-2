<?php
namespace Model;

class OrdersDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createOrders($orders){
        $sql = "INSERT INTO orders (name, email, phone,address,number,note,created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $orders->name);
        $stmt->bindParam(2, $orders->email);
        $stmt->bindParam(3, $orders->phone);
        $stmt->bindParam(4, $orders->address);
        $stmt->bindParam(5, $orders->number);
        $stmt->bindParam(6, $orders->note);
        $stmt->bindParam(7, $orders->created_at);
        return $stmt->execute();
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach ($result as $row) {
            $order = new Orders($row['name'], $row['email'], $row['phone'], $row['address'], $row['number'], $row['note'], $row['created_at']);
            $order->id = $row['id'];
            $orders[] = $order;
        }
        return $orders;
    }

}