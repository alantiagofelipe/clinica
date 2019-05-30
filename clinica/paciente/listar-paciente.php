<h1>Listar Paciente</h1>
<?php
	$sql = "
		SELECT *
		FROM `clinica`.`paciente`";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome</th>";
				print "<th>CPF</th>";
				print "<th>Nascimento</th>";
				print "<th>Gênero</th>";
				print "<th>Telefone</th>";
				print "<th>Endereço</th>";
				print "<th>Cidade</th>";
				print "<th>UF</th>";
				print "<th>Ações</th>";
			print "</tr>";
			$count = 1;
		
			while($row = $res->fetch_assoc()){
				print "<tr>";
					print "<td>".$count++."</td>";
					print "<td>".$row["nome_paciente"]."</td>";
					print "<td>".$row["cpf_paciente"]."</td>";
					print "<td>".$row["dt_nasc_paciente"]."</td>";
					print "<td>".$row["genero_paciente"]."</td>";
					print "<td>".$row["fone_paciente"]."</td>";
					print "<td>".$row["endereco_paciente"]."</td>";
					print "<td>".$row["cidade_paciente"]."</td>";
					print "<td>".$row["uf_paciente"]."</td>";
					print "<td>
						<button 
							onclick = \"location.href='index.php?page=edi-paciente&id_paciente=" . $row["id_paciente"] . "';\"
							class = 'btn btn-success'>Editar
						</button>
						<button
							onclick = \"
								if( confirm('Tem certeza que deseja excluir?')) {
									location.href = 'index.php?page=sal-paciente&acao=excluir&id_paciente=" . $row["id_paciente"] . "';
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