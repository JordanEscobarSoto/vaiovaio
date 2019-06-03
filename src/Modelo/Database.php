<?php
namespace Modelo;

class Database{
	private $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}

	//Función que muestra la tabla noticias y sus propiedades.
	public function Noticias(){
		$arr = $this->database->select('noticias', ['Titulo','Encabezado','Cuerpo','Estado','idNoticiero']);
		return $arr;
	}
	//Función que muestra la tabla noticias si su id es 1.
	public function Noticias1(){
		$arr = $this->database->select('noticias', ['Titulo','Encabezado','Cuerpo','Estado','idNoticiero'],["idNoticiero"=>1]);
		return $arr;
	}

	//Función que muestra la tabla noticias si su id es 1.
	public function Noticias2(){
		$arr = $this->database->select('noticias', ['Titulo','Encabezado','Cuerpo','Estado','idNoticiero'],["idNoticiero"=>2]);
		return $arr;
	}

	//Función que muestra la tabla noticias si su id es 1.
	public function Noticias3(){
		$arr = $this->database->select('noticias', ['Titulo','Encabezado','Cuerpo','Estado','idNoticiero'],["idNoticiero"=>3]);
		return $arr;
	}

}
