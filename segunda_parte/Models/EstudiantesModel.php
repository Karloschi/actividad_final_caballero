<?php
class EstudiantesModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectEstudiante()
    {
        $sql = "SELECT * FROM estudiante";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarEstudiante(String $nombre, String $Numero_empleado, String $carrera)
    {
        
        $this->nombre = $nombre;
        $this->Numero_empleado = $Numero_empleado;
        $this->carrera = $carrera;
        $query = "INSERT INTO estudiante(nombre, Numero_empleado, carrera) VALUES (?,?,?)";
        $data = array($this->nombre, $this->Numero_empleado, $this->carrera);
        $this->insert($query, $data);
        return true;
    }
    public function editEstudiante(int $id)
    {
        $sql = "SELECT * FROM estudiante WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarEstudiante(String $nombre, String $Numero_empleado, String $carrera)
    {
        $this->nombre = $nombre;
        $this->Numero_empleado = $Numero_empleado;
        $this->carrera = $carrera;
        $query = "UPDATE estudiante SET nombre = ?, Numero_empleado = ?, carrera = ?   WHERE id = ?";
        $data = array($this->nombre, $this->Numero_empleado, $this->carrera, $this->id);
        $this->update($query, $data);
        return true;
    }
    public function estadoEstudiante(int $estado, int $id)
    {
        $this->estado = $estado;
        $this->id = $id;
        $query = "UPDATE estudiante SET estado = ? WHERE id = ?";
        $data = array($this->estado, $this->id);
        $this->update($query, $data);
        return true;
    }
}
?>