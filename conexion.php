<?php
Class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=spa","root","");
		$link->exec("tiendan");
		return $link;
	}
}
class Servicio
{
    static public function mostrarServicios()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM servicio");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function agregarServicio($nombre, $foto, $descripcion)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO servicio (nombre, foto, descripcion) VALUES (:nombre, :foto, :descripcion)");
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":foto", $foto, PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
