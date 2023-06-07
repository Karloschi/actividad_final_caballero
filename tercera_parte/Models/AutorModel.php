<?php
class AutorModel extends Mysql{
    protected $id, $nombre,$imagen;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectAutor()
    {
        $sql = "SELECT * FROM autor";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarAutor(String $nombre, String $imagen)
    {
        $this->nombre = $nombre;
        $query = "INSERT INTO autor(autor) VALUES (?)";
        $data = array($this->nombre);
        $this->insert($query, $data);
        return true;
    }
    public function editAutor(int $id)
    {
        $sql = "SELECT * FROM autor WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarAutor(String $nombre,  int $id)
    {
        $this->nombre = $nombre;
    
        $this->id = $id;
        $query = "UPDATE autor SET autor = ? WHERE id = ?";
        $data = array($this->nombre,  $this->id);
        $this->update($query, $data);
        return true;
    }
    public function estadoAutor(int $estado, int $id)
    {
        $this->estado = $estado;
        $this->id = $id;
        $query = "UPDATE autor SET estado = ? WHERE id = ?";
        $data = array($this->estado, $this->id);
        $this->update($query, $data);
        return true;
    }
    
}
