<h1>Listar Médico</h1>
<?php
	$sql = "
		SELECT *
		FROM `clinica`.`medico`";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome</th>";
				print "<th>CRM</th>";
				print "<th>Especialidade</th>";
				print "<th>Ações</th>";
			print "</tr>";
			$count = 1;
		
			while($row = $res->fetch_assoc()){
				print "<tr>";
					print "<td>".$count++."</td>";
					print "<td>".$row["nome_medico"]."</td>";
					print "<td>".$row["crm_medico"]."</td>";
					print "<td>".$row["especialidade_medico"]."</td>";
					print "<td>
						<button 
							onclick = \"location.href='index.php?page=edi-medico&id_medico=" . $row["id_medico"] . "';\"
							class = 'btn btn-success'>Editar
						</button>
						<button
							onclick = \"
								if( confirm('Tem certeza que deseja excluir?')) {
									location.href = 'index.php?page=sal-medico&acao=excluir&id_medico=" . $row["id_medico"] . "';
								}
								else {
									false;
								}
							\"
							class = 'btn btn-danger'>Excluir
						</button>
					</td>";
				print "</tr>";
			}
		print "</table>";
	} else {
		print "<p>Nenhum resultado</p>";
	}
?>