<?php

namespace model;

use PDO;
use PDOException;

class TourRepository
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=db;dbname=belajar_db", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection to Database failed: " . $e->getMessage() . ">> BYE";
            exit();
        }
    }


    function save($tour)
    {
        $stmt = $this->conn->prepare("INSERT INTO orders (name,phone,entry_count,day_count,accommodation,transportasi,service_food,packet_price,total_price,create_at) VALUES (:name,:phone,:entry_count,:day_count,:accommodation,:transportasi,:service_food,:packet_price,:total_price,:create_at)");
        $stmt->execute([
            'name' => $tour->name,
            'phone' => $tour->phone,
            'create_at' => $tour->create_at,
            'entry_count' => $tour->entry_count,
            'day_count' => $tour->day_count,
            'accommodation' => $tour->accommodation,
            'transportasi' => $tour->transportasi,
            'service_food' => $tour->service_food,
            'packet_price' => $tour->packet_price,
            'total_price' => $tour->total_price,
        ]);
        return $this->conn->lastInsertId();
    }

    function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM orders WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getAll(): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM orders");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function delete($id): bool
    {
        $stmt = $this->conn->prepare("DELETE FROM orders WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() == 1;
    }
}