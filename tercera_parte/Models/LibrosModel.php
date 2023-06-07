<?php
class LibrosModel extends Mysql{
    protected $id, $nombre,$imagen;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectLibro()
    {
        $sql = "SELECT a.id, a.autor, m.id, m.materia, l.id, l.titulo, l.cantidad, l.Numero_serie, l.id_autor, l.id_materia, l.descripcion, l.imagen, l.estado FROM autor a INNER JOIN materia m INNER JOIN libro l ON a.id = l.id_autor  WHERE m.id = l.id_materia";
        $res = $this->select_all($sql);
        return $res;
    }
    public function selectMateria()
    {
        $sql = "SELECT * FROM materia";
        $res = $this->select_all($sql);
        return $res;
    }
   
    public function selectAutor()
    {
        $sql = "SELECT * FROM autor";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarLibro(String $titulo, int $cantidad, String $Numero_serie, int $autor, int $materia, String $descripcion, String $imgName)
    {
        $this->titulo = $titulo;
        $this->cantidad = $cantidad;
        $this->Numero_serie = $Numero_serie;
        $this->autor = $autor;
        $this->materia = $materia;
        $this->descripcion = $descripcion;
        $this->imgName = $imgName;
        $query = "INSERT INTO libro (titulo, cantidad, Numero_serie, id_autor, id_materia, descripcion, imagen) VALUES (?,?,?,?,?,?,?)";
        $data = array($this->titulo, $this->cantidad,  $this->Numero_serie, $this->autor, $this->materia, $this->descripcion, $this->imgName);
        $this->insert($query, $data);
        return true;
    }
    public function editLibro(int $id)
    {
        $sql = "SELECT * FROM libro WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarLibro(String $titulo, int $cantidad, String $Numero_serie, int $autor, int $materia, String $descripcion, String $imgName, int $id)
    {
        $this->titulo = $titulo;
        $this->cantidad = $cantidad;
        $this->Numero_serie = $Numero_serie;
        $this->autor = $autor;
        $this->materia = $materia;
        $this->descripcion = $descripcion;
        $this->imgName = $imgName;
        $this->id = $id;
        $query = "UPDATE libro SET titulo=?, cantidad=?, Numero_serie=?, id_autor=?, id_materia=?, descripcion=?, imagen=? WHERE id = ?";
        $data = array($this->titulo, $this->cantidad, $this->Numero_serie, $this->autor, $this->materia, $this->descripcion, $this->imgName, $this->id);
        $this->update($query, $data);
        return true;
    }
    public function estadoLibro(int $estado, int $id)
    {
        $this->estado = $estado;
        $this->id = $id;
        $query = "UPDATE libro SET estado = ? WHERE id = ?";
        $data = array($this->estado, $this->id);
        $this->update($query, $data);
        return true;
    }
    
}
