<h1>Listar Prontuário</h1>
<?php
	$sql = "
		SELECT *
		FROM
			`clinica`.`prontuario`      AS pro
		INNER JOIN `clinica`.`medico`   AS med
			ON pro.medico_id_medico     = med.id_medico
		INNER JOIN `clinica`.`paciente` AS pac
			ON pro.paciente_id_paciente = pac.id_paciente
	";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome do Médico</th>";
				print "<th>Nome do Paciente</th>";
				print "<th>Observação</th>";
				print "<th>Data</th>";
				print "<th>Ações</th>";
			print "</tr>";
			$count = 1;
		
			while($row = $res->fetch_assoc()){
				print "<tr>";
					print "<td>".$count++."</td>";
					print "<td>".$row["nome_medico"]."</td>";
					print "<td>".$row["nome_paciente"]."</td>";
					print "<td>".$row["obs_prontuario"]."</td>";
					print "<td>".$row["data_prontuario"]."</td>";
					print "<td>
						<button 
							onclick = \"location.href='index.php?page=edi-prontuario"
							. "&id_prontuario=" . $row["id_prontuario"]
							. "&medico_id_medico=" . $row["medico_id_medico"]
							. "&paciente_id_paciente=" . $row["paciente_id_paciente"]
							. "';\"
							class = 'btn btn-success'>Editar
						</button>
						<button
							onclick = \"
								if( confirm('Tem certeza que deseja excluir?')) {
									location.href = 'index.php?page=sal-prontuario&acao=excluir"
									. "&id_prontuario=" . $row["id_prontuario"]
									. "&medico_id_medico=" . $row["medico_id_medico"]
									. "&paciente_id_paciente=" . $row["paciente_id_paciente"]
									. "';
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