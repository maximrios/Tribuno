<?php

class ProductosController extends BaseController {
	public function showWelcome()
	{
		return View::make('base.productos.listado');
	}
}
