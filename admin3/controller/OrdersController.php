<?php


namespace Controller;
use Model\OrdersDB;
use Model\Orders;
use Model\DBConnection;

class OrdersController
{
    public $OrdersDB;
    public function __construct()
    {
        $conn = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->OrdersDB = new OrdersDB($conn->connect());
    }

    public function addOrders()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/orders/addOrders.php';
        } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $number = $_POST['number'];
            $note = $_POST['note'];
            $created_at = $_POST['created_at'];

            $orders = new Orders($name, $email,$phone, $address,$number,$note,$created_at);
            $this->OrdersDB->createOrders($orders);
            $message = 'Tao moi thanh cong';
            include 'view/orders/addOrders.php';
        }
    }

    public function listOrders(){
        $orders = $this->OrdersDB->getAllOrders();
        include 'view/orders/listOrders.php';
    }

}