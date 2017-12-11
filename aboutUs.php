<!DOCTYPE html>
<html lang="pt-br">
	<head> <title> Orbis - Mapa Interativo </title> 			
		<style type="text/css">	
		#globo{
			width:400px;
			height:300px;
			position:absolute;
			top: 100px;
			left: 550px;
		}
		
		#Titulo {
			font:bold 20px "Papyrus Condensed";
			font-size: 25px;
			position: relative;
			left: 50px;
		}		
		
		#Projeto {
			font:bold 20px "Papyrus Condensed";
			font-size: 25px;
			position: relative;
			top: 250px;
			left: 100px;
		}
		
		#Agradecimentos {
			font:bold 20px "Papyrus Condensed";
			font-size: 25px;
			position: relative;
			top: 300px;
			left: 50px;
		}			
			.button {
				font:bold 20px "Papyrus Condensed";
				font-style:normal;
				background:#378585;
				color:#fcfcfc;
				border:4px inset #3c4142;
				text-shadow:0px 0px 18px #000000;
				box-shadow:-8px 1px 10px #574f51;
				-moz-box-shadow:-8px 1px 10px #574f51;
				-webkit-box-shadow:-8px 1px 10px #574f51;
				border-radius:10px 10px 10px 10px;
				-moz-border-radius:10px 10px 10px 10px;
				-webkit-border-radius:10px 10px 10px 10px;
				width:300px;
				padding: 15px;
				font-size: 20px;
				margin: 0 auto;
				cursor: pointer;
			}

			.dvbutton {
				position: absolute;
				display: inline-block;
				top:1325px; 
				left:620px;
			}

			.dvbutton:hover .button {
				background-color: #3e8e41;
			}
		
			a.button {
				 text-decoration: none;
			}
		
		
		
		
		
		</style> 
	<body bgcolor="E3E0DB">
		<img src="Imagens/globo.gif" id="globo">
		<div id="Titulo"> <h1> Orbis - O mundo inteiro à um clique de distância! </h1> </div>	
		<div id="Projeto"> 
		<p>O projeto Orbis tem como principal objetivo auxiliar estudantes a trabalhar com ferramentas como a internet em seus estudos.
		<br>
		Nesse site você terá acesso às principais informações de todos os paises do mundo em apenas um clique.
		<br>
		<br>
		Desenvolvido por Felipe Arruda, Luis Guilherme Rodrigues e Rafaela Zanezi, estudantes da ETEC Bento Quirino, 
		<br>
		cursando o segundo ano de informática.
		<br>
		<br>
		As linguagens utilizadas para desenvolver esse projeto foram: HTML, CSS, PHP, Javascript, JQuery e SQL.
		<br>
		<br>
		<!-- JQuery --> <img src="http://precision-software.com/wp-content/uploads/2014/04/jQurery.gif" width="220px" height="220px"> 
		<!-- HTML --> <img src="http://www.fancyicons.com/free-icons/101/html5/png/256/logo_256.png" width="220px" height="220px"> 
		<!-- Javascript --> <img src="https://www.all-statecredit.com/wordpress/wp-content/uploads/2015/07/javascript.png" width="180px" height="220px"> 
		<!-- CSS --> <img src="http://placedevensina.com.br/wp-content/uploads/2016/06/CSS.png" width="170px" height="220px"> 
		<!-- PHP --> <img src="http://includesi.fa7.edu.br/wp-content/uploads/2015/11/page_php.png" width="200px" height="200px"> 
		<!-- SQL --> <img src="http://divinitycomputing.com/wp-content/uploads/2015/12/mysql-logo.png" width="220px" height="220px"> 
		</div>

		<div id="Agradecimentos">
			<p> Agradecimentos especiais à professora Mariana Rocha Arduini e à todos os 
			<br>
			professores que nos auxiliaram no desenvolvimento do projeto. </p>
			<br>
			Agradecemos por nos prestigiarem.
			<br>
			<br>
			Campinas, Setembro de 2016.
		</div> 
		<!-- Voltar -->
				<div class="dvbutton">
				<a href="index.php" class="button">Voltar à Página Principal</a> 
				</div>		
	</body> 