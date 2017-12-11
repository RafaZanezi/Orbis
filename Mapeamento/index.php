<!DOCTYPE html>
<html lang="pt-br">
	<head> <title> Orbis - Mapa Interativo </title> 
		<style> 
		#Bandeiras {
			width:170px;
			height:100px;
			top: 0px; 
			left: 0px;
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
		
		</script>	
	
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
						$('#dialog').append('País: '+dados[0].nome+'<p>Capital: '+dados[0].capital+'</p><p>Idioma: '+dados[0].idioma+'</p><p>Moeda: '+dados[0].moeda+'</p><p>extensão Territorial: '+dados[0].territorio+'</p><p>População: '+dados[0].populacao+'</p><p>Densidade Demográfica: '+dados[0].densiDemo+'</p><p>PIB(per capta): '+dados[0].pib+'</p><p>IDH: '+dados[0].idh+'</p><p>Taxa de Natalidade: '+dados[0].natalidade+'</p><p>Taxa de Mortalidade: '+dados[0].mortalidade);
					}
				});
				$("#dialog").dialog({height: 525, width: 400});
			}
			
		function image(img) {
			var src = img.src;
			window.open(src);
		}
		</script>	
	</head>
		<body bgcolor="E3DFDC">
			<!-- Exibe as coordenadas da página  -->
			 <input type="text" id="cursorX" size="3"> X-position of the mouse cursor
			<br /><br />
			<input type="text" id="cursorY" size="3"> Y-position of the mouse cursor 
					
			<!-- <img src="Brasil.png" width="140px" height="70px"> -->
			<!-- Imagem Base - Mapa Raiz -->
			<img src="Mapa-Raiz.jpg" alt="MapaMundi" width="1520 px" height="735px" usemap="#MapaMundi" id="Mapa" />
				<map name="MapaMundi">	
				<!-- Chamando a dialog com as informações --> <div id="dialog" title="Informações"> </div> 
				<!-- Países (Ordem Alfabética) --> 
					<!-- Afeganistão <area shape="poly" coords="1020,240,1000,225,1020,210,1040,215" onclick="InfoPais('Afeganistao');" href="#" onmouseover="if(document.images) document.getElementById('Bandeiras').src= 'af.png'" onMouseOut="if(document.images) document.getElementById('Bandeiras').src= 'Bandeiras.png';"/> --> 
					<!-- Africa do Sul --> <area shape="poly" coords="870,530,820,530,885,474,890,500" onclick="InfoPais('Africa do Sul')" href="#" >
					<!-- Akrotiri -->
					<!-- Albania --> <area shape="poly" coords="836,197,834,194,833,186,834,185,837,186,838,192" onclick="InfoPais('Albania')" href="">
					<!-- Alemanha --> <area shape="poly" coords="778,152,784,136,790,131,,808,138,812,147,803,150,809,157,804,162,794,162" onclick="InfoPais('Alemanha')" href="#">
					<!-- Andorra -->
					<!-- Angola --> <area shape="poly" coords="850,454,800,451,808,404,847,412" onclick="InfoPais('Angola')" href="#">
					<!-- Anguila -->
					<!-- AntÃ¡rctida -->
					<!-- AntÃ­gua e Barbuda --> <area shape="poly" coords="501,304,501,303,504,302,503,304" onclick="InfoPais('Antigua e Barbuda')" href="#">
					<!-- Antilhas Neerlandesas -->
					<!-- Arabia Saudita --> <area shape="poly" coords="985,281,934,298,898,246,917,230" onclick="InfoPais('Arabia Saudita')" href="#">
					<!-- Arctic Ocean -->
					<!-- Argelia --> <area shape="poly" coords="774,288,723,249,779,209,800,270" onclick="InfoPais('Argelia')" href="">
					<!-- Argentina --> <area shape="poly" coords="522,619,491,599,491,581,482,566,482,526,485,475,506,483,518,490,518,500,531,500,521,512,520,527,532,541,514,549,505,603,527,620" onclick="InfoPais('Argentina')" href="#">
					<!-- Armenia --> <area shape="poly" coords="936,196,935,193,932,190,927,191,933,198" onclick="InfoPais('Armenia')" href="#">
					<!-- Aruba -->
					<!-- Ashmore and Cartier Islands -->
					<!-- Atlantic Ocean -->
					<!-- Australia --> <area shape="poly" coords="1319,575,1199,523,1268,429,1395,483" onclick="InfoPais('Australia')" href="#">
					<!-- Austria --> <area shape="poly" coords="794,163,806,162,807,160,814,156,820,158,820,165,808,166" onclick="InfoPais('Austria')" href="#">
					<!-- Azerbaijao --> <area shape="poly" coords="944,187,950,191,949,197,943,198,937,200,935,190,942,190" onclick="InfoPais('Azerbaijao')" href=""
					<!-- AÃ§ores --> <area shape="poly" coords="660,213,631,214,620,190,662,186,665,207" onclick="InfoPais('Acores')" href="#">
					
					<!-- Bahamas --> <area shape="poly" coords="454,280,438,266,435,255,443,255,453,272,463,276" onclick="InfoPais('Bahamas')" href="#">
					<!-- Bangladesh --> <area shape="poly" coords="1125,275,1120,262,1120,257,1124,260,1132,262,1132,266,1136,270" onclick="InfoPais('Bangladesh')" href="#">
					<!-- Barbados --> <area shape="poly" coords="504,326,504,324,506,324,506,326" onclick="InfoPais('Barbados')" href="#">
					<!-- Bahrein --> <area shape="poly" coords="964,259,964,258,965,258,965,259" onclick="InfoPais('Bahrein')" href="#">
					<!-- Belgica --> <area shape="poly" coords="769,148,774,143,781,150,777,153" onclick="InfoPais('Belgica')" href="#">
					<!-- Belize --> <area shape="poly" coords="387,302,388,295,391,290,392,298" onclick="InfoPais('Belize')" href="#">
					<!-- Benin --> <area shape="poly" coords="765,347,766,335,764,333,761,328,764,328,768,323,773,325,773,330,771,333,770,346" onclick="InfoPais('Benin')" href="#">
					<!-- Bermudas --> <area shape="poly" coords="499,231,498,229,501,229" onclick="InfoPais('Bermudas')" href="#">
					<!-- Bielorrússia --> <area shape="poly" coords="848,144,843,135,850,134,856,126,874,136,865,146" onclick="InfoPais('Bielorrusia')" href="#">
					<!-- Birmania --> <area shape="poly" coords="1140,279,1153,251,1160,266,1167,273,1173,277,1162,289,1164,298,1150,302,1151,291" onclick="InfoPais('Birmania')" href="">
					<!-- BolÃ­via --> <area shape="poly" coords="479,477,472,453,470,425,480,420,482,427,503,441,504,446,517,460,507,458,497,466,496,471,483,472" onclick="InfoPais('Bolivia')" href="#">
					<!-- Bosnia e Herzegovina --> <area shape="poly" coords="825,182,819,174,822,172,830,172,830,181,828,183" onclick="InfoPais('Bosnia e Herzegovina')" href="#">
					<!-- Botsuana --> <area shape="poly" coords="845,495,839,478,843,460,859,458,875,473,861,490,853,486" onclick="InfoPais('Botsuana')" href="#">
					<!-- Brasil --> <area shape="poly" coords="546,521,527,510,539,494,518,472,518,453,505,437,484,428,483,416,473,422,463,423,448,410,453,398,466,388,463,375,488,366,486,358,504,353,505,370,527,363,544,364,554,378,610,398,611,414,595,435,584,477,559,492" onclick="InfoPais('Brasil')" onmouseover="img.src='Brasil.png' width="140px" height="70px"" href="#">
					<!-- Brunei -->
					<!-- Bulgaria --> <area shape="poly" coords="847,189,844,178,846,180,866,180,866,186,860,188,859,191" onclick="InfoPais('Bulgaria')" href="#">
					<!-- Burquina Faso -->
					<!-- Burúndi --> <area shape="poly" coords="882,394,880,388,885,386,887,386" onclick="InfoPais('Burundi')" href="#">
					<!-- Butao --> <area shape="poly" coords="1140,278,1135,263,1126,263,1124,258,1133,255,1132,252,1147,245,1153,254,1148,257" onclick="InfoPais('Butao')" href="#">
					
					<!-- Cabo Verde --> <area shape="poly" coords="652,298,665,298,667,310,650,312" onclick="InfoPais('Cabo Verde')" href="">
					<!-- CamarÃµes --> <area shape="poly" coords="798,363,792,354,808,337,818,321,817,348,821,364" onclick="InfoPais('Camaroes')" href="#">
					<!-- Camboja --> <area shape="poly" coords="1185,318,1190,311,1200,311,1196,326" onclick="InfoPais('Camboja')" href="#">
					<!-- Canadá --> <area shape="poly" coords="422,158,410,152,295,152,281,138,286,108,328,70,372,66,431,40,521,27,563,23,600,26,541,61,530,50,538,61,555,67,564,80,542,102,506,90,511,84,493,101,464,92,435,112,467,126,465,144,475,138,476,129,491,122,489,112,498,98,515,92,539,107,559,134,563,161,539,159,529,169,507,177,505,162,496,161,443,182,449,171,433,156" onclick="InfoPais('Canada')" href="#">	
					<!-- Catar --> <area shape="poly" coords="966,262,966,258,970,260,969,265" onclick="InfoPais('Catar')" href="">
					<!-- Cazaquistão --> <area shape="poly" coords="1062,182,983,165,947,175,964,143,1026,130,1074,153" onclick="InfoPais('CazaquistAo')" href="#">
					<!-- Chade --> <area shape="poly" coords="823,338,818,318,812,308,823,297,823,270,855,287,851,310,850,320,840,332" onclick="InfoPais('Chade')" href="#">
					<!-- Chile --> <area shape="poly" coords="488,602,470,572,468,544,463,458,468,455,479,480,475,493,471,515,478,529,479,562,488,582" onclick="InfoPais('Chile')" href="#">
					<!-- China --> <area shape="poly" coords="1212,294,1189,270,1173,274,1146,240,1111,248,1072,230,1075,217,1045,200,1065,185,1079,157,1156,187,1199,162,1189,153,1211,140,1255,160,1234,268," onclick="InfoPais('China')" href="#">
					<!-- Chipre --> <area shape="poly" coords="885,220,882,217,894,215,894,218" onclick="InfoPais('Chipre')" href="#">
					<!-- Clipperton Island -->
					<!-- Colômbia --> <area shape="poly" coords="451,385,439,374,426,368,431,343,442,325,450,331,459,319,453,342,465,348,471,349,470,366,460,371,463,386" onclick="InfoPais('Colombia')" href="#">
					<!-- Comores -->   <area shape="poly" coords="944,432,938,432,938,425,946,426" onclick="InfoPais('Comores')" href="#">
					<!-- Congo --> <area shape="poly" coords="815,396,807,394,809,386,818,382,819,366,832,364,829,374,826,382" onclick="InfoPais('Congo')" href="#">
					<!-- Coral Sea Islands -->
					<!-- Coreia do Norte --> <area shape="poly" coords="1249,206,1239,193,1255,186,1256,200" onclick="InfoPais('Coreia do Norte')" href="#">
					<!-- Coreia do Sul --> <area shape="poly" coords="1271,214,1260,220,1251,206,1257,200" onclick="InfoPais('Coreia do Sul')" href="#">
					<!-- Costa do Marfim --> <area shape="poly" coords="722,353,725,337,724,340,726,329,735,329,745,332,745,353,728,357" onclick="InfoPais('Costa do Marfim')" href="#">
					<!-- Costa Rica --> <area shape="poly" coords="409,336,397,330,398,325,405,325,409,331" onclick="InfoPais('Costa Rica')" href="">
					<!-- Croacia --> <area shape="poly" coords="823,181, 816,177,815,172,819,166,825,170,829,172,821,171,817,173" onclick="InfoPais('Croácia')" href="#">
					<!-- Cuba --> <area shape="poly" coords="435,285,407,276,417,270,449,284" onclick="InfoPais('Cuba')" href="#">
					
					<!-- Dhekelia -->
					<!-- Dinamarca --> <area shape="poly" coords="784,125,794,118,804,129" onclick="InfoPais('Dinamarca')" href="#">
					<!-- Djibuti -->
					<!-- Dominica -->  
					
					<!-- Egito --> <area shape="poly" coords="860,274,860,233,895,234,903,270,897,276" onclick="InfoPais('Egito')" href="#">
					<!-- El Salvador --> <area shape="poly" coords="391,316,379,316,384,310" onclick="InfoPais('El Salvador')" href="#">
					<!-- Emiratos Arabes Unidos -->
					<!-- Equador --> <area shape="poly" coords="425,396,418,391,412,378,425,369,438,375,439,381" onclick="InfoPais('Equador')" href="#">
					<!-- Eritreia --> <area shape="poly" coords="912,310,912,301,918,295,924,308,929,310,938,321,936,320,928,312,922,311" onclick="InfoPais('Eritreia')" href="#">
					<!-- Eslovaquia --> <area shape="poly" coords="822,157,826,154,839,155,839,158,829,158,828,160,822,160" onclick="InfoPais('Eslovaquia')" href="#">
					<!-- Eslovenia --> <area shape="poly" coords="814,173,807,170,809,170,818,166,819,164" onclick="InfoPais('Eslovenia')" href="#">
					<!-- Espanha --> <area shape="poly" coords="725,186,727,179,770,185,752,209,737,213,732,206,735,186" onclick="InfoPais('Espanha')" href="#">
					<!-- Estados Unidos da América --> <area shape="poly" coords="359,256,347,240,328,230,289,226,279,218,275,193,295,158,307,154,416,160,437,168,435,186,504,172,488,186,459,214,428,238,427,261,394,242" onclick="InfoPais('Estados Unidos da America')" href="#"> <area shape="poly" coords="283,108,211,119,196,106,224,83,243,73,288,63,327,68" onclick="InfoPais('Estados Unidos da America')" href="#">
					<!-- Estonia --> <area shape="poly" coords="832,117,833,112,852,110,853,118" onclick="InfoPais('Estonia')" href="#">
					<!-- Etiópia --> <area shape="poly" coords="920,357,908,353,899,339,910,312,923,309,930,319,937,331,954,339,933,354,927,352" onclick="InfoPais('Etiopia')" href="#">
					
					<!-- FaroÃ© -->
					<!-- Fiji -->
					<!-- Filipinas --> <area shape="poly" coords="1254,289,1267,290,1292,342,1280,352,1263,356,1243,336" onclick="InfoPais('Filipinas')" href="#">
					<!-- FinlÃ¢ndia --> <area shape="poly" coords="834,83,832,73,838,67,850,72,859,100,837,107,831,104,830,103,829,98,838,84" onclick="InfoPais('Finlandia')" href="#">
					<!-- França --> <area shape="poly" coords="753,181,755,170,752,164,743,160,741,157,767,147,786,155,782,166,785,179,782,181,771,184" onclick="InfoPais('França')" href="#">
					
					<!-- GabÃ£o --> <area shape="poly" coords="803,391,793,379,795,373,811,366,816,378,806,386" onclick="InfoPais('Gabao')" href="#">
					<!-- Gambia --> <area shape="poly" coords="688,316,693,313,707,315,708,318,688,318" onclick="InfoPais('Gambia')" href="#">
					<!-- Gana --> <area shape="poly" coords="745,352,748,338,746,330,748,326,759,326,760,349,750,354" onclick="InfoPais('Gana')" href="#">
					<!-- Gaza Strip -->
					<!-- Georgia --> <area shape="poly" coords="916,182,932,185,931,189,925,190,919,188" onclick="InfoPais('Georgia')" href="#">
					<!-- Georgia do Sul e Sandwich do Sul --> <area shape="poly" coords="631,622,619,618,624,610,702,610,700,618" onclick="InfoPais('Georgia do Sul e Sandwich do Sul')" href="#">
					<!-- Gibraltar -->
					<!-- Granada -->
					<!-- Grecia --> <area shape="poly" coords="837,198,840,192,855,190,866,220,845,217" onclick="InfoPais('Grécia')" href="#">
					<!-- GroenlÃ¢ndia --> <area shape="poly" coords="609,108,592,74,596,58,593,47,567,46,600,26,724,27,686,68,637,82" onclick="InfoPais('Groelandia')" href="#">
					<!-- Guame -->
					<!-- Guatemala --> <area shape="poly" coords="381,310,372,310,384,294,385,309" onclick="InfoPais('Guatemala')" href="#">
					<!-- Guernsey -->
					<!-- Guiana --> <area shape="poly" coords="504,350,505,341,516,348,512,354,518,365,509,368" onclick="InfoPais('Guiana')" href="#">
					<!-- Guiana Francesa --> <area shape="poly" coords="531,366,530,364,533,350,540,355,537,362" onclick="InfoPais('Guiana Francesa')" href="#">
					<!-- Guine--> <area shape="poly" coords="695,327,702,321,720,320,724,340,720,342,715,337,710,330,707,331,703,334" onclick="InfoPais('Guine')" href="#">
					<!-- GuinÃ© Equatorial -->
					<!-- Guine-Bissau --> <area shape="poly" coords="690,321,703,319,696,329" onclick="InfoPais('Guine-Bissau')" href="#">
					
					<!-- Haiti --> <area shape="poly" coords="461,294,447,293,453,286,461,286" onclick="InfoPais('Haiti')" href="#">
					<!-- Havai --> <area shape="poly" coords="111,290,100,276,162,276,163,286" onclick="InfoPais('Havai')" href="#">
					<!-- Holanda --> <area shape="poly" coords="780,144,776,141,777,137,784,134" onclick="InfoPais('Holanda')" href="#">
					<!-- Honduras --> <area shape="poly" coords="395,314,386,309,390,303,404,302,409,306" onclick="InfoPais('Honduras')" href="#">
					<!-- Hong Kong -->
					<!-- Hungria --> <area shape="poly" coords="820,161,828,161,838,158,842,160,840,162,836,168,833,167,827,170,820,165" onclick="InfoPais('Hungria')" href="#">
					
					<!-- Iemen --> <area shape="poly" coords="940,320,936,303,944,299,954,300,958,294,972,292,980,305" onclick="InfoPais('Iemen')" href="#">
					<!-- Ilha Bouvet -->
					<!-- Ilha do Natal -->
					<!-- Ilha Norfolk -->
					<!-- Ilhas CaimÃ£o -->
					<!-- Ilhas Cook -->
					<!-- Ilhas dos Cocos -->
					<!-- Ilhas Falkland --> <area shape="poly" coords="544,612,535,609,539,602,610,602,595,614,551,617" onclick="InfoPais('Ilhas Falkland')" href="#">
					<!-- Ilhas Heard e McDonald -->
					<!-- Ilhas Marshall -->
					<!-- Ilhas SalomÃ£o -->
					<!-- Ilhas Turcas e Caicos -->
					<!-- Ilhas Virgens Americanas -->
					<!-- Ilhas Virgens BritÃ¢nicas -->
					<!-- India --> <area shape="poly" coords="1038,269,1051,266,1043,255,1061,230,1055,223,1069,214,1074,218,1073,234,1084,239,1082,248,1117,261,1121,277,1093,306,1093,329,1084,338" onclick="InfoPais('India')" href="#">
					<!-- Indian Ocean -->
					<!-- Indonesia --> <area shape="poly" coords="1159,349,1173,354,1192,374,1237,370,1242,357,1295,362,1352,387,1351,416,1286,410,1277,411,1279,418,1268,428,1196,407" onclick="InfoPais('Indonesia')" href="#">
					<!-- Ira --> <area shape="poly" coords="943,198,950,207,962,212,971,209,972,208,980,204,1000,212,999,224,1005,242,1016,255,1010,262,994,259,988,254,980,256,967,249,960,241,954,240,942,224,934,208,932,198,936,201" onclick="InfoPais('Ira')" href="#">
					<!-- Iraque --> <area shape="poly" coords="916,232,913,227,921,222,921,212,926,206,934,210,942,216,940,221,952,241,949,240,947,245,936,244,932,239" onclick="InfoPais('Iraque')" href="#">
					<!-- Irlanda --> <area shape="poly" coords="722,144,723,132,734,133,736,142" onclick="InfoPais('Irlanda')" href="#">
					<!-- IslÃ¢ndia --> <area shape="poly" coords="696,94,683,92,679,86,684,80,710,82,714,87" onclick="InfoPais('Islandia')" href="#">
					<!-- Israel -->
					<!-- Itália --> <area shape="poly" coords="786,181,784,171,796,166,801,166,809,170,805,177,830,197,816,212,808,206,819,204,819,196,791,201" onclick="InfoPais('Itália')" href="#">
					
					<!-- Jamaica --> <area shape="poly" coords="441,293,435,294,412,289,435,288" onclick="InfoPais('Jamaica')" href="#">
					<!-- Jan Mayen -->
					<!-- Japão --> <area shape="poly" coords="1283,235,1272,224,1282,214,1299,189,1291,184,1288,171,1325,163,1311,198,1315,214" onclick="InfoPais('Japão')" href="#">	
					<!-- Jersey -->
					<!-- JordÃ¢nia -->
					
					<!-- Kiribati -->
					<!-- Kuwait --> <area shape="poly" coords="948,245,950,240,952,246" onclick="InfoPais('Kuwait')" href="#">
					
					<!-- Laos --> <area shape="poly" coords="1201,310,1188,292,1180,292,1175,283,1178,274,1192,288,1207,308" onclick="InfoPais('Laos')" href="#">
					<!-- Lesoto --> 
					<!-- Letonia --> <area shape="poly" coords="830,124,834,118,840,121,842,116,854,120,854,125" onclick="InfoPais('Letonia')" href="#">
					<!-- LÃ­bano --> 
					<!-- Liberia --> <area shape="poly" coords="711,344,716,338,722,342,720,352" onclick="InfoPais('Liberia')" href="#">
					<!-- LÃ­bia -->	 <area shape="poly" coords="852,282,823,268,805,266,795,258,795,238,806,226,857,231,858,282" onclick="InfoPais('Libia')" href="#">
					<!-- Listenstaine -->
					<!-- Lituania --> <area shape="poly" coords="832,128,838,125,836,124,850,126,850,133,844,134" onclick="InfoPais('Lituania')" href="#">
					<!-- Luxemburgo -->
					
					<!-- Macau -->
					<!-- Macedonia --> <area shape="poly" coords="840,191,839,187,844,186,846,188" onclick="InfoPais('Macedonia')" href="#">
					<!-- MadagÃ¡scar --> <area shape="poly" coords="940,490,935,474,940,450,962,429,967,445,950,487" onclick="" href="">	
					<!-- Malasia --> <area shape="poly" coords="1188,345,1249,342,1259,351,1252,356,1245,354,1239,368,1194,369,1182,359,1182,348" onclick="" href="">
					<!-- MalÃ¡vi -->
					<!-- Maldivas -->
					<!-- Mali --> <area shape="poly" coords="734,326,724,326,707,305,736,304,731,260,772,289,773,302,751,306,737,314" onclick="" href="" >
					<!-- Malta -->
					<!-- Man, Isle of -->
					<!-- Marianas do Norte -->
					<!-- Marrocos --> <area shape="poly" coords="734,215,751,216,740,236,726,241,726,250,705,248" onclick="" href="">
					<!-- MaurÃ­cia -->
					<!-- MauritÃ¢nia --> <area shape="poly" coords="719,253,734,259,730,261,735,302,706,305,697,297,691,298,689,278,704,276" onclick="" href="">
					<!-- Mayotte -->
					<!-- Mexico --> <area shape="poly" coords="368,304,355,306,321,287,307,272,289,248,288,228,309,233,328,231,338,244,346,241,379,290,384,278,398,278,392,290,377,298,379,300" onclick="InfoPais('México')" href="">	
					<!-- MicronÃ©sia -->
					<!-- Mocambique --> <area shape="poly" coords="893,487,887,477,893,463,892,452,889,442,897,426,926,425,923,447,900,466,903,478" onclick="" href="">
					<!-- Moldavia --> <area shape="poly" coords="859,159,868,162,871,167,864,170" onclick="" href="">
					<!-- Monaco -->
					<!-- MongÃ³lia --> <area shape="poly" coords="1199,162,1159,188,1098,170,1080,154,1119,142,1184,151" onclick="" href="">
					<!-- Monserrate -->
					<!-- Montenegro -->
					<!-- Mundo -->
					
					<!-- NamÃ­bia --> <area shape="poly" coords="832,500,819,499,806,453,841,458,834,470,838,491" onclick="" href="">
					<!-- Nauru -->
					<!-- Navassa Island -->
					<!-- Nepal --> <area shape="poly" coords="1084,242,1083,248,1114,257,1116,252,1107,252,1089,241" onclick="" href="">
					<!-- NicarÃ¡gua --> <area shape="poly" coords="406,324,396,322,391,317,409,310," onclick="" href="">
					<!-- Níger --> <area shape="poly" coords="809,314,777,310,766,317,760,306,775,303,775,289,805,269,817,271,819,298,810,315" onclick="" href="">
					<!-- NigÃ©ria --> <area shape="poly" coords="781,354,778,346,767,342,775,314,811,316,809,332,795,342,791,352" onclick="" href="">
					<!-- Niue -->
					<!-- Noruega --> <area shape="poly" coords="774,101,788,93,801,74,837,64,851,65,849,70,840,68,835,73,821,74,810,77,798,94,800,109,797,113,793,112,786,116,780,116" onclick="InfoPais('Noruéga')" href="#">
					<!-- Nova Caledonia --> <area shape="poly" coords="1433,467,1470,473,1473,490,1426,490" onclick="" href="">
					<!-- Nova Zelandia --> <area shape="poly" coords="1379,590,1379,568,1443,528,1457,546,1433,566" onclick="" href="" >
					
					<!-- Oma--> <area shape="poly" coords="978,302,973,292,986,287,988,264,1004,276,996,292" onclick="" href="">
					
					<!-- Pacific Ocean -->
					<!-- Países Baixos
					
					<!-- Palau -->
					<!-- PanamÃ¡ --> <area shape="poly" coords="410,338,412,331,424,330,434,336,430,342" onclick="" href="">
					<!-- Papua-Nova Guine --> <area shape="poly" coords="1353,388,1372,385,1388,378,1405,395,1385,425,1376,419,1371,413,1361,413,1360,417,1352,417" onclick="" href="">
					<!-- Paquistao --> <area shape="poly" coords="1011,262,1019,256,1005,243,1025,243,1036,234,1043,218,1040,214,1048,209,1064,217,1062,220,1052,221,1060,232,1050,251,1044,252,1043,256,1048,267,1037,269,1029,263" onclick="" href="">
					<!-- Paracel Islands -->
					<!-- Paraguai --> <area shape="poly" coords="519,496,522,490,507,482,501,473,513,465,519,479,532,484,532,493" onclick="" href="">
					<!-- Peru --> <area shape="poly" coords="465,454,438,441,415,396,427,398,443,380,462,390,451,398,446,408,455,419,468,430,469,446" onclick="" href="">
					<!-- Pitcairn -->
					<!-- PolinÃ©sia Francesa -->
					<!-- Polonia --> <area shape="poly" coords="813,146,810,136,823,130,840,134,840,132,842,140,841,155" onclick="InfoPais('Polônia')" href="#">
					<!-- Porto Rico -->
					<!-- Portugal --> <area shape="poly" coords="726,187,734,188,731,207,724,207,725,202,723,199" onclick="InfoPais('Portugal')" href="#">
					
					<!-- QuÃ©nia --> <area shape="poly" coords="922,392,901,374,908,366,900,355,919,360,931,357,930,380" onclick="" href="">
					<!-- Quirguistao --> <area shape="poly" coords="1046,200,1064,187,1060,183,1032,184,1031,190,1042,200" onclick="" href="">
				
					<!-- Reino Unido --> <area shape="poly" coords="729,131,733,116,749,112,765,139,764,146,738,152,736,131" onclick="InfoPais('Reino Unido')" href="#">
					<!-- Republica Centro-Africana --> <area shape="poly" coords="825,362,819,350,824,342,839,341,838,336,844,336,852,328,873,353,854,354,852,356,843,352,840,352,836,360,830,359" onclick="" href="">
					<!-- RepÃºblica Checa --> <area shape="poly" coords="804,150,818,148,819,150,824,152,820,156,810,156" onclick="" href="">
					<!-- RepÃºblica DemocrÃ¡tica Do Congo --> <area shape="poly" coords="875,426,851,421,849,406,822,398,828,387,835,374,839,354,882,356,880,392,883,407,875,413" onclick="" href="">
					<!-- RepÃºblica Dominicana --> <area shape="poly" coords="474,292,462,294,462,286" onclick="" href="">
					<!-- Romênia --> <area shape="poly" coords="837,170,843,162,857,160,866,176,855,180,846,180" onclick="InfoPais('Romênia')" href="#">
					<!-- Ruanda --> <area shape="poly" coords="883,386,881,383,882,380,887,379,887,385" onclick="" href="">	
					<!-- Rússia --> <area shape="poly" coords="1078,153,1027,128,1001,124,974,132,979,144,945,140,929,148,930,155,937,165,934,173,932,181,898,168,906,151,888,145,855,97,856,67,914,72,900,58,915,46,947,42,1250,69,1308,70,1344,95,1329,105,1309,107,1328,129,1326,144,1295,121,1327,144,1294,121,1263,132,1294,164,1269,180,1258,180,1255,155,1188,133,1189,147" onclick="InfoPais('Russia')" href="#"> <area shape="poly" coords="200,90,183,84,204,70,220,81" onclick="InfoPais('Russia')" href="#">	
					
					<!-- Salvador -->
					<!-- Samoa --> <area shape="poly" coords="40,442,32,436,37,426,73,427,72,439" onclick="" href="">
					<!-- Samoa Americana -->
					<!-- Santa Helena -->
					<!-- Santa LÃºcia -->
					<!-- SÃ£o CristÃ³vÃ£o e Neves -->
					<!-- SÃ£o Marinho -->
					<!-- SÃ£o Pedro e Miquelon -->
					<!-- SÃ£o TomÃ© e PrÃ­ncipe -->
					<!-- SÃ£o Vicente e Granadinas -->
					<!-- Saara Ocidental --> <area shape="poly" coords="706,250,720,249,722,256,710,256,709,266;704,272,688,278" onclick="" href="">
					<!-- Seicheles -->
					<!-- Senegal --> <area shape="poly" coords="690,302,698,300,709,315,700,312,688,312" onclick="" href="">
					<!-- Serra Leoa --> <area shape="poly" coords="704,336,712,330,713,338,710,344" onclick="" href="">
					<!-- Servia --> <area shape="poly" coords="832,185,829,183,832,178,829,169,834,168,844,182,844,185,838,185,834,184" onclick="" href="">
					<!-- Siria --> <area shape="poly" coords="901,216,904,211,923,210,920,213,919,222,904,231,900,228,904,222" onclick="" href="">
					<!-- SomÃ¡lia --> <area shape="poly" coords="931,378,931,360,958,338,942,330,975,321,959,357" onclick="" href="">
					<!-- Southern Ocean -->
					<!-- Spratly Islands -->
					<!-- Sri Lanka --> <area shape="poly" coords="1094,347,1094,331,1102,339,1102,343" onclick="" href="">
					<!-- SuazilÃ¢ndia -->
					<!-- SudÃ£o --> <area shape="poly" coords="875,348,854,324,858,301,857,286,861,276,907,274,915,294,906,298,907,312,895,338,906,351,890,357" onclick="" href="">
					<!-- Suecia --> <area shape="poly" coords="798,125,803,92,812,74,825,75,834,85,816,102,816,124,802,127,796,115,799,111" onclick="InfoPais('Suécia')" href="#">
					<!-- Suica --> <area shape="poly" coords="784,169,796,166,793,162,788,161,780,166" onclick="InfoPais('Suíça')" href="#">
					<!-- Suriname --> <area shape="poly" coords="523,365,514,356,518,350,530,348,528,362" onclick="" href="">
					<!-- Svalbard e Jan Mayen -->
					
					<!-- Tailandia --> <area shape="poly" coords="1162,291,1172,282,1178,294,1187,294,1200,309,1187,310,1183,317,1177,317,1174,331,1186,346,1179,347,1169,341,1172,323,1172,312,1167,297" onclick="" href="">
					<!-- Taiwan --> <area shape="poly" coords="1255,275,1250,270,1252,259,1259,260" onclick="" href="">
					<!-- Tajiquistao --> <area shape="poly" coords="1051,208,1040,200,1035,196,1027,197,1025,208,1037,201,1040,211" onclick="" href="">
					<!-- TanzÃ¢nia --> <area shape="poly" coords="905,424,902,418,887,410,890,391,902,380,921,395,927,422" onclick="" href="">
					<!-- TerritÃ³rio BritÃ¢nico do Oceano Índico -->
					<!-- TerritÃ³rios Austrais Franceses -->
					<!-- Timor Leste --> <area shape="poly" coords="1283,419,1283,416,1291,412,1291,417" onclick="" href="">
					<!-- Togo --> <area shape="poly" coords="763,349,760,339,760,332,759,326,762,327,765,334,765,346" onclick="" href="">
					<!-- Tokelau -->
					<!-- Tonga -->
					<!-- Trindade e Tobago -->
					<!-- Tunisia --> <area shape="poly" coords="791,209,799,209,804,232,794,235,789,221" onclick="" href="">
					<!-- Turcomenistao--> <area shape="poly" coords="971,207,968,194,969,192,977,190,978,186,982,185,995,190,1015,200,1019,207,1006,218,1001,215,999,211,980,203,970,207" onclick="" href="">
					<!-- Turquia --> <area shape="poly" coords="868,214,859,192,860,188,866,188,871,191,878,192,886,187,894,187,905,192,918,189,914,198,908,198,908,210" onclick="" href="">
					<!-- Tuvalu -->
					
					<!-- Ucrânia --> <area shape="poly" coords="842,159,849,144,870,145,876,141,889,149,904,153,903,162,889,168,862,158" onclick="InfoPais('Ucrania')" href="#">
					<!-- Uganda --> <area shape="poly" coords="883,378,891,359,899,357,903,367,899,373" onclick="" href="">
					<!-- Uruguai --> <area shape="poly" coords="539,532,525,527,526,513,547,523" onclick="" href="">
					<!-- Uzbequistao --> <area shape="poly" coords="974,189,970,174,983,166,989,169,991,177,1010,180,1012,186,1019,190,1029,187,1028,193,1024,198,1024,207,1015,200,1005,198,983,184" onclick="InfoPais('Uzbequistao')" href="#">
					
					<!-- Vanuatu --> <area shape="poly" coords="1429,435,1474,435,1462,466,1452,466" onclick="" href="">
					<!-- Vaticano -->
					<!-- Venezuela --> <area shape="poly" coords="478,370,474,347,467,346,455,330,463,322,495,325,505,336,499,346,501,351,483,356,484,367" onclick="" href="">
					<!-- Vietna --> <area shape="poly" coords="1178,273,1190,271,1198,280,1196,286,1195,290,1207,301,1215,322,1198,336,1199,322,1207,313,1204,304" onclick="" href="">
					
					<!-- Wake Island -->
					<!-- Wallis e Futuna -->
					<!-- West Bank -->
					
					<!-- Zambia --> <area shape="poly" coords="867,453,850,447,849,434,858,433,862,426,880,431,880,414,895,420,891,436,875,443" onclick="" href="">
					<!-- Zimbabue --> <area shape="poly" coords="886,474,876,470,866,456,880,446,893,452,892,466" onclick="" href="">
				</map>
					<?php
					?>
		</body> 
</html>