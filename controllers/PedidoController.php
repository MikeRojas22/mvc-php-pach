<?php
session_start();
require_once('../controllers/UsuarioController.php');
require_once('../models/Pedido.php');

class PedidoController {
    private $pedido;
    private $usuarioController;

    public function __construct() {
        $this->usuarioController = new UsuarioController();
        $this->pedido = new Pedido();
    }

    public function handleRequest() {
        $Mod = '';
        if(!empty($_GET['vari'])){
            $_SESSION['Mod']=$_GET['vari'];
            $Mod = $_GET['vari'];
        }else{
            $Mod=$_SESSION['Mod'];
        }

        if (isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            $results = $this->usuarioController->getUserById($id);
            $results2 = $this->pedido->getModelo($Mod);
            
            if ($results > 0) {
                $nombre=$results['nombre_C'];
                $apellido=$results['apellidos_C'];
                $correo=$results['correo_C'];
                $pais=$results['pais_C'];
                $estado=$results['estado_C'];
                $calle=$results['calle_C'];
                $colonia=$results['colonia_C'];
                $numCasa=$results['numCasa_C'];
                $codigo=$results['CP_C'];
                $tel=$results['telefono_C'];
                $nomMode=$results2['nombre_M'];
                $men=intval($results2['precioMen_M']);
                $may=intval($results2['precioMay_M']);
            }
            
            if (!empty($_POST['cantidadPro_P']) && !empty($_POST['envio'])) {
                if($_POST['cantidadPro_P']>5){
                    $total=$_POST['cantidadPro_P']*$may;
                }else{
                    $total=$_POST['cantidadPro_P']*$men;
                }
            
                $cantidad=$_POST['cantidadPro_P'];
                $envio=$_POST['envio'];
                $results3 = $this->pedido->getMaxPedido();
                $idp = intval($results3['id_Pedido']);
                $idpi = $idp + 1;
                $result = $this->pedido->insertPedido($idpi, $id, $Mod, date('d/m/y'), $cantidad, $total, $envio);

                if ($result) {
                    echo "<script>
                        alert('Pedido Realizado');
                        window.location= 'CatalogoP.php'
                    </script>";
                } else {
                    echo "<script>javascript:alert('Error de creación, intentelo de nuevo.');</script>";
                }
            }
        }

        require_once('../views/FormularioPedidoP.php');
    }
}

$controller = new PedidoController();
$controller->handleRequest();
?>