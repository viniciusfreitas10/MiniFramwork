<?php 
	namespace app\controllers;
	
	use MF\controller\Action;
	use MF\Model\Container;
	use app\Models\Produto;
	use app\Models\Info;
	class IndexController extends Action{

		public function index(){
			$produto = Container::getModel('produto');
			$produtos = $produto->getProdutos();
			$this->view->dados = $produtos;

			$this->render('index','layout1');
		}	
		public function sobreNos(){
			$info = Container::getModel('info');
			$informaçoes = $info->getInfo();
			$this->view->dados = $informaçoes;
			$this->render('sobre_nos','layout2');
		}
		
	}
 ?>