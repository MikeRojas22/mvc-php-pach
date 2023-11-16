<?php
require_once('Conexion.php');

class Pedido {
    private $conn;

    public function __construct() {
        $conexion = new Conexion();
        $this->conn = $conexion->connect();
    }

    public function getCliente($id) {
        $query = "SELECT * FROM Cliente WHERE id_cliente=$id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getModelo($Mod) {
        $query = "SELECT * FROM Modelo WHERE id_modelo = '$Mod'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getMaxPedido() {
        $sql = 'select max(id_pedido) AS id_Pedido from Pedido';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertPedido($idpi, $id, $Mod, $fecha, $cantidad, $total, $envio) {
        $sql = "Insert into Pedido (id_pedido, id_clienteP, id_modeloP, fecha_P, cantidadPro_P, total, alcance_P) values ($idpi, '$id', '$Mod', '$fecha', '$cantidad', '$total', '$envio')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}
?>