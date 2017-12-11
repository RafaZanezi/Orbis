<?php		
    //Conectando ao banco de dados
    $mysqli = new mysqli("localhost", "root", "", "PaisesBD");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    //Utilizando o vetor REQUEST ao invés do vetor POST
	//Aparentemente por algum problema de configuração que ainda não identifiquei,
	//o vetor POST não corresponde aos parametros enviados
	//$pais = $_POST["pais"]; 
	$pais = $_REQUEST["pais"];
	
    //Consultando banco de dados
    $res = $mysqli->query("SELECT * FROM info WHERE nome like \"" . $pais . "\"");  
	
	//Pais não encontrado
	if (!$res) {
		echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
		//TODO: devolver um objeto JSON vazio
	}
	
    while($row = $res->fetch_assoc()){
        $vetor[] = array_map('utf8_encode', $row); 
    }
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>