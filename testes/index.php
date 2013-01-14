<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="iso-8859-1">
	<title>teste de aprendizado 1</title>
	<style type="text/css">
	body{width: 50%; height: auto; margin: 20px auto; font-family: sans-serif;}
	.aviso{padding: 2px;margin: 4px;clear: both; background: #eee; border:1 px solid #ccc; width: 100%; color:#111;}	
	.blue{color:#2693FF;}
	.green{color:#117d19;}
	.red{color: red;}
	.titulos{
		width: auto; height: auto; border-bottom: 4px solid #eee; color: #111; 
		font:100 Arial, Helvetica, sans-serif; font-size: 25px; margin: 5px auto; clear: both; float: left;
	}
	.resposta{text-indent: 30px;}

	</style>
</head>
<body>
	<div class="titulos">Meu teste #1 - OBJETOS</div>

	<? 
	class Pessoa{

		private $nome;
		private $email;
		private $telefone;

		#método construtor, inicializa as variáveis quando um obj. é instanciado passando os valores delas.
		function __construct(){
			/*$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $telefone;*/
			echo "<div class='aviso blue'>Novo objeto criado.</div>";
		}


		#métodos públicos set e get, para var. privadas.
		public function setAll($nome, $email, $telefone){
			$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $telefone;
			echo "<div class='aviso green'>Novos valores setados.</div>";

		}
		public function getAll(){
			echo "<div class='aviso blue'>Listando os valores.</div><div class='aviso resposta'>Nome: ".$this->nome." -- E-mail: ".$this->email." -- Telefone: ".$this->telefone.'</div>';
		}

		function __destruct(){
			echo "<div class='aviso blue'>Listando os valores.</div><div class='aviso resposta'>Nome: ".$this->nome." -- E-mail: ".$this->email." -- Telefone: ".$this->telefone.'</div>';
			echo "<div class='aviso red'>Objetos destruídos.</div>";
			echo "<div class='aviso blue'>Listando os valores.</div><div class='aviso resposta'>Nome: ".$this->nome." -- E-mail: ".$this->email." -- Telefone: ".$this->telefone.'</div>';
		}
	
	}

	#instânciando o objeto
	$p = new Pessoa();
	$p->setAll('Marcos','marcosfreitas@c4network.com.br','(+55) 098 8220.9564');
	$p->getAll();
	?>
</body>
</html>

