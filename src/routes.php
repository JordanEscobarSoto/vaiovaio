<?php
use Slim\App;
use Slim\Http\Uri;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Slim\Http\Environment;
use Slim\Views\TwigExtension;
use Medoo\Medoo;

return function (App $app) {

	//puedes pasar valores por un arreglo 'RUTA POR DEFAULT'.
	/*$app->get('/', function ($request, $response) {
		return $this->view->render($response, 'index.phtml');
	});*/

	//Ruta de la vista de la radio VAIO VAIO.
	$app->get('/radio', function ($request, $response){
		//Creamos un objeto que tomara todo lo contenido en Database.php
		$db = new \Modelo\Database($this);
		//Retornamos la vista radiograma.html y el metodo contenido en Database.php
		//Noticias().
		return $this->view->render($response, 'radiograma.html', [
			'Noticias'=>$db->Noticias()
		]);
	});
    //Ruta de la vista de la Noticia 1.
	$app->get('/noticia1', function ($request, $response) {
		//Creamos un objeto que tomara todo lo contenido en Database.php
		$db = new \Modelo\Database($this);
		//Retornamos la vista radiograma.html y el metodo contenido en Database.php
		//Noticias().
		return $this->view->render($response, 'noticia1.html', [
			'Noticias'=>$db->Noticias1()
		]);
	});

	//Ruta de la vista de la Noticia 2.
	$app->get('/noticia2', function ($request, $response) {
		//Creamos un objeto que tomara todo lo contenido en Database.php
		$db = new \Modelo\Database($this);
		//Retornamos la vista radiograma.html y el metodo contenido en Database.php
		//Noticias().
		return $this->view->render($response, 'noticia2.html', [
			'Noticias'=>$db->Noticias2()
		]);
	});
	//Ruta de la vista de la Noticia 3.
	$app->get('/noticia3', function ($request, $response) {
		//Creamos un objeto que tomara todo lo contenido en Database.php
		$db = new \Modelo\Database($this);
		//Retornamos la vista radiograma.html y el metodo contenido en Database.php
		//Noticias().
		return $this->view->render($response, 'noticia3.html', [
			'Noticias'=>$db->Noticias3()
		]);
	});



};
