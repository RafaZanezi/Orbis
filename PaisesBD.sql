drop database PaisesBD;
create database PaisesBD DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;;
use PaisesBd;
create table info (
	nome varchar(20) primary key,
	capital varchar(20),
	territorio varchar(20),
	idioma varchar(20),
	moeda varchar(20),
	idh varchar(10),
	pib varchar(20),
	densiDemo varchar(15),
	natalidade varchar(15),
	mortalidade varchar(15),
	populacao varchar(30)
	);
	
	insert into info (nome,capital,territorio,idioma,moeda,idh,pib,densiDemo,natalidade,mortalidade,populacao) values 
		("Afeganistão","Kabul","652.230 km²","Pachto e Dari","Afegane","0,465","668 US$","49,8 hab/km²","35 por mil","8 por mil","32.526.562 habitantes"),
--    África do Sul
		("África do Sul","Pretória e Cape Town","", "Africânes, Zulu, Xhosa e  Inglês","Rand","0,666","6.482 US$","44,9 hab/km²","21 por mil","13 por mil","54.490.406 habitantes"),
--    Akrotiri
		("Akrotiri","","","","","","","","","",""),
--    Albânia
		("Albânia","Tirana","28.750 km²","Albanês","Lek","0,733","4.642 US$","105,7 hab/km²","13 por mil","7 por mil","2.896.679 habitantes"),
--    Alemanha
		("Alemanha","Berlim","357.120 km²","Alemão","Euro","0,916","47.966 US$","231,5 hab/km²","8 por mil","11 por mil","80.688.545 habitantes"),
--    Andorra
		("Andorra","Andorra","470 km²","Catalão","Euro","0,824","45.033 US$","149,9 hab/km²","sem dados","sem dados","70.473 habitantes"),
--    Angola
		("Angola","Luanda","1.246.700 km²","Português","Kuanza","0,532","6.054 US$","20,1 hab/km²","45 por mil","14 por mil","25.021.974 habitantes"),
--    Anguila
		("Anguila","","","","","","","","","",""),
--    Antárctida
		("Antártica","","","","","","","","","",""),
--    Antígua e Barbuda
		("Antígua e Barbuda","Saint Jonh´s","440 km²","Inglês","Dólar do Caribe Oriental","0,783","13.731 US$","208,7 hab/km","17 por mil","6 por mil","91.818 habitantes"),
--    Antilhas Neerlandesas
		("Antilhas Neerlandesas","","","","","","","","","",""),
--    Arábia Saudita
		("Arábia Saudita","Riad","2.149.690 km²","Árabe","Rial Saudia","0,837","24.362 US$","14,7 hab/km²","20 por mil","3 por mil","31.540.372 habitantes"),
--    Arctic Ocean
		("Artic Ocean","","","","","","","","","",""),
--    Argélia
		("Argélia","Argel","2.381.740 km²","Árabe","Dinar Argélio","0,736","5.484 US$","16,7 hab/km²","25 por mil","6 por mil","39.666.519 habitantes"),
--    Argentina
		("Argentina","Buenos Aires","2.791.810","Espanhol"," Peso Argentino","0,836","12.645","15,9 hab/km","17 por mil","8 por mil"," 43.416.755 habitantes"),
--    Armênia
		("Armênia","Ierevan","29.740 km²","Armênio","Dram Armênio","0,733","3.622 US$","106 hab/km²","14 por mil","9 por mil","3.017.712 habitantes"),
--    Aruba
		("Aruba","","","","","","","","","",""),
--    Ashmore e Ilhas Cartier
		("Ashmore e Ilhas Cartier","","","","","","","","","",""),
--    Açores
		("Açores","Angra","2.346 km²","Português","Cirenaicas do Corvo","0,903","2.400 US$","106 hab./km²","60 por mil","40 por mil","32.112 habitantes"),
--    Austrália
		("Austrália","Camberra","7.741.220 km²","Inglês","Dólar Australiano","0,933","62.290 US$","3,1 hab/km²","13 por mil","7 por mil","23.968.973 habitantes"),
--    Áustria
		("Áustria","Viena","83.879 km²","Alemão","Euro","0,885","51.296 US$","103,7 hab/km²","9 por mil","9 por mil","8.544.586 habitantes"),
--    Azerbaijão
		("Azerbaijão","Baku","86.600 km²","Azerbaijano","Manat","0,751","7.808 US$","118 hab/km²","18 por mil","7 por mil","9.753.968 habitantes"),
--    Bahamas
		("Bahamas","Nassau","13.880 km²","inglês","Dólar das Bahamas","0,79","22.217 US$","38,8 hab/km²","15 por mil","6 por mil","388.019 habitantes"),
--    Bangladesh
		("Bangladesh","Dacca","144.000 km²","Bengali","Taka","0,570","1.088 US$","1.236,8 hab/km²","20 por mil","6 por mil","160.995.642 habitantes"),
--    Barbados
		("Barbados","Bridgetown","430 km²","Inglês","Dólar de Barbados","0,785","15.360 US$","661 hab/km²","13 por mil","9 por mil","284.215 habitantes"),
--    Bahrein
		("Bahrein","Manama","760 km²","Árabe","Dinar do Bahrein","0,824","24.854 US$","1.812,2 hab/km²","16 por mil","2 por mil","1.377.237 habitantes"),
--    Bélgica
		("Bélgica","Bruxelas","30.530 km²","Francês, Alemão e Holandês","Euro","0,890","47.348 US$","373,2 hab/km²","12 por mil","10 por mil","11.299.192 habitantes"),
--    Belize
		("Belize","Belmopan","22.970 km²","Inglês","Dólar do Belize","0,715","4.831 US$","15,8 hab/km²","24 por mil","5 por mil","359.287 habitantes"),
--    Benin
		("Benim","Porto Novo","112.620 km²","Francês","Franco CFA Ocidental","0,480","903 US$","96,5 hab/km²","37 por mil","10 por mil","10.879.829 habitantes"),
--    Bermudas
		("Bermudas","Hamilton","53.3 km","Inglês","Dólar Bermudense","Sem Dados","Sem Dados","1.239 hab./km²","Sem Dados","Sem Dados","66.163"),
--    Bielorrússia
		("Bielorrúsia","Minsk","207.600 km²","Bielo-russo e Russo","Rublo","0,798","8.014 US$","46,8 hab/km²","11 por mil","16 por mil","9.495.826 habitantes"),
--    Birmânia
		("Birmânia","Nepiedó","676.590 km²","Birmanês","Quiate","0,536","1.244 US$","82,5 hab/km²","17 por mil","9 por mil","53.897.154 habitantes"),
--    Bolívia
		("Bolívia"," Sucre","1.098.580 km"," Espanhol, Aimará e Quíchua","Boliviano","0,662","3.124"," 9,9 hab/km","26 por mil","7 por mil","10.724.705 habitantes"),
--    Bósnia e Herzegovina
		("Bósnia e Herzegovina","Sarajevo","51.210 km²","Bósnio, Croata e Sérvio","Marco","0,733","4.844 US$","74,7 hab/km²","9 por mil","10 por mil","3.810.416 habitantes"),
--    Botswana
		("Botswana","Gaborone","581.730 km²","Inglês","Pula","0,698","7.123 US$","4 hab/km²","24 por mil","17 por mil","2.262.485 habitantes"),
--    Brasil
		("Brasil","Brasília"," 8.515.767.049 km","Portugues","Real","0,755 ","11.387 US$","24,9 hab/km","15 por mil","6 por mil","204.450.649 habitantes"),
--    Brunei
		("Brunei","Bandar Seri Begawan","5.765 km²","Malaio","Dólar de Brunei","0,856","40.979 US$","80,3 hab/km²","16 por mil","3 por ml","423.188 habitantes"),
--    Bulgária
		("Bulgária","Sófia","111.000 km²","Búlgaro","Lev Búlgaro","0,782","7.876 US$","65,9 hab/km²","16 por mil","10 por mil","7.149.787 habitantes"),
--    Burkina Fazo
		("Burqkina Fazo","Ouagadougou","274.220 km²","Francês","Franco CFA Ocidental","0,402","725 US$","66,2 hab/km²","41 por mil","11 por mil","18.105.570 habitantes"),
--    Burúndi
		("Burúndi","Bujumbura","27.830 km²","Francês e Quirundi","Franco de Burundi","0,400","265 US$","435,3 hab/km²","45 por mil","13 por mil","11.178.921 habitantes"),
--    Butão
		("Butão","Timphu","38.394 km²","Zoncá","Ngultrum","0,701","2.569 US$","20,3 hab/km²","20 por mil","7 por mil","774.830 habitantes"),
--    Cabo Verde
		("Cabo Verde","Praia","4.030 km²","Português","Escudo Cabo-Verdiano","0,646","3.609 US$","129,2 hab/km²","20 por mil","5 por mil","520.502 habitantes"),
--    Camarões
		("Camarões","Yaoundê","475.440 km²","Francês e Inglês","Franco CFA Central","0,512","1.407 US$","49,4 hab/km²","38 por mil","12 por mil","23.344.179 habitantes"),
--    Camboja
		("Camboja","Phnom Penh","181.040 km²","Khmer","Riel","0,555","1.095 US$","88,3 hab/km²","26 por mil","6 por mil","15.577.899 habitantes"),
--    Canadá
		("Canadá","Ottawa","9.984.670 km² ","Ingles e frances","Dólar canadense"," 0,913"," 50.169 US$","4 hab/km²","11 por mil"," 8 por mil","35.939.927 habitantes"),
--    Catar
		("Catar","Doha","11.590 km²","Árabe","Rial Catarense","0,850","97.519 US$","192,5 hab/km²","11 por mil","1 por mil","2.235.355 habitantes"),
--    Cazaquistão
		("Cazaquistão","Astana","2.724.900 km²","Cazaque e Russo","Tenge","0,788","12.436 US$","6,5 hab/km²","21 por mil","10 por ml","17.625.226 habitantes"),
--    Chade
		("Chade","Ndjamena","1.284.000 km²","Árabe e Francês","Franco CFA Cental","0,392","941 US$","11,1 hab/km²","46 por mil","15 por mil","14.037.472 habitantes"),
--    Chile
		("Chile","Santiago"," 756.096 km²"," Espanhol","Peso","0,832","14.528 US$ ","24,1 hab/km²","14 por mil","6 por mil","17.948.141 habitantes"),
--    China
		("China","Beijing(Pequim)","9.600.001 km²","Mandarim","Renminbi","0,727","7.617 US$","146,6 hab/km²","13 por mil","7 por mil","1.376.048.943 habitantes"),
--    Chipre
		("Chipre","Nicósia","9.250 km²","Grego e Turco","Euro","0,850","26.147 US$","126,1 hab/km²","12 por mil","7 por mil","1.165.300 habitantes"),
--    Cingapura
		("Cingapura","Cidade de Cingapura","710 km²","Malaio, Mandarim, Tamil e Inglês","Dólar de Cingapura","0,912","55.910 US$","8.005,3 hab/km²","10 por mil","5 por mil","5.603.740 habitantes"),				
--    Clipperton Island
		("Ilhas de Clipperton","","","","","","","","","",""),
--    Colômbia
		("Colômbia","Bogotá","1.141.750 km²","Espanhol","Peso","0,72","7.904 US$","43,5 hab/km²","19 por mil","6 por mil","48.228.704 habitantes"),
--    Comores
		("Comores","Moroni","1.861 km²","Árabe, Francês e Comorense","Franco de Comores","0,503","841 US$","423,7 hab/km²","36 por mil","9 por mil","788.474 habitantes"),
--    Congo-Brazzaville
		("Congo de Brazzaville","Brazzaville","342.000 km²","Francês","Franco CFA Central","0,591","3.125 US$","13,5 hab/km²","38 por mil","10 por mil","4.620.330 habitantes"),
--    Congo-Kinshasa
		("Congo de Kinshasa","Kinshasa","2.344.860 km²","Francês","Franco Congolês","0,433","480 US$","34,1 hab/km²","43 por mil","16 por mil","77.266.814 habitantes"),
--    Coral Sea Islands
		("Ilhas do Mar de Coral","","","","","","","","","",""),
--    Coreia do Norte
		("Coreia do Norte","Pyongyang","120.540 km²","Coreano","Won Norte-Coreano","0,595","696 US$","208,9 hab/km²","14 por mil","9 por mil","25.155.317 habitantes"),
--    Coreia do Sul
		("Coreia do Sul","Seul","99.900 km²","Coreano","Won Sul-Coreano","0,898","28.166 US$","517,3 hab/km²","10 por mil","6 por mil","50.293.439 habitantes"),
--    Costa do Marfim
		("Costa do Marfim","Yamoussoukro/Abidjan","322.460 km²","Francês","Franco CFA Ocidental","0,462","1.546 US$","71,4 hab/km²","37 por mil","14 por mil","22.701.556 habitantes"),
--    Costa Rica
		("Costa Rica","São José","51.100 km²","Espanhol","Colón costa-riquenho","0,766","10.415 US$","94,2 hab/km²","15 por mil","4 por mil","4.807.850 habitantes"),
--    Croácia
		("Croácia","Zagreb","56.590 km²","Croata","Kuna","0,818","13.425 US$","75,8 hab/km²","10 por mil","12 por mil","4.240.317 habitantes"),
--    Cuba
		("Cuba","Havana","109.890 km²","Espanhol","Peso cubano","0,769","7.274 US$","107 hab/km²","10 por mil","8 por mil","11.389.562 habitantes"),
--    Dhekelia
		("Dhekelia","","","","","","","","","",""),
--    Dinamarca
		("Dinamarca","Copenhague","43.090 km²","Dinamarquês","Coroa Dinamarquesa","0,923","61.294 US$","133,6 hab/km²","11 por mil","10 por mil","5.669.081 habitantes"),
--    Djibuti
		("Djibuti","Djibuti","23.200 km²","Árabe e Francês","Franco do Djibuti","0,470","1.814 US$","38,3 hab/km²","28 por mil","9 por mil","887.861 habitantes"),
--    Domínica
		("Dominíca","Ruseau","750 km²","Espanhol","Dólar do Caribe Oriental"," 0,724","7.361 US$","96,9 hab/km²","sem dados","sem dados"," 72.680 habitantes"),
--    Egito
		("Egito","Cairo","1.001.450 km²","Árabe","Libra Egípcia","0,690","3.151 US$","91,9 hab/km²","24 por mil","8 por mil","91.508.084 habitantes"),
--    El Salvador
		("El Salvador","San Salvador","21.040 km²","Espanhol","Dólar americano e colon","0,666","4.120 US$","295,7 hab/km²","20 por mil","7 por mil","6.126.583 habitantes"),
--    Emiratos Árabes Unidos
		("Emirados Árabes Unidos","Abu Dhabi","83.600 km²","Árabe","Dirham dos Emirados Árabes Unidos","0,835","109,5 hab/km²","109,5 hab/km²","15 por mil","1 por mil","9.156.963 habitantes"),
--    Equador
		("Equador","Quito","256.370 km²","Espanhol"," Dólar americano","0,732","6.346 US$","65 hab/km²","21 por mil","5 por mil","16.144.363 habitantes"),
--    Eritreia
		("Eritreia","Asmara","117.600 km²","Árabe e Tigrina","Nakfa","0,351","755 US$","51,8 hab/km²","37 por mil","7 por mil","5.227.791 habitantes"),
--    Eslováquia
		("Eslováquia","Bratislava","49.040 km²","Eslovaco","Coroa Eslovaca","0,844","18.486 US$","112,8 hab/km²","11 por mil","10 por mil","5.426.258 habitantes"),
--    Eslovénia
		("Eslovênia","Liubliana","20.270 km²","Esloveno","Euro","0,880","23.954 US$","102,7 hab/km²","10 por mil","10 por mil","2.067.526 habitantes"),
--    Espanha
		("Espanha","Madrid","505.370 km²","Espanhol","Euro","0,876 ","29.861 US$","92,5 hab/km²","11 por mil","9 por mil","46.121.699 habitantes"),
--    Estados Unidos
		("Estados Unidos","Washington D.C."," 9.831.510 km² ","Inglês","Dolar americano","0,915","54.306 US$","35,2 hab/km² ","13 por mil"," 8 por mil","321.773.631 habitantes"),
--    Estónia
		("Estônia","Tallinn","45.230 km²","Estoniano","Coroa Estoniana","0,812","20.122 US$","31 hab/km²","11 por mil","13 por mil","1.312.558 habitantes"),
--    Etiópia
		("Etiópia","Adis-Abeba","1.104.300 km²","Amárico","Birr Etíope","0,442","553 US$","99,4 hab/km²","34 por mil","8 por mil","99.390.750 habitantes"),
--    Faroé
		("Faroé","","","","","","","","","",""),
--    Federação Russa
		("Federação Russa","Moscou","17.098.240 km²","Russo","Rublo Russo","0,798","12.898 US$","8,8 hab/km²","12 por mil","15 por mil","143.456.918 habitantes"),		
--    Fiji
		("Fiji","Suva","18.270 km²","Fiji e Inglês","Dólar Fijiano","0,727","5.112 US$","48,8 hab/km²","21 por mil","7 por mil","892.145 habitantes"),
--    Filipinas
		("Filipinas","Manila","300.000 km²","Filipino e Inglês","Peso Filipino","0,668","2.871 US$","337,7 hab/km²","25 por mil","6 por mil","100.699.395 habitantes"),
--    Finlândia
		("Finlândia","Helsinque","338.420 km²"," Finlandês e Sueco"," Euro","0,883 "," 49.678 US$","18,1 hab/km²","11 por mil","10 por mil"," 5.503.457 habitantes"),
--    França
		("França","Paris","549.190 km²","Francês","Euro","0,888","42.802 US$","117,6 hab/km²","12 por mil","9 por mil","64.395.345 habitantes"),
--    Gabão
		("Gabão","Libreville","267.670 km²","Francês","6,7 hab/km²","0,684","10.317 US$","6,7 hab/km²","32 por mil","9 por mil","1.725.292 habitantes"),
--    Gâmbia
		("Gâmbia","Banjul","11.300 km²","Inglês","Dalasi","0,441","488 US$","196,7 hab/km²","43 por mil","10 por mil","1.990.924 habitantes"),
--    Gana
		("Gana","Acra","238.540 km²","Inglês","Cedi","0,579","1.388 US$","120,5 hab/km²","31 por mil","9 por mil","27.409.893 habitantes"),
--    Gaza Strip
		("Faixa de Gaza","","","","","","","","","",""),
--    Geórgia
		("Geógia","Tbilisi","69.700 km²","Georgiano","Lari","0,754","4.097 US$","57,6 hab/km²","14 por mil","11 por mil","3.999.812 habitantes"),
--    Geórgia do Sul e Sandwich do Sul
		("Geórgia do Sul e Sandwich do Sul","Grytviken","3093 km²","Inglês","Libra Esterlina","Sem Dados","Sem Dados","0.005 hab./km²","12","25","100 habitantes"),
--    Gibraltar
		("Gibraltar","Gilbraltar","6,8 km 2","Inglês","Libra de Gibraltar","0.861","US$ £27468","4328 hab./km²","Sem Dados","Sem Dados","32 194 habitantes"),
--    Granada
		("Granada","St. George","340 km²","Inglês","Dólar do caribe oriental","0,75","8.313 US$","314,2 hab/km²","19 por mil","7 por mil","106.825 habitantes"),
--    Grécia
		("Grécia","Atenas","131.960 km²","Grego","Euro","0,865","21.414 US$","85 hab/km²","10 por mil","10 por mil","10.954.617 habitantes"),
--    Groelândia
		("Groelândia","Nuuk","0,026 hab./km²","Groenlandês e Dinamarquês","Coroa Dinamarquesa","0,927","US$ 22.507,89","0,026 hab./km²","32","12","1 816 379 habitantes"),
--    Guame
		("Guame","","","","","","","","","",""),
--    Guatemala
		("Guatemala","Cidade de Guatemala","108.890 km²","Espanhol","Quietzal","0,627","3.673 US$","152,5 hab/km²","31 por mil","5 por mil","16.342.897 habitantes"),
--    Guernsey
		("Guernsey","","","","","","","","","",""),
--    Guiana
		("Guiana","Georgetown","214.970 km²"," inglês","Dólar da guiana","0,636","4.040 US$","3,9 hab/km²","21 por mil","7 por mil","767.085 habitantes"),
--    Guiné
		("Guiné","Conacri","245.860 km²","Francês, Sussu e Manicá","Franco da Guiné","0,411","536 US$","51,3 hab/km²","37 por mil","12 por mil","12.608.590 habitantes"),
--    Guiné Bissau
		("Guiné Bissau","Bissau","36.130 km²","Português","Franco CFA Ocidental","0,420","672 US$","65,6 hab/km²","38 por mil","13 por mil","1.844.325 habitantes"),
--    Guiné Equatorial
		("Guiné Equatorial","Malabo","28.050 km²","Espanhol e Francês","Franco CFA Central","0,587","20.382 US$","30,1 hab/km²","36 por mil","14 por mil","845.060 habitantes"),
--    Haiti
		("Haiti","Porto Principe","27.750 km²","Frances e crioulo","Gourde","0,483","813 US$","388,6 hab/km²","26 por mil","9 por mil","10.711.067 habitantes"),
--    Havai
		("Havai","Honolulu","28.311 km²","Inglês e Havaiano","Dólar Americano","0,483","68.900 US$","81,78 hab/km²","sem dados","sem dados","1.360.301 habitantes"),
--    Holanda
		("Holanda","Amsterdã","41.540 km²","Holandês","Euro","0,922","52.129 US$","501,9 hab/km²","11 por mil","9 por mil","16.924.929 habitantes"),		
--    Honduras
		("Honduras","Tegucigalpa","112.490 km²","Espanhol","Lempira"," 0,606","2.449 US$","72,2 hab/km²","26 por mil","5 por mil","8.075.060 habitantes"),
--    Hong Kong
		("Hong Kong","","","","","","","","","",""),
--    Hungria
		("Hungria","Budapeste","93.030 km²","Húngaro","Florim Húngaro","0,828","13.989 US$","108,9 hab/km²","10 por mil","13 por mil","9.855.023 habitantes"),
--    Iémen
		("Iémen","Sana/Aden","527.970 km²","Árabe","Rial Iemenita","0,498","1.418 US$","50,8 hab/km²","31 por mil","7 por mil","26.832.215 habitantes"),
--    Ilha Bouvet
		("Ilha Bouvet","","","","","","","","","",""),
--    Ilha do Natal
		("Ilha do Natal","","","","","","","","","",""),
--    Ilha Norfolk
		("Ilha Norfolk","","","","","","","","","",""),
--    Ilhas Caimão
		("Ilhas Caimão","","","","","","","","","",""),
--    Ilhas Cook
		("Ilhas Cook","","","","","","","","","",""),
--    Ilhas dos Cocos
		("Ilhas dos Cocos","","","","","","","","","",""),
--    Ilhas Falkland
		("Ilhas Falkland","","","","","","","","","",""),
--    Ilhas Heard e McDonald
		("Ilhas Heard e McDonald","","","","","","","","","",""),
--    Ilhas Marshall
		("Ilhas Marshall","Majuro","180 km²","Inglês e Marshallês","Dólar Americano","0,563","3.947 US$","342,54 hab./km2","sem dados","sem dados","52.993 habitantes"),
--    Ilhas Salomão
		("Ilhas de Salomão","Honira","28.900 km²","Inglês","Dólar das Ilhas Salomão","0,506","1.927 US$","20,8 hab/km²","31 por mil","6 por mil","583.591 habitantes"),
--    Ilhas Turcas e Caicos
		("Ilhas Turcas e Caicos","","","","","","","","","",""),
--    Ilhas Virgens Americanas
		("Ilhas Virgens Americanas","","","","","","","","","",""),
--    Ilhas Virgens Britânicas
		("Ilhas Virgens Britânicas","","","","","","","","","",""),
--    Índia
		("Índia","Nova Délhi","3.287.260 km²","Hindi e Inglês","Rúpia Indiana","0,609","1.586 US$","441 hab/km²","21 por mil","8 por mil","1.311.050.527 habitantes"),
--    Indian Ocean
		("Oceano Indico","","","","","","","","","",""),
--    Indonésia
		("Indonésia","Jacarta","1.904.570 km²","Indonésio","Rúpia Indonésia","0,684","3.492 US$","142,2 hab/km²","19 por mil","6 por mil","257.563.815 habitantes"),
--    Irã
		("Irã","Teerã","1.745.150 km²","Persa","Rial Iraniano","0,766","5.443 US$","48,6 hab/km²","5 por mil","19 por mil","79.109.272 habitantes"),
--    Iraque
		("Iraque","Bagdá","435.240 km²","Árabe e Curdo","Dinar Iraquiano","0,654","6.391 US$","83,9 hab/km²","31 por mil","5 por mil","36.423.395 habitantes"),
--    Irlanda
		("Irlanda","Dublin","70.280 km²","Irlandês e Inglês","Euro","0,916","53.648 US$","68,1 hab/km²","16 por mil","6 por mil","4.688.465 habitantes"),
--    Islândia
		("Islândia","Reykjavik","103.000 km²","Islandês","Coroa Islandesa","0,899","52.048 US$","3,3 hab/km²","15 por mil","6 por mil","329.425 habitantes"),
--    Israel
		("Israel","Reykjavik","103.000 km²","Islandês","Coroa Islandesa","0,889","52.048 US$","3,3 hab/km","15 por mil","6 por mil","329.425 habitantes"),
--    Itália
		("Itália","Roma","301.340 km²","Italiano","Euro","0,873","35.812 US$","203,3 hab/km²","9 por mil","10 por mil","59.797.685 habitantes"),
--    Jamaica
		("Jamaica","Kingston","10.990 km²","Ingles","Dolar jamaicano","0,719","5.004 US$","257,9 hab/km²","18 por mil","7 por mil","2.793.335 habitantes"),
--    Jan Mayen
		("Jan Mayen","Olonkinbyen","373 km²","Norueguês","Coroa Norueguesa","Sem Dados","Sem Dados","0,05 hab./km²","Sem Dados","Sem Dados","18 habitantes"),
--    Japão
		("Japão","Tóquio","377.947 km²","Japonês","Iene"," 0,891","36.298 US$","347,2 hab/km²","8 por mil","10 por mil","126.573.481 habitantes"),
--    Jersey
		("Jersey","","","","","","","","","",""),
--    Jordânia
		("Jordânia","Amã","89.320 km²","Árabe","Dinar Jordaniano","0,748","4.831 US$","85,5 hab/km²","28 por mil","4 por mil","7.594.547 habitantes"),
--    Kiribáti
		("Kiribáti","Baikiri","810 km²","Ikiribati","Dólar Australiano","0,590","1.632 US$","138,8 hab/km²","23 por mil","6 por mil","112.423 habitantes"),
--    Kuwait
		("Kuwait","Cidade do Kuwait","17.820 km²","Árabe","Dinar kuwaitiano","0,816","43.600 US$","218,4 hab/km²","21 por mil","3 por mil","3.892.115 habitantes"),
--    Laos
		("Laos","Vientiane","236.800 km²","Laosiano","Quipe","0,575","1.756 US$","29,5 hab/km²","27 por mil","6 por mil","6.802.023 habitantes"),
--    Lesoto
		("Lesoto","Maseru","30.360 km²","Soto do Sul e Inglês ","Loti","0,497","986 US$","70,3 hab/km²","28 por mil","15 por mil","2.135.022 habitantes"),
--    Letónia
		("Letônia","Riga","64.560 km²","Letão","Euro","0,819","15.726 US$","31,7 hab/km²","11 por mil","16 por mil","1.970.503 habitantes"),
--    Líbano
		("Líbano","Beirute","10.450 km²","Árabe","Libra Albanesa","0,769","8.844 US$","571,9 hab/km²","13 por mil","4 por mil","5.850.743 habitantes"),
--    Libéria
		("Libéria","Monróvia","111.370 km²","Inglês","Dolar Liberiano","0,430","483 US$","46,8 hab/km²","36 por mil","9 por mil","4.503.438 habitantes"),
--    Líbia
		("Líbia","Trípoli","1.759.540 km²","Árabe","Dinar Líbio","0,724","6.602 US$","3,6 hab/km²","21 por mil","4 por mil","6.278.438 habitantes"),
--    Liechtenstein
		("Liechtenstein","Vaduz","160 km²","Alemão","Franco Suíço","0,908","157.040 US$","234,6 hab/km²","sem dados","sem dados","37.531 habitantes"),
--    Lituânia
		("Lituânia","Vilnius","65.300 km²","Lituano","Euro","0,839","16.591 US$","45,9 hab/km²","11 por mil","14 por mil","2.878.405 habitantes"),
--    Luxemburgo
		("Luxemburgo","Luxemburgo","2.590 km²","Luxemburgês, Francês e Alemão","Euro","0,892","116.560 US$","219 hab/km²","12 por mil","8 por mil","567.110 habitantes"),
--    Macau
		("Macau","","","","","","","","","",""),
--    Macedónia
		("Macedônia","Skopje","25.710 km²","Mecedônio","Dinar Macedônio","0,747","5.453 US$","82,4 hab/km²","11 por mil","10 por mil","2.078.453 habitantes"),
--    Madagáscar
		("Madagascar","Antananarivo","587.040 km²","Francês e Malgaxe","Ariari","0,510","453 US$","41,7 hab/km","35 por mil","7 por mil","24.235.390 habitantes"),
--    Malásia
		("Malásia","Putrajaya/Kuala Lampur","330.800 km²","Malaio","Ringgit","0,779","92,3 hab/km²","92,3 hab/km²","18 por mil","5 por mil","30.331.007 habitantes"),
--    Malawi
		("Malawi","Lilongue","118.480 km²","Inglês e Chicheua","Quacha do Maláwi","0,445","343 US$","182,6 hab/km²","40 por mil","12 por mil","17.215.232 habitantes"),
--    Maldivas
		("Maldivas","Male","300 km²","Dhivehi","Rufia","0,706","8.484 US$","1.212,2 hab/km²","22 por mil","3 por mil","363.657 habitantes"),
--    Mali
		("Mali","Bamaco","1.240.190 km²","Francês","Franco CFA ocidental","0,419","701 US$","14,4 hab/km²","47 por mil","13 por mil","17.599.694 habitantes"),
--    Malta
		("Malta","Valeta","320 km²","Maltês e Inglês","Euro","0,839","25.222 US$","1.308,3 hab/km²","9 por mil","8 por mil","418.670 habitantes"),
--    Man, Isle of
		("","","","","","","","","","",""),
--    Marianas do Norte
		("Mariana do Norte","","","","","","","","","",""),
--    Marrocos
		("Marrocos","Rabat","446.550 km²","Árabe","Dirham","0,628","3.243 US$","77 hab/km²","23 por mil","6 por mil","34.377.511 habitantes"),
--    Maurícia
		("Maurícia","Port Louis","2.040 km²","Inglês","Rupia Mauriciana","0,777","9.945 US$","627,2 hab/km²","12 por mil","8 por mil","1.273.212 habitantes"),
--    Mauritânia
		("Mauritânia","Nuakchott","1.030.700 km²","Árabe","Ouguiya","0,506","1.283 US$","3,9 hab/km²","34 por mil","9 por mil","4.067.564 habitantes"),
--    Mayotte
		("Mayotte","","","","","","","","","",""),
--    México
		("México","Cidade do México","1.964.380 km²"," Espanhol","Peso mexicano","0,756","10.326 US$"," 62,91 hab./km2"," 19 por mil","5 por mil","122,3 milhões"),
--    Micronésia
		("Micronésia","Palikir","700 km²","Inglês","Dólar Americano","0,640","2.960 US$","149,2 hab/km²","24 por mil","6 por mil","104.460 habitantes"),
--    Moçambique
		("Moçambique","Maputo","799.380 km²","Português","Metical","0,416","628 US$","35,6 hab/km²","39 por mil","14 por mil","27.977.863 habitantes"),
--    Moldávia
		("Moldávia","Chisinau","33.850 km²","Romeno","Tugrik","0,693","1.951 US$","123,9 hab/km²","12 por mil","14 por mil","4.068.897 habitantes"),
--    Mónaco
		("Mônaco","Cidade de Mônaco","2 km²","Francês","Euro","1,074","187.650 US$","25.322,8 hab/km²","sem dados","sem dados","25.322,8 hab/km²"),
--    Mongólia
		("Mongólia","Ulan Bator","1.564.120 km²","Mongol","Tugrik","0,727","4.147 US$","1,9 hab/km²","23 por mil","7 por mil","2.959.134 habitantes"),
--    Monserrate
		("Monserrate","","","","","","","","","",""),
--    Montenegro
		("Montenegro","Podgorica","13.810 km²","Sérvio","Euro","0,802","7.337 US$","46,5 hab/km²","12 por mil","10 por mil","625.781 habitantes"),
--    Mundo
		("Mundo","","","","","","","","","",""),
--    Namíbia
		("Namíbia","Windhoek","824.290 km²","Inglês","Dólar da Namíbia","0,628","5.589 US$","3 hab/km²","26 por mil","7 por mil","2.458.830 habitantes"),
--    Nauru
		("Nauru","Yaren","20 km²","Nauruano e Inglês","Dólar Australiano","0,652","17.857 US$","511,1 hab/km²","sem dados","sem dados","10.222 habitantes"),
--    Navassa Island
		("Ilha de Navassa","","","","","","","","","",""),
--    Nepal
		("Nepal","Katmandu","147.180 km²","Nepali","Rúpia Nepalesa","0,548","692 US$","198,9 hab/km²","22 por mil","7 por mil","28.513.700 habitantes"),
--    Nicarágua
		("Nicarágua","Manágua","130.370 km²","Espanhol","Cordoba","0,589","1.963 US$","44,7 hab./km²","23 por mil","5 por mil","6.082.032 habitantes"),
--    Níger
		("Níger","Niamei","1.267.000 km²","Francês","Franco CFA ocidental","0,348","427 US$","15,7 hab/km²","50 por mil","11 por mil","19.899.120 habitantes"),
--    Nigéria
		("Nigéria","Abuja","923.768 km²","Inglês","Naira","0,514","3.203 US$","200,1 hab/km²","42 por mil","13 por mil","182.201.962 habitantes"),
--    Niue
		("Niue","","","","","","","","","",""),
--    Noruega
		("Noruega","Oslo","323.780 km²","Norueguês","Coroa Norueguesa","0,944","97.226 US$","14,3 hab/km²","12 por mil","8 por mil","5.210.967 habitantes"),
--    Nova Caledônia
		("Nova Caledônia","Nouméa","18 575 km²","Francês","Franco","0,878","US$ 35 436 USD","12,8 hab./km²","Sem Dados","Sem Dados"," 244.600 habitantes"),
--    Nova Zelândia
		("Nova Zelândia","Wellington","267.710 km²","Inglês e Maori","Dólar Neozelandês","0,913","44.189 US$","17,2 hab/km²","14 por mil","7 por mil","4.528.526 habitantes"),
--    Omã
		("Omã","Mascate","309.500 km²","Árabe","Rial Omanese","0,793","19.310 US$","14,5 hab/km²","21 por mil","3 por mil","4.490.541 habitantes"),
--    Pacific Ocean
		("Oceano Pacífico","","","","","","","","","",""),
--    Países Baixos
		("Países Baixos","Amesterdão","41 528 km²","Neerlandês","Euro","0,922","US$ 47 365","405,6 hab./km²","Sem Dados","Sem Dados","16.819.595 habitantes"),
--    Palau
		("Palau","Melekeok","460 km²","Inglês e Palauense","Dólar Americano","0,780","11.068 US$","46,3 hab/km²","sem dados","sem dados","21.291 habitantes"),
--    Panamá
		("Panamá","Cidade do Panamá","75.420 km²","Espanhol","Balboa","0,780","12.712 US$","52,9 hab/km²","20 por mil","5 por mil","3.929.141 habitantes"),
--    Papua Nova-Guiné
		("Papua Nova-Guiné","Port Moresby","462.840 km²","Inglês, Tok Pisin e Hiri Motu","Kina","0,505","2.088 US$","16,8 hab/km²","29 por mil","8 por mil","7.619.321 habitantes"),
--    Paquistão
		("Paquistão","Islamabad","796.095 km²","Urdu","Rúpia Paquistana","0,537","1.358 US$","245,1 hab/km²","26 por mil","7 por mil","188.924.874 habitantes"),
--    Paracel Islands
		("Ilhas Paracel","","","","","","","","","",""),
--    Paraguai
		("Paraguai","Assunção","406.750 km²","Espanhol e Guarani","Guarani","0,679","4.729 US$","16,7 hab/km²","24 por mil","6 por mil","6.639.123 habitantes"),
--    Peru
		("Peru","Lima","1.285.220 km²","Espanhol, Quíchua e Aimará","Novo sol","0,734","6.516 US$","24,5 hab/km²","20 por mil","5 por mil","31.376.670 habitantes"),
--    Pitcairn
		("Pitcairn","","","","","","","","","",""),
--    Polinésia Francesa
		("Polinésia Francesa","Papeete","4.167 km²","Francês","Franco","0,864","US$ 21,565","62 hab./km²","30 por mil","12 por mil","283.019 habitatens"),
--    Polônia
		("Polônia","Varsóvia","312.680 km²","Polonês","Zloty","0,843 ","14.111 US$","123,12 hab./km2","11","10","38.611.794 habitantes"),
--    Porto Rico
		("Porto Rico","San Juan","9.104 km²","Espanhol e Inglês","Dólar Americano","0,865","US$ 27 677,53","438 hab./km²","8 por mil","2 por mil","3.994.259 habitantes"),
--    Portugal
		("Portugal","Lisboa","92.090 km²","Português Lusitano","Euro","0,830","22.122 US$","113 hab/km²","9 por mil","10 por mil","10.349.803 habitantes"),
--    Quênia
		("Quênia","Nairóbi","580.370 km²","Suaíle","Xelim Queniano","0,548","1.358 US$","80,9 hab/km²","36 por mil","8 por mil","46.050.302 habitantes"),
--    Quirguizistão
		("Quirguizistão","Bishkek","199.949 km²","Quirguiz","Som","0,655","1.267 US$","31 hab/km²","27 por mil","8 por mil","5.939.962 habitantes"),
--    Reino Unido
		("Reino Unido"," Londres","243.610 km²"," Inglês","Libra esterlina","0,907 ","46.461 US$ ","267,5 hab/km","9 por mil","12 por mil","64.715.810 habitantes"),
--    República Centro-Africana
		("República Centro Africana","Bangui","622.980 km²","Francês","Franco CFA Central","0,350","383 US$","7,9 hab/km²","34 por mil","15 por mil","4.900.274 habitantes"),
--    República Checa
		("República Checa","Praga","78.870 km²","Tcheco","Coroa Tcheca","0,870","19.470 US$","136,5 hab/km² ","11 por mil","11 por mil","10.543.186 habitantes"),
--    República Dominicana
		("República Dominicana","San Domingo","48.670 km²","Espanhol","Peso","0,715","6.147 US$","217,9 hab/km²","21 por mil","6 por mil","10.528.391 habitantes"),
--    Romênia
		("Romênia","Bucareste","238.390 km²","Romeno","Leu","0,793","10.129 US$","84,8 hab/km²","10 por mil","12 por mil","19.511.324 habitantes"),
--    Ruanda
		("Ruanda","Kigali","26.340 km²","Francês, Quiniaruanda e Inglês","Franco Ruandês","0,483","697 US$","470,6 hab/km²","36 por mil","7 por mil","11.609.666 habitantes"),
--    Rússia
		("Rússia","Moscou","17.098.240 km²","Russo","Rublo russo","0,798 ","12.898 US$ "," 8,8 hab/km²","12 por mil","15 por mil","143.456.918 habitantes"),
--    Salvador
		("Salvador","","","","","","","","","",""),
--    Samoa
		("Samoa","Ápia","2.840 km²","Samoano e Inglês","Tala","0,702","4.294 US$","68,3 hab/km²","27 por mil","5 por mil","193.228 habitantes"),
--    Samoa Americana
		("Samoa Americana","Ápia","2.840 km²","Samoano e Inglês","Tala","0,702","4.294 US$","68,3 hab/km²","27 por mil","5 por mil","193.228 habitantes"),
--    Santa Helena
		("Santa Helena","","","","","","","","","",""),
--    Santa Lúcia
		("Santa Lúcia","","","","","","","","","",""),
--    São Cristóvão e Neves
		("San Cristóvan e Neves","","","","","","","","","",""),
--    São Marinho
		("San Marino",'San Marino',"60 km²","Italiano","Euro","0,875","58.393 US$","529,7 hab/km²","sem dados","sem dados","31.781 habitantes"),
--    São Pedro e Miquelon
		("San Pedro e Miquelon","","","","","","","","","",""),
--    São Tomé e Príncipe
		("San Tomé e Príncipe","San Tomé","960 km²","Porguês","Dobra","0,555","1.811 US$","190.344 habitantes","35 por mil","7 por mil","190.344 habitantes"),
--    São Vicente e Granadinas
		("San Vicente","","","","","","","","","",""),
--    Saara Ocidental
		("Saara Ocidental","El Aaiún","266.000 km²","Árabe e Inglês","Dirham","0,500","2,50 US$","1.9 hab./km²","42 por mil","32 por mil","513.000 habitantes"),
--    Seychelles
		("Seychelles","Vitória","460 km²","Crioulo","Rupia das Seychelles","0,772","15.759 US$","209,7 hab/km²","17 por mil","8 por mil","89.173 habitantes"),
--    Senegal
		("Senegal","Dacar","196.720 km²","Francês","Franco CFA ocidental","0,466","1.067 US$","78,6 hab/km²","38 por mil","8 por mil","15.129.273 habitantes"),
--    Serra Leoa
		("Serra Leoa","Freetown","71.740 km²","Inglês","Leone","0,413","775 US$","89,4 hab/km²","37 por mil","17 por mil","6.453.184 habitantes"),
--    Sérvia
		("Sérvia","Belgrado","88.360 km²","Sérvio","Dinar Sérvio","0,771","6.155 US$","101,2 hab/km²","10 por mil","12 por mil","8.850.975 habitantes"),
--    Síria
		("Síria","Damasco","185.180 km²","Árabe","Libra","0,594","1.821 US$","100,8 hab/km²","24 por mil","4 por mil","18.502.413 habitantes"),
--    Somália
		("Somália","Mogadíscio","637.660 km²","Árabe e Somali","Xelim","0,285","131 US$","17,2 hab/km²","44 por mil","13 por mil","10.787.104 habitantes"),
--    Southern Ocean
		("Oceano Antártico","","","","","","","","","",""),
--    Spratly Islands
		("Ilhas Spratly","","","","","","","","","",""),
--    Sri Lanka
		("Siri Lanka","Sri Jayewardenepura Kotte/Colombo","65.610 km²","Sinhala e Tâmil","Rúpia de Sri Lanka","0,757","3.635 US$","330,3 hab/km²","18 por mil","7 por mil","20.715.010 habitantes"),
--    Suazilândia
		("Suazislândia"," Mbabane/Lobamba","17.360 km²","Inglês e Sussuáti","Lilangeni","0,531","3.532 US$","74,8 hab/km²","30 por mil","14 por mil","1.286.970 habitantes"),
--    Sudão
		("Sudão","Juba","644.329 km²","Inglês e Árabe","Libra Sul-Sudanesa","0,467","924 US$","20,2 hab/km²","37 por mil","12 por mil","12.339.812 habitantes"),
--    Suécia
		("Suécia","Estocolmo","450.300 km²","Sueco","Coroa Sueca","0,907","58.856 US$","23,8 hab/km²","12 por mil","10 por mil","9.779.426 habitantes"),
--    Suíça
		("Suíça","Berna","41.280 km²","Alemão, Francês e Italiano","Franco Suíço","0,930","85.374 US$","210 hab/km²","10 por mil","8 por mil","8.298.663 habitantes"),
--    Suriname
		("Suriname","Paramaribo","163.820 km²","Holandês","Dólar do Suriname","0,714","9.680 US$","3,5 hab/km²","18 por mil","7 por mil","542.975 habitantes"),
--    Svalbard e Jan Mayen
		("Svalbard e Jan Mayen","","","","","","","","","",""),
--    Tailândia
		("Tailândia","Bangcoc","513.120 km²","Tai","Baht","0,726","5.977 US$","133 hab/km²","10 por mil","8 por mil","67.959.359 habitantes"),
--    Taiwan
		("Taiwan","Taipé","35.980 km²","Mandarim","Novo Dólar Taiwandes","0,882","US$ 21.571","636,57 hab./km²","8 por mil","2 por mil"," 23.037.031 habitantes"),
--    Tajiquistão
		("Tajiquistão","Duchambe","142.550 km²","Tadjique","Somoni","0,624","1.114 US$","60,6 hab/km²","33 por mil","7 por mil","8.481.855 habitantes"),
--    Tanzânia
		("Tanzânia","Dodoma","947.300 km²","Kiswahili e Inglês","Xelim Tanzaniano","0,521","952 US$","60,4 hab/km²","40 por mil","9 por mil","53.470.420 habitantes"),
--    Território Britânico do Oceano Índico
		("Território Britânico do Oceano Índico","","","","","","","","","",""),
--    Territórios Austrais Franceses
		("Teritórios Austrais Franceses","","","","","","","","","",""),
--    Timor Leste
		("Timor Leste","Dili","14.870 km²","Português e Tétum","Dólar Americano","0,595","4.294 US$","79,7 hab/km²","36 por mil","6 por mil","1.184.765 habitantes"),
--    Togo
		("Togo","Lomé","56.790 km²","Francês","Franco CFA","0,484","643 US$","134,3 hab/km²","37 por mil","11 por mil","7.304.578 habitantes"),
--    Tokelau
		("Tokelau","","","","","","","","","",""),
--    Tonga
		("Tonga","Nukualofa","750 km²","Tongandês e Inglês","Pa'anga","0,717","4.122 US$","147,5 hab/km²","26 por mil","6 por mil","106.170 habitantes"),
--    Trindade e Tobago
		("Trindade e Tobago","Port of Spain","5.130 km²","Inglês","Dólar de Trinidad e Tobago","0,772","20.723 US$","265,1 hab/km²","15 por mil","6 por mil","1.360.088 habitantes"),
--    Tunísia
		("Tunísia","Tunís","163.610 km²","Árabe","Dinar Tunisiano","0,721","4.261 US$","72,4 hab/km²","17 por mil","6 por mil","11.253.554 habitantes"),
--    Turquemenistão
		("Turcomenistão","Ashkhabad","488.100 km²","Tucomano","Turkmen Manat","0,688","9.032 US$","11,4 hab/km²","22 por mil","8 por mil","5.373.502 habitantes"),
--    Turquia
		("Turquia","Ankara","783.560 km²","Turco","Lira Turca",",200","10.299 US$","102,2 hab/km² ","17 por mil","6 por mil","78.665.830 habitantes"),
--    Tuvalu
		("Tuvalu","Funafuti","30 km²","Inglês e Tuvaluano","Dólar de Tuvalu e Dólar australiano","0,590","3.796 US$","330,5 hab/km²","sem dados","sem dados","9.916 habitantes"),
--    Ucrânia
		("Ucrânia","Kiev","603.550 km²","Ucraniano","Hyvnia","0,740","2.929 US$","77,4 hab/km²","11 por mil","17 por mil","44.823.765 habitantes"),
--    Uganda
		("Uganda","Campala","241.550 km²","Inglês","Xelim Ugandense","0,483","727 US$","195,3 hab/km²","44 por mil","10 por mil","39.032.383 habitantes"),
--    Uruguai
		("Uruguai","Montevidéu","176.220 km²","Língua castelhana","Peso uruguaio","0,793","16.807 US$","19,6 hab/km²","15 por mil","9 por mil","3.431.555 habitantes"),
--    Uzbequistão
		("Uzbequistão","Tashkent","447.400 km²","Uzbeque","Som Uzbeque","0,674","2.139 US$","70,3 hab/km²","22 por mil","7 por mil","29.893.488 habitantes"),
--    Vanuatu
		("Vanuatu","Porto-Vila","12.190 km²","Bislama, Francês e Inglês","Vatu","0,594","3.138 US$","21,7 hab/km²","27 por mil","5 por mil","264.652 habitantes"),
--    Vaticano
		("Vaticano","Cidade Do Vaticano","0,44 km²","Inglês","Dólar de Trinidad e Tobago","0,772","20.723 US$","265,1 hab/km²","15 por mil","9 por mil","1.360.088 habitantes"),
--    Venezuela
		("Venezuela","Caracas","912.050 km²","Espanhol","Bolívar venezuelano","0,762","16.615 US$","35,3 hab/km²","20 por mil","5 por mil","31.108.083 habitantes"),
--    Vietnã
		("Vietnã","Hanói","331.051 km²","Vietnamita","Dongue","0,666","2.015 US$","301,4 hab/km²","16 por mil","6 por mil","93.447.601 habitantes"),
--    Wake Island
		("Ilha Wake","","","","","","","","","",""),
--    Wallis e Futuna
		("Wallis e Futuna","","","","","","","","","",""),
--    West Bank
		("West Bank","","","","","","","","","",""),
--    Zâmbia
		("Zâmbia","Lusaca","752.610 km²","Inglês","Kwacha zambiano","0,586","1.715 US$","21,8 hab/km²","43 por mil","11 por mil","16.211.767 habitantes"),
--    Zimbabué
		("Zimbabué","Harare","390.760 km²","Inglês, Chona e Ndebele","Dólar Zimbabueano","0,509","965 US$","40,3 hab/km²","32 por mil","10 por mil","15.602.751 habitantes");
		