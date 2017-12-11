<!DOCTYPE html>
<html lang="pt-br">
	<head> <title> Orbis - Mapa Interativo </title> 			
		<style type="text/css">	
			.dropbtn {
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
				width:100px;
				padding: 10px;
				font-size: 16px;
				margin:0 auto;
				cursor: pointer;
			}

			.dropup {
				position: relative;
				display: inline-block;
			}

			.dropup-content {
				-moz-box-shadow:-8px 1px 10px #574f51;
				-webkit-box-shadow:-8px 1px 10px #574f51;
				border-radius:10px 10px 10px 10px;
				-moz-border-radius:10px 10px 10px 10px;
				-webkit-border-radius:10px 10px 10px 10px;
				border:4px inset #3c4142;
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 93px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				margin:0 auto;
			}

			.dropup-contentBusca {
				 -moz-box-shadow:-8px 1px 10px #574f51;
				-webkit-box-shadow:-8px 1px 10px #574f51;
				border-radius:10px 10px 10px 10px;
				-moz-border-radius:10px 10px 10px 10px;
				-webkit-border-radius:10px 10px 10px 10px;
				border:4px inset #3c4142;
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 271px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				margin:0 auto;
			}

			.dropup-content a {
				color: black;
				padding: 10px 10px;
				text-decoration: none;
				display: block;
			}

			.dropup-contentBusca a {
				padding: 0px 10px;
				text-decoration: none;
				display: block;
			}

			.dropup-content a:hover {background-color: #f1f1f1}
			.dropup-contentBusca a:hover {background-color: #f1f1f1}

			.dropup:hover .dropup-content {
				bottom:50px;         /* <- this is the trick to push the ul up */
				display: block;
			}

			.dropup:hover .dropup-contentBusca {
				bottom:50px;         /* <- this is the trick to push the ul up */
				display: block;
			}

			.dropup:hover .dropbtn {
				background-color: #3e8e41;
			}

			#Bandeiras {
				width:170px;
				height:100px;
				position:absolute;
				top: 6px; 
				left: 6px;
			}
			
		</style>
		<!-- Ajax -->	
		<meta charset="utf-8">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		
		<!-- JQuery -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.js"> </script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"> </script> 
		
		<!-- Coordenadas da página -->
		<!-- 
		<script type="text/javascript">
		window.onload = init;
		function init() {
			if (window.Event) {
			document.captureEvents(Event.MOUSEMOVE);
			}
			document.onmousemove = getCursorXY;
		}

		function getCursorXY(e) {
			document.getElementById('cursorX').value = (window.Event) ? e.pageX : event.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft);
			document.getElementById('cursorY').value = (window.Event) ? e.pageY : event.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
		}
		
		</script>	--> 
	
		<!-- Function da dialog (Ainda fora do uso) -->
		<script type="text/javascript">
			$(".blue").on("click", function(e){
				e.preventDefault();
			 });
			 
			function InfoPais(pais) {  					
				$('#dialog').empty(); //Limpando a tabela				
				$.ajax({
					type:'post',		//Definimos o método HTTP usado
					dataType: 'json',	//Definimos o tipo de retorno
					url: 'getDados.php?pais=' + pais,//Definindo o arquivo onde serão buscados os dados
					success: function(dados){
						$('#dialog').append('País: '+dados[0].nome+'<p>Capital: '+dados[0].capital+'</p><p>Idioma: '+dados[0].idioma+'</p><p>Moeda: '+dados[0].moeda+'</p><p>Extensão Territorial: '+dados[0].territorio+'</p><p>População: '+dados[0].populacao+'</p><p>Densidade Demográfica: '+dados[0].densiDemo+'</p><p>PIB<i>(per capita)</i>: '+dados[0].pib+'</p><p>IDH: '+dados[0].idh+'</p><p>Taxa de Natalidade: '+dados[0].natalidade+'</p><p>Taxa de Mortalidade: '+dados[0].mortalidade);
					}
				});
				$("#dialog").dialog({
				height: 525, 
				width: 400
				});
			}
			
		function image(img) {
			var src = img.src;
			window.open(src);
		} 
		</script>
	</head>
		<body bgcolor="E3E0DB">
			<!-- Menu -->
				<div class="dropup" style='top:725px; left:6px;'>
					<button class="dropbtn">Mais</button>
						<div class="dropup-content">
							<a href="index.php">Atualizar</a>
							<a href="aboutUs.php">Sobre</a>
					</div>
				</div>
									
				<!-- Busca -->
			<!--	<div class="dropup" style='top:725px; left:6px;'>
					<button class="dropbtn">Busca</button>
						<div class="dropup-contentBusca" id="divBusca">
							<form onsubmit="Busca(this.value)" method="post">
								<p> <a>
								<input type="text" name="Busca" id="txtbusca" /> 
								<input type="submit" id="btnPesquisar" value="Pesquisar"/>  
								<a> </p> 
							</form>
						</div>
				</div> -->
				
			<!-- Exibe as coordenadas da página  -->
			<!-- <input type="text" id="cursorX" size="3"> X-position of the mouse cursor
			<br /><br />
			<input type="text" id="cursorY" size="3"> Y-position of the mouse cursor -->
			<img src="Imagens/Bandeiras.png" id="Bandeiras" />	
			<!-- Imagem Base - Mapa Raiz --> <img src="Imagens/Mapa-Raiz.png" alt="MapaMundi" width="1520 px" height="735px" usemap="#MapaMundi" id="Mapa" />
				<map name="MapaMundi">	
				<!-- Chamando a dialog com as informações --> <div id="dialog" title="Informações"> </div> 
				<!-- Países (Ordem Alfabética) --> 
					<!-- Chamando a dialog com as informações --> <div id="dialog" title="Informações"> </div> 
				<!-- Países (Ordem Alfabética) --> 
					<!-- Afeganistão --> <area shape="poly" coords="1020,240,1000,225,1020,210,1040,215" onclick="InfoPais('Afeganistao');" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Afeganistao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Africa do Sul --> <area shape="poly" coords="870,530,820,530,885,474,890,500" onclick="InfoPais('Africa do Sul')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Africa Do Sul.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Akrotiri -->
					<!-- Albania --> <area shape="poly" coords="836,197,834,194,833,186,834,185,837,186,838,192" onclick="InfoPais('Albania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Albania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
                    <!-- Alemanha --> <area shape="poly" coords="778,152,784,136,790,131,,808,138,812,147,803,150,809,157,804,162,794,162" onclick="InfoPais('Alemanha')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Alemanha.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Andorra --> <area shape="poly" coords="756,183,753,178,750,180" onclick="InfoPais('Andorra')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Andorra.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>
					<!-- Angola --> <area shape="poly" coords="850,454,800,451,808,404,847,412" onclick="InfoPais('Angola')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Angola.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Anguila -->
					<!-- Antartida -->
					<!-- Antígua e Barbuda --> <area shape="poly" coords="501,304,501,303,504,302,503,304" onclick="InfoPais('Antigua e Barbuda')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/ Antígua e Barbuda.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Antilhas Neerlandesas -->
					<!-- Arabia Saudita --> <area shape="poly" coords="985,281,934,298,898,246,917,230" onclick="InfoPais('Arabia Saudita')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Arábia Saudita.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Arctic Ocean -->
					<!-- Argelia --> <area shape="poly" coords="774,288,723,249,779,209,800,270" onclick="InfoPais('Argelia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Argelia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Argentina --> <area shape="poly" coords="522,619,491,599,491,581,482,566,482,526,485,475,506,483,518,490,518,500,531,500,521,512,520,527,532,541,514,549,505,603,527,620" onclick="InfoPais('Argentina')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Argentina.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Armênia --> <area shape="poly" coords="936,196,935,193,932,190,927,191,933,198" onclick="InfoPais('Armenia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Armenia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Aruba -->
					<!-- Ashmore and Cartier Islands -->
					<!-- Atlantic Ocean -->
					<!-- Australia --> <area shape="poly" coords="1319,575,1199,523,1268,429,1395,483" onclick="InfoPais('Australia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Australia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Austria --> <area shape="poly" coords="794,163,806,162,807,160,814,156,820,158,820,165,808,166" onclick="InfoPais('Austria')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Austria.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Azerbaijao --> <area shape="poly" coords="" onclick="InfoPais('Azerbaijao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Azerbaijao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Açores --> <area shape="poly" coords="660,213,631,214,620,190,662,186,665,207" onclick="InfoPais('Acores')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Açores.jpg'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 

					<!-- Bahamas --> <area shape="poly" coords="454,280,438,266,435,255,443,255,453,272,463,276" onclick="InfoPais('Bahamas')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bahamas.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bangladesh --> <area shape="poly" coords="1125,275,1120,262,1120,257,1124,260,1132,262,1132,266,1136,270" onclick="InfoPais('Bangladesh')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bangladesh.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Barbados --> <area shape="poly" coords="504,326,504,324,506,324,506,326" onclick="InfoPais('Barbados')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/af.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bahrain --> <area shape="poly" coords="964,259,964,258,965,258,965,259" onclick="InfoPais('Bahrein')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bahrain.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Belgica --> <area shape="poly" coords="769,148,774,143,781,150,777,153" onclick="InfoPais('Belgica')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Belgica.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Belize --> <area shape="poly" coords="387,302,388,295,391,290,392,298" onclick="InfoPais('Belize')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Belize.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Benin --> <area shape="poly" coords="765,347,766,335,764,333,761,328,764,328,768,323,773,325,773,330,771,333,770,346" onclick="InfoPais('Benin')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Benin.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bermudas --> <area shape="poly" coords="499,231,498,229,501,229" onclick="InfoPais('Bermudas')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bermudas.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bielorrússia --> <area shape="poly" coords="848,144,843,135,850,134,856,126,874,136,865,146" onclick="InfoPais('Bielorrusia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bielorrusia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Birmânia --> <area shape="poly" coords="1140,279,1153,251,1160,266,1167,273,1173,277,1162,289,1164,298,1150,302,1151,291" onclick="InfoPais('Birmania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mianmar.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bolivia--> <area shape="poly" coords="479,477,472,453,470,425,480,420,482,427,503,441,504,446,517,460,507,458,497,466,496,471,483,472" onclick="InfoPais('Bolivia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bolivia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bosnia e Herzegovina --> <area shape="poly" coords="825,182,819,174,822,172,830,172,830,181,828,183" onclick="InfoPais('Bosnia e Herzegovina')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bosnia e Herzegovina.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Botsuana --> <area shape="poly" coords="845,495,839,478,843,460,859,458,875,473,861,490,853,486" onclick="InfoPais('Botsuana')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Botsuana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Brasil --> <area shape="poly" coords="546,521,527,510,539,494,518,472,518,453,505,437,484,428,483,416,473,422,463,423,448,410,453,398,466,388,463,375,488,366,486,358,504,353,505,370,527,363,544,364,554,378,610,398,611,414,595,435,584,477,559,492" onclick="InfoPais('Brasil')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Brasil.png'" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Brasil.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src='Imagens/Bandeiras.png';"/> 
					<!-- Brunei --> <area shape="poly" coords="1217,365,1236,365,1242,353,1253,352,1247,341" onclick="InfoPais('Brunei')" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Brunei.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Bulgaria --> <area shape="poly" coords="847,189,844,178,846,180,866,180,866,186,860,188,859,191" onclick="InfoPais('Bulgaria')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bulgaria.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Burquina Faso -->
					<!-- Burúndi --> <area shape="poly" coords="882,394,880,388,885,386,887,386" onclick="InfoPais('Burundi')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Burúndi.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Butao --> <area shape="poly" coords="1140,278,1135,263,1126,263,1124,258,1133,255,1132,252,1147,245,1153,254,1148,257" onclick="InfoPais('Butao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Butao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Cabo Verde --> <area shape="poly" coords="652,298,665,298,667,310,650,312" onclick="InfoPais('Cabo Verde')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Cabo Verde.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Camaroes --> <area shape="poly" coords="798,363,792,354,808,337,818,321,817,348,821,364" onclick="InfoPais('Camaroes')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Camaroes.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Camboja --> <area shape="poly" coords="1185,318,1190,311,1200,311,1196,326" onclick="InfoPais('Camboja')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Camboja.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Canadá --> <area shape="poly" coords="422,158,410,152,295,152,281,138,286,108,328,70,372,66,431,40,521,27,563,23,600,26,541,61,530,50,538,61,555,67,564,80,542,102,506,90,511,84,493,101,464,92,435,112,467,126,465,144,475,138,476,129,491,122,489,112,498,98,515,92,539,107,559,134,563,161,539,159,529,169,507,177,505,162,496,161,443,182,449,171,433,156" onclick="InfoPais('Canada')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Canada.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src='Imagens/Bandeiras.png';"/> 
					<!-- Catar --> <area shape="poly" coords="966,262,966,258,970,260,969,265" onclick="InfoPais('Catar')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Catar.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Cazaquistão --> <area shape="poly" coords="1062,182,983,165,947,175,964,143,1026,130,1074,153" onclick="InfoPais('Cazaquistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Cazaquistão.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Chade --> <area shape="poly" coords="823,338,818,318,812,308,823,297,823,270,855,287,851,310,850,320,840,332" onclick="InfoPais('Chade')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Chade.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Chile --> <area shape="poly" coords="488,602,470,572,468,544,463,458,468,455,479,480,475,493,471,515,478,529,479,562,488,582" onclick="InfoPais('Chile')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Chile.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- China --> <area shape="poly" coords="1212,294,1189,270,1173,274,1146,240,1111,248,1072,230,1075,217,1045,200,1065,185,1079,157,1156,187,1199,162,1189,153,1211,140,1255,160,1234,268," onclick="InfoPais('China')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/China.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Chipre --> <area shape="poly" coords="885,220,882,217,894,215,894,218" onclick="InfoPais('Chipre')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Chipre.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Cingapura --> <area shape="poly" coords="1242,390,1219,386,1214,370,1241,370,1249,358,1256,370" onclick="InfoPais('Cingapura')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src='Imagens/Cingapura.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src='Imagens/Bandeiras.png';"/>
					<!-- Clipperton Island -->
					<!-- Colômbia --> <area shape="poly" coords="451,385,439,374,426,368,431,343,442,325,450,331,459,319,453,342,465,348,471,349,470,366,460,371,463,386" onclick="InfoPais('Colombia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Colombia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Comores --> <area shape="poly" coords="944,432,938,432,938,425,946,426" onclick="InfoPais('Comores')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Comores.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Congo --> <area shape="poly" coords="815,396,807,394,809,386,818,382,819,366,832,364,829,374,826,382" onclick="InfoPais('Congo')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Congo.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Coral Sea Islands -->
					<!-- Coreia do Norte --> <area shape="poly" coords="1249,206,1239,193,1255,186,1256,200" onclick="InfoPais('Coreia do Norte')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Coréia Do Norte.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Coreia do Sul --> <area shape="poly" coords="1271,214,1260,220,1251,206,1257,200" onclick="InfoPais('Coreia do Sul')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Coreia Do Sul.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Costa do Marfim --> <area shape="poly" coords="722,353,725,337,724,340,726,329,735,329,745,332,745,353,728,357" onclick="InfoPais('Costa do Marfim')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Costa Do Marfim.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Costa Rica --> <area shape="poly" coords="409,336,397,330,398,325,405,325,409,331" onclick="InfoPais('Costa Rica')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Costa Rica.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>  
					<!-- Croacia --> <area shape="poly" coords="823,181, 816,177,815,172,819,166,825,170,829,172,821,171,817,173" onclick="InfoPais('Croacia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Croacia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Cuba --> <area shape="poly" coords="435,285,407,276,417,270,449,284" onclick="InfoPais('Cuba')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Cuba.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Dhekelia -->
					<!-- Dinamarca --> <area shape="poly" coords="784,125,794,118,804,129" onclick="InfoPais('Dinamarca')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Dinamarca.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Djibuti --> <area shape="poly" coords="938,326,934,325,935,320,939,320,939,323" onclick="InfoPais('Djibuti')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Djibuti.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- DomÃ­nica -->
					
					<!-- Egito --> <area shape="poly" coords="860,274,860,233,895,234,903,270,897,276" onclick="InfoPais('Egito')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Egito.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- El Salvador --> <area shape="poly" coords="391,316,379,316,384,310" onclick="InfoPais('El Salvador')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/El Salvador.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Emirados Arabes Unidos --> <area shape="poly" coords="975,274,971,268,980,268,988,260,987,265,985,274" onclick="InfoPais('Emirados Arabes Unidos')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Emirados Arabes.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Equador --> <area shape="poly" coords="425,396,418,391,412,378,425,369,438,375,439,381" onclick="InfoPais('Equador')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Equador.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Eritreia --> <area shape="poly" coords="912,310,912,301,918,295,924,308,929,310,938,321,936,320,928,312,922,311" onclick="InfoPais('Eritreia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Eritreia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Eslovaquia --> <area shape="poly" coords="822,157,826,154,839,155,839,158,829,158,828,160,822,160" onclick="InfoPais('Eslovaquia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Eslovaquia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Eslovenia --> <area shape="poly" coords="814,173,807,170,809,170,818,166,819,164" onclick="InfoPais('Eslovenia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Eslovenia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Espanha --> <area shape="poly" coords="725,186,727,179,770,185,752,209,737,213,732,206,735,186" onclick="InfoPais('Espanha')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Espanha.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Estados Unidos da América --> <area shape="poly" coords="359,256,347,240,328,230,289,226,279,218,275,193,295,158,307,154,416,160,437,168,435,186,504,172,488,186,459,214,428,238,427,261,394,242" onclick="InfoPais('Estados Unidos')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Estados Unidos Da America.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Estados Unidos da America.png';"> <area shape="poly" coords="283,108,211,119,196,106,224,83,243,73,288,63,327,68" onclick="InfoPais('Estados Unidos')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Estados Unidos Da America.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Estonia --> <area shape="poly" coords="832,117,833,112,852,110,853,118" onclick="InfoPais('Estonia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Estonia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Etiópia --> <area shape="poly" coords="920,357,908,353,899,339,910,312,923,309,930,319,937,331,954,339,933,354,927,352" onclick="InfoPais('Etiopia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Etiopia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- FaroÃ© -->
					<!-- Fiji --> <area shape="poly" coords="1493,459,1492,457,1498,455,1497,459" onclick="InfoPais('Fiji')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Fiji.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Filipinas --> <area shape="poly" coords="1254,289,1267,290,1292,342,1280,352,1263,356,1243,336" onclick="InfoPais('Filipinas')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Filipinas.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Finlandia --> <area shape="poly" coords="834,83,832,73,838,67,850,72,859,100,837,107,831,104,830,103,829,98,838,84" onclick="InfoPais('Finlandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Finlandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- França --> <area shape="poly" coords="753,181,755,170,752,164,743,160,741,157,767,147,786,155,782,166,785,179,782,181,771,184" onclick="InfoPais('Franca')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/França.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Gabão --> <area shape="poly" coords="803,391,793,379,795,373,811,366,816,378,806,386" onclick="InfoPais('Gabao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Gabao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Gambia --> <area shape="poly" coords="688,316,693,313,707,315,708,318,688,318" onclick="InfoPais('Gambia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Gambia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Gana --> <area shape="poly" coords="745,352,748,338,746,330,748,326,759,326,760,349,750,354" onclick="InfoPais('Gana')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Gana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Gaza --> <area shape="poly" coords="897,232,898,228,899,230" onclick="InfoPais('Gaza')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Gaza.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Georgia --> <area shape="poly" coords="916,182,932,185,931,189,925,190,919,188" onclick="InfoPais('Georgia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Georgia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Geórgia do Sul e Sandwich do Sul --> <area shape="poly" coords="631,622,619,618,624,610,702,610,700,618" onclick="InfoPais('Georgia do Sul e Sandwich do Sul')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Georgia do Sul e Sandwich do Sul.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Gibraltar --> <area shape="poly" coords="750,210,752,209,752,210,750,212" onclick="InfoPais('Gibraltar')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Gibraltar.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Granada --> <area shape="poly" coords="500,323,499,320,502,321,502,324" onclick="InfoPais('Granada')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Granada.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Grecia --> <area shape="poly" coords="837,198,840,192,855,190,866,220,845,217" onclick="InfoPais('Grecia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Grecia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Groenlândçia --> <area shape="poly" coords="609,108,592,74,596,58,593,47,567,46,600,26,724,27,686,68,637,82" onclick="InfoPais('Groelandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Groelandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>
					<!-- Guame -->
					<!-- Guatemala --> <area shape="poly" coords="381,310,372,310,384,294,385,309" onclick="InfoPais('Guatemala')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guatemala.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Guernsey -->
					<!-- Guiana --> <area shape="poly" coords="504,350,505,341,516,348,512,354,518,365,509,368" onclick="InfoPais('Guiana')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guiana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Guiana Francesa --> <area shape="poly" coords="531,366,530,364,533,350,540,355,537,362" onclick="InfoPais('Guiana Francesa')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guiana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Guine--> <area shape="poly" coords="695,327,702,321,720,320,724,340,720,342,715,337,710,330,707,331,703,334" onclick="InfoPais('Guine')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guine.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Guine Equatorial --> <area shape="poly" coords="799,371,800,366,806,366,804,370" onclick="InfoPais('Guine Equatorial')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guine Equatorial.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Guine-Bissau --> <area shape="poly" coords="690,321,703,319,696,329" onclick="InfoPais('Guine-Bissau')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Guine Bissau.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Haiti --> <area shape="poly" coords="461,294,447,293,453,286,461,286" onclick="InfoPais('Haiti')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Haiti.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Havai --> <area shape="poly" coords="111,290,100,276,162,276,163,286" onclick="InfoPais('Havai')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Havai.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Holanda --> <area shape="poly" coords="780,144,776,141,777,137,784,134" onclick="InfoPais('Holanda')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Holanda.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Honduras --> <area shape="poly" coords="395,314,386,309,390,303,404,302,409,306" onclick="InfoPais('Honduras')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Honduras.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Hong Kong -->
					<!-- Hungria --> <area shape="poly" coords="820,161,828,161,838,158,842,160,840,162,836,168,833,167,827,170,820,165" onclick="InfoPais('Hungria')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Hungria.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Iemen --> <area shape="poly" coords="940,320,936,303,944,299,954,300,958,294,972,292,980,305" onclick="InfoPais('Iemen')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Iemen.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
				    <!-- Ilha Bouvet --> <area shape="poly" coords="666,637,667,636,670,634,670,638" onclick="InfoPais('Ilhas Bouvet')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Ilha Bouvet.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Ilha do Natal -->
					<!-- Ilha Norfolk -->
					<!-- Ilhas CaimÃ£o -->
					<!-- Ilhas Cook -->
					<!-- Ilhas dos Cocos -->
					<!-- Ilhas Falkland --> <area shape="poly" coords="544,612,535,609,539,602,610,602,595,614,551,617" onclick="InfoPais('Ilhas Falkland')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Ilhas Falkland.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Ilhas Heard e McDonald -->
					<!-- Ilhas Marshall -->
					<!-- Ilhas SalomÃ£o -->
					<!-- Ilhas Turcas e Caicos -->
					<!-- Ilhas Virgens Americanas -->
					<!-- Ilhas Virgens BritÃ¢nicas -->
					<!-- India --> <area shape="poly" coords="1038,269,1051,266,1043,255,1061,230,1055,223,1069,214,1074,218,1073,234,1084,239,1082,248,1117,261,1121,277,1093,306,1093,329,1084,338" onclick="InfoPais('India')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/India.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Indian Ocean -->
					<!-- Indonesia --> <area shape="poly" coords="1159,349,1173,354,1192,374,1237,370,1242,357,1295,362,1352,387,1351,416,1286,410,1277,411,1279,418,1268,428,1196,407" onclick="InfoPais('Indonesia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Indonesia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Ira --> <area shape="poly" coords="943,198,950,207,962,212,971,209,972,208,980,204,1000,212,999,224,1005,242,1016,255,1010,262,994,259,988,254,980,256,967,249,960,241,954,240,942,224,934,208,932,198,936,201" onclick="InfoPais('Ira')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Ira.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Iraque --> <area shape="poly" coords="916,232,913,227,921,222,921,212,926,206,934,210,942,216,940,221,952,241,949,240,947,245,936,244,932,239" onclick="InfoPais('Iraque')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Iraque.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Irlanda --> <area shape="poly" coords="722,144,723,132,734,133,736,142" onclick="InfoPais('Irlanda')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Irlanda.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Islandia --> <area shape="poly" coords="696,94,683,92,679,86,684,80,710,82,714,87" onclick="InfoPais('Islandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Islandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Israel --> <area shape="poly" coords="0898,243,896,235,900,229" onclick="InfoPais('Israel')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Israel.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Itália --> <area shape="poly" coords="786,181,784,171,796,166,801,166,809,170,805,177,830,197,816,212,808,206,819,204,819,196,791,201" onclick="InfoPais('Italia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Italia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					,
					<!-- Jamaica --> <area shape="poly" coords="441,293,435,294,412,289,435,288" onclick="InfoPais('Jamaica')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Jamaica.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>
					<!-- Jan Mayen -->
					<!-- Japão --> <area shape="poly" coords="1283,235,1272,224,1282,214,1299,189,1291,184,1288,171,1325,163,1311,198,1315,214" onclick="InfoPais('Japao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Japao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Jersey --> <area shape="poly" coords="746,155,750,152,749,152,746,154" onclick="InfoPais('Jersey')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Jersey.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Jordânia --> <area shape="poly" coords="900,246,898,230,904,232,912,226,915,232,906,235,908,240" onclick="InfoPais('Jordania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Jordania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Kiribati --> <area shape="poly" coords="93,369,94,365,98,366,100,372" onclick="InfoPais('Kiribati')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Kiribati.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Kuwait --> <area shape="poly" coords="948,245,950,240,952,246" onclick="InfoPais('Kuwait')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/kuwait.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Laos --> <area shape="poly" coords="1201,310,1188,292,1180,292,1175,283,1178,274,1192,288,1207,308" onclick="InfoPais('Laos')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Laos.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Lesoto --> <area shape="poly" coords="870,514,868,511,875,506,876,514,871,516" onclick="InfoPais('Lesoto')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Lesoto.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Letonia --> <area shape="poly" coords="830,124,834,118,840,121,842,116,854,120,854,125" onclick="InfoPais('Letonia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Letonia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Líbano --> <area shape="poly" coords="900,227,903,221,902,220,899,225" onclick="InfoPais('Libano')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Libano.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Liberia --> <area shape="poly" coords="711,344,716,338,722,342,720,352" onclick="InfoPais('Liberia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Liberia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Libia -->	 <area shape="poly" coords="852,282,823,268,805,266,795,258,795,238,806,226,857,231,858,282" onclick="InfoPais('Libia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Libia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Listenstaine -->
					<!-- Lituania --> <area shape="poly" coords="832,128,838,125,836,124,850,126,850,133,844,134" onclick="InfoPais('Lituania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Lituania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Luxemburgo --> <area shape="poly" coords="782,153,779,152,781,150" onclick="InfoPais('Luxemburgo')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Luxemburgo.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Macau -->
					<!-- Macedonia --> <area shape="poly" coords="840,191,839,187,844,186,846,188" onclick="InfoPais('Macedonia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Macedonia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Madagascar --> <area shape="poly" coords="940,490,935,474,940,450,962,429,967,445,950,487" onclick="InfoPais('Madagascar')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Madagascar.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Malasia --> <area shape="poly" coords="1188,345,1249,342,1259,351,1252,356,1245,354,1239,368,1194,369,1182,359,1182,348" onclick="InfoPais('Malasia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Malasia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Malávi --> <area shape="poly" coords="904,453,905,446,904,426,901,422,896,420,895,440" onclick="InfoPais('Malavi')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Malavi.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Maldivas --> <area shape="poly" coords="1074,374,1074,366,1113,367,1112,373" onclick="InfoPais('Maldivas')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Maldivas.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Mali --> <area shape="poly" coords="734,326,724,326,707,305,736,304,731,260,772,289,773,302,751,306,737,314" onclick="InfoPais('Mali')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mali.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Malta -->
					<!-- Man, Isle of -->
					<!-- Marianas do Norte -->
					<!-- Marrocos --> <area shape="poly" coords="734,215,751,216,740,236,726,241,726,250,705,248" onclick="InfoPais('Marrocos')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Marrocos.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Maurícia --> <area shape="poly" coords="994,469,994,466,998,467,998,470" onclick="InfoPais('Mauricia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mauricia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> .
					<!-- Mauritânia --> <area shape="poly" coords="719,253,734,259,730,261,735,302,706,305,697,297,691,298,689,278,704,276" onclick="InfoPais('Mauritania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mauritania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Mayotte -->
					<!-- Mexico --> <area shape="poly" coords="368,304,355,306,321,287,307,272,289,248,288,228,309,233,328,231,338,244,346,241,379,290,384,278,398,278,392,290,377,298,379,300" onclick="InfoPais('Mexico')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mexico.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Micronésia --> <area shape="poly" coords="1403,352,1402,350,1406,349,1405,351" onclick="InfoPais('Micronesia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Micronesia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Mocambique --> <area shape="poly" coords="893,487,887,477,893,463,892,452,889,442,897,426,926,425,923,447,900,466,903,478" onclick="" href="" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Moçambique.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Moldavia --> <area shape="poly" coords="859,159,868,162,871,167,864,170" onclick="InfoPais('Moldavia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Maldavia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Monaco --> <area shape="poly" coords="775,181,777,180,777,182" onclick="InfoPais('Monaco')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Monaco.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Mongólia --> <area shape="poly" coords="1199,162,1159,188,1098,170,1080,154,1119,142,1184,151" onclick="InfoPais('Mongolia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mongolia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Monserrate -->
					<!-- Montenegro --> <area shape="poly" coords="832,186,828,184,832,180,834,183" onclick="InfoPais('Montenegro')" href="" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Montenegro.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Mundo -->
					<!-- Mianmar  <area shape="poly" coords="1140,279,1153,251,1160,266,1167,273,1173,277,1162,289,1164,298,1150,302,1151,291" onclick="InfoPais('Mianmar')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Mianmar.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					-->
					<!-- Namíbia --> <area shape="poly" coords="832,500,819,499,806,453,841,458,834,470,838,491" onclick="InfoPais('Namibia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Namibia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Nauru --> <area shape="poly" coords="1440,354,1440,348,1445,350,1445,356" onclick="InfoPais('Nauru')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nauru.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Navassa Island -->
					<!-- Nepal --> <area shape="poly" coords="1084,242,1083,248,1114,257,1116,252,1107,252,1089,241" onclick="InfoPais('Nepal')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nepal.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Nicarágua --> <area shape="poly" coords="406,324,396,322,391,317,409,310," onclick="InfoPais('Nicaragua')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nicaragua.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Níger --> <area shape="poly" coords="809,314,777,310,766,317,760,306,775,303,775,289,805,269,817,271,819,298,810,315" onclick="InfoPais('Niger')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Niger.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- NigÃ©ria --> <area shape="poly" coords="781,354,778,346,767,342,775,314,811,316,809,332,795,342,791,352" onclick="InfoPais('Nigeria')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nigeria.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Niue -->
					<!-- Noruega --> <area shape="poly" coords="774,101,788,93,801,74,837,64,851,65,849,70,840,68,835,73,821,74,810,77,798,94,800,109,797,113,793,112,786,116,780,116" onclick="InfoPais('Noruega')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Noruega.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
                    
					<!-- Nova Caledonia --> <area shape="poly" coords="1433,467,1470,473,1473,490,1426,490" onclick="InfoPais('Nova Caledonia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nova Caledonia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Nova Zelandia --> <area shape="poly" coords="1379,590,1379,568,1443,528,1457,546,1433,566" onclick="InfoPais('Nova Zelandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Nova Zelandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Oma--> <area shape="poly" coords="978,302,973,292,986,287,988,264,1004,276,996,292" onclick="InfoPais('Oma')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Oma.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Pacific Ocean -->
					<!-- Países Baixos
					
					<!-- Palau --> <area shape="poly" coords="1320,345,1319,340,1327,342,1327,345" onclick="InfoPais('Palau')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Palau.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Panamá --> <area shape="poly" coords="410,338,412,331,424,330,434,336,430,342" onclick="InfoPais('Panama')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Panama.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
                    <!-- Papua-Nova Guine --> <area shape="poly" coords="1353,388,1372,385,1388,378,1405,395,1385,425,1376,419,1371,413,1361,413,1360,417,1352,417" onclick="InfoPais('Papua Nova-Guine')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Papua e Nova Guine.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
                    
					<!-- Paquistao --> <area shape="poly" coords="1011,262,1019,256,1005,243,1025,243,1036,234,1043,218,1040,214,1048,209,1064,217,1062,220,1052,221,1060,232,1050,251,1044,252,1043,256,1048,267,1037,269,1029,263" onclick="InfoPais('Paquistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Paquistão.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Paracel Islands -->
					<!-- Paraguai --> <area shape="poly" coords="519,496,522,490,507,482,501,473,513,465,519,479,532,484,532,493" onclick="InfoPais('Paraguai')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Paraguai.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Peru --> <area shape="poly" coords="465,454,438,441,415,396,427,398,443,380,462,390,451,398,446,408,455,419,468,430,469,446" onclick="InfoPais('Peru')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Peru.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Pitcairn -->
					<!-- PolinÃ©sia Francesa -->
					<!-- Polonia --> <area shape="poly" coords="813,146,810,136,823,130,840,134,840,132,842,140,841,155" onclick="InfoPais('Polonia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Polonia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Porto Rico -->
					<!-- Portugal --> <area shape="poly" coords="726,187,734,188,731,207,724,207,725,202,723,199" onclick="InfoPais('Portugal')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Portugal.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Quênia --> <area shape="poly" coords="922,392,901,374,908,366,900,355,919,360,931,357,930,380" onclick="InfoPais('Quenia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Quenia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Quirguistao --> <area shape="poly" coords="1046,200,1064,187,1060,183,1032,184,1031,190,1042,200" onclick="InfoPais('Quirguistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Quirguistao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
				
					<!-- Reino Unido --> <area shape="poly" coords="729,131,733,116,749,112,765,139,764,146,738,152,736,131" onclick="InfoPais('Reino Unido')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Reino Unido.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Republica Centro-Africana --> <area shape="poly" coords="825,362,819,350,824,342,839,341,838,336,844,336,852,328,873,353,854,354,852,356,843,352,840,352,836,360,830,359" onclick="InfoPais('Republica Centro Africana')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Republica Centro-Africana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- República Tcheca --> <area shape="poly" coords="804,150,818,148,819,150,824,152,820,156,810,156" onclick="InfoPais('Republica Tcheca')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Repuclica Tcheca.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- República Democrática Do Congo --> <area shape="poly" coords="875,426,851,421,849,406,822,398,828,387,835,374,839,354,882,356,880,392,883,407,875,413" onclick="InfoPais('Congo de Kinshasa')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Republica Democratica do Congo.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- República Dominicana --> <area shape="poly" coords="474,292,462,294,462,286" onclick="InfoPais('Republica Dominicana')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Republica Dominicana.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Romênia --> <area shape="poly" coords="837,170,843,162,857,160,866,176,855,180,846,180" onclick="InfoPais('Romenia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Romenia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Ruanda --> <area shape="poly" coords="883,386,881,383,882,380,887,379,887,385" onclick="InfoPais('Ruanda')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Ruanda.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Rússia --> <area shape="poly" coords="1078,153,1027,128,1001,124,974,132,979,144,945,140,929,148,930,155,937,165,934,173,932,181,898,168,906,151,888,145,855,97,856,67,914,72,900,58,915,46,947,42,1250,69,1308,70,1344,95,1329,105,1309,107,1328,129,1326,144,1295,121,1327,144,1294,121,1263,132,1294,164,1269,180,1258,180,1255,155,1188,133,1189,147" onclick="InfoPais('Russia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Russia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> <area shape="poly" coords="200,90,183,84,204,70,220,81" onclick="InfoPais('Russia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Russia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Salvador -->
					<!-- Samoa --> <area shape="poly" coords="40,442,32,436,37,426,73,427,72,439" onclick="InfoPais('Samoa')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Samoa.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Samoa Americana -->
					<!-- Santa Helena -->
					<!-- Santa LÃºcia -->
					<!-- SÃ£o CristÃ³vÃ£o e Neves -->
					<!-- SÃ£o Marinho -->
					<!-- SÃ£o Pedro e Miquelon -->
					<!-- San Tomé e Príncipe --> <area shape="poly" coords="784,376,783,373,788,373,790,376" onclick="InfoPais('San Tome e Principe')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/San Tome e Principe.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- SÃ£o Vicente e Granadinas -->
					<!-- Saara Ocidental --> <area shape="poly" coords="706,250,720,249,722,256,710,256,709,266;704,272,688,278" onclick="InfoPais('Saara Ocidental')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Saara Ocidental.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Seicheles --> <area shape="poly" coords="949,420,948,416,956,418,955,423" onclick="InfoPais('Seicheles')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Seicheles.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Senegal --> <area shape="poly" coords="690,302,698,300,709,315,700,312,688,312" onclick="InfoPais('Senegal')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Senegal.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
                    
					<!-- Serra Leoa --> <area shape="poly" coords="704,336,712,330,713,338,710,344" onclick="InfoPais('Serra Leoa')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Serra Leoa.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>    
					<!-- Servia --> <area shape="poly" coords="832,185,829,183,832,178,829,169,834,168,844,182,844,185,838,185,834,184" onclick="InfoPais('Servia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Servia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Siria --> <area shape="poly" coords="901,216,904,211,923,210,920,213,919,222,904,231,900,228,904,222" onclick="InfoPais('Siria')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Siria.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Somália --> <area shape="poly" coords="931,378,931,360,958,338,942,330,975,321,959,357" onclick="InfoPais('Somalia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Somalia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Southern Ocean -->
					<!-- Spratly Islands -->
					<!-- Sri Lanka --> <area shape="poly" coords="1094,347,1094,331,1102,339,1102,343" onclick="InfoPais('Siri Lanka')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Sri Lanka.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>   
					<!-- Suazilandia --> <area shape="poly" coords="888,500,884,498,887,492,891,495" onclick="InfoPais('Suazilandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Suazilandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Sudão --> <area shape="poly" coords="875,348,854,324,858,301,857,286,861,276,907,274,915,294,906,298,907,312,895,338,906,351,890,357" onclick="InfoPais('Sudao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Sudao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Suecia --> <area shape="poly" coords="798,125,803,92,812,74,825,75,834,85,816,102,816,124,802,127,796,115,799,111" onclick="InfoPais('Suecia')" href="#"onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Suecia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Suica --> <area shape="poly" coords="784,169,796,166,793,162,788,161,780,166" onclick="InfoPais('Suica')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Suiça.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Suriname --> <area shape="poly" coords="523,365,514,356,518,350,530,348,528,362" onclick="InfoPais('Suriname')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Suriname.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Svalbard e Jan Mayen -->
					
					<!-- Tailandia --> <area shape="poly" coords="1162,291,1172,282,1178,294,1187,294,1200,309,1187,310,1183,317,1177,317,1174,331,1186,346,1179,347,1169,341,1172,323,1172,312,1167,297" onclick="InfoPais('Tailandia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Tailandia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>  
					<!-- Taiwan --> <area shape="poly" coords="1255,275,1250,270,1252,259,1259,260" onclick="InfoPais('Taiwan')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Taiwan.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Tajiquistao --> <area shape="poly" coords="1051,208,1040,200,1035,196,1027,197,1025,208,1037,201,1040,211" onclick="InfoPais('Tajiquistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Tajiquistao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Tanzânia --> <area shape="poly" coords="905,424,902,418,887,410,890,391,902,380,921,395,927,422" onclick="InfoPais('Tanzania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Tanzania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- TerritÃ³rio BritÃ¢nico do Oceano Índico -->
					<!-- TerritÃ³rios Austrais Franceses -->
					<!-- Timor Leste --> <area shape="poly" coords="1283,419,1283,416,1291,412,1291,417" onclick="InfoPais('Timor Leste')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Timor Leste.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Togo --> <area shape="poly" coords="763,349,760,339,760,332,759,326,762,327,765,334,765,346" onclick="InfoPais('Togo')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Togo.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Tokelau -->
					<!-- Tonga -->
					<!-- Trindade e Tobago --> <area shape="poly" coords="499,330,500,322,506,328,504,331" onclick="InfoPais('Trindade e Tobago')" href="#"onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Trindade E Tobago.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Tunisia --> <area shape="poly" coords="791,209,799,209,804,232,794,235,789,221" onclick="InfoPais('Tunisia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Tunisia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Turcomenistao--> <area shape="poly" coords="971,207,968,194,969,192,977,190,978,186,982,185,995,190,1015,200,1019,207,1006,218,1001,215,999,211,980,203,970,207" onclick="InfoPais('Turcomenistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Turcomenistao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>
					<!-- Turquia --> <area shape="poly" coords="868,214,859,192,860,188,866,188,871,191,878,192,886,187,894,187,905,192,918,189,914,198,908,198,908,210" onclick="InfoPais('Turquia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Turquia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Tuvalu -->
					
					<!-- Ucrânia --> <area shape="poly" coords="842,159,849,144,870,145,876,141,889,149,904,153,903,162,889,168,862,158" onclick="InfoPais('Ucrania')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Ucrania.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
                    
					<!-- Uganda --> <area shape="poly" coords="883,378,891,359,899,357,903,367,899,373" onclick="InfoPais('Uganda')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Uganda.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/>
                    
					<!-- Uruguai --> <area shape="poly" coords="539,532,525,527,526,513,547,523" onclick="InfoPais('Uruguai')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Uruguai.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Uzbequistao --> <area shape="poly" coords="974,189,970,174,983,166,989,169,991,177,1010,180,1012,186,1019,190,1029,187,1028,193,1024,198,1024,207,1015,200,1005,198,983,184" onclick="InfoPais('Uzbequistao')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Uzbequistao.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Vanuatu --> <area shape="poly" coords="1429,435,1474,435,1462,466,1452,466" onclick="InfoPais('Vanuatu')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Vanuatu.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Vaticano -->
					<!-- Venezuela --> <area shape="poly" coords="478,370,474,347,467,346,455,330,463,322,495,325,505,336,499,346,501,351,483,356,484,367" onclick="InfoPais('Venezuela')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Venezuela.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Vietna --> <area shape="poly" coords="1178,273,1190,271,1198,280,1196,286,1195,290,1207,301,1215,322,1198,336,1199,322,1207,313,1204,304" onclick="InfoPais('Vietna')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Vietna.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
					<!-- Wake Island -->
					<!-- Wallis e Futuna -->
					<!-- West Bank -->
					
					<!-- Zambia --> <area shape="poly" coords="867,453,850,447,849,434,858,433,862,426,880,431,880,414,895,420,891,436,875,443" onclick="InfoPais('Zambia')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Zambia.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					<!-- Zimbabue --> <area shape="poly" coords="886,474,876,470,866,456,880,446,893,452,892,466" onclick="InfoPais('Zimbabue')" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Zimbabue.png'" onmouseout="if(document.images) document.getElementById('Bandeiras').src= 'Imagens/Bandeiras.png';"/> 
					
				</map>
					<?php
					?>
		</body> 
</html>