<?php
class Estudiantes extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
        parent::__construct();
    }
    public function estudiantes()
    {
        $data = $this->model->selectEstudiante();
        $this->views->getView($this, "listar", $data);
    }
    public function registrar()
    {
        $nombre = $_POST['nombre'];
        $Numero_empleado = $_POST['Numero_empleado'];
        $carrera = $_POST['carrera'];
    
        $insert = $this->model->insertarEstudiante($nombre, $Numero_empleado, $carrera);
        if ($insert) {
            header("location: " . base_url() . "estudiantes");
            die();    
        }
    }
    public function editar()
    {
        $id = $_GET['id'];
        $data = $this->model->editEstudiante($id);
        if ($data == 0) {
            $this->estudiantes();
        } else {
            $this->views->getView($this, "editar", $data);
        }
    }
    public function modificar()
    {
        $nombre = $_POST['nombre'];
        $Numero_empleado = $_POST['Numero_empleado'];
        $carrera = $_POST['carrera'];
        $actualizar = $this->model->actualizarEstudiante($nombre, $Numero_empleado, $carrera);
        if ($actualizar) {   
            header("location: " . base_url() . "estudiantes"); 
            die();
        }
    }
    public function eliminar()
    {
        $id = $_POST['id'];
        $this->model->estadoEstudiante(0, $id);
        header("location: " . base_url() . "estudiantes");
        die();
    }
    public function reingresar()
    {
        $id = $_POST['id'];
        $this->model->estadoEstudiante(1, $id);
        header("location: " . base_url() . "estudiantes");
        die();
    }
}
?>