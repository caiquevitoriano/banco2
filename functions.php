<?php 
	function DBQuery($tabela, $parametro = null, $colunas = "*"){
		$parametro = ($parametro) ? "{$parametro}": null;
		$colunas = ($colunas) ? "{$colunas}":"*";
		$sql = "SELECT {$colunas} FROM {$tabela} {$parametro}";

		$resultado = DBExecute($sql);

		if(!mysqli_num_rows($resultado)){
			return false;
		}else{
			while($res = mysqli_fetch_assoc($resultado)){
				var_dump($res);
				$dados[] = $res;

			}
			return $dados;

		}

	}

	function DBExecute($sql){
		$conn = DBConnect();

		$resultado = @mysqli_query($conn, $sql) or die(mysql_error($conn));
		DBClose($conn);

		return $resultado;
	}

	function DBInsert($tabela, $colunas, $paramentro){
		
		$sql = "INSERT INTO {$tabela} {$colunas} VALUES {$paramentro}";

		$resultado = DBExecuteInsert($sql);


		return $resultado;
	}

	function DBExecuteInsert($sql){
		$conn = DBConnect();

		$resultado = @mysqli_query($conn, $sql) or die(mysql_error());
		DBClose($conn);

		return $resultado;
	}

?>