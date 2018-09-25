<?php 

namespace Museum\Http\Controllers;

class PruebaController extends Controller {

	public function index()
	{
		return "Holi controller :3";
	}

	public function nombre($nombre)
	{
		return "Hola, mi nombre es ".$nombre;
	}

}