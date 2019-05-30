<h1>Cadastrar Prontuário</h1>
<form action="index.php?page=sal-prontuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Médico</label>
		<?php
			$sql = "
				SELECT *
				FROM `clinica`.`medico`";

			$res = $conn->query($sql);

			print "<select name='medico_id_medico' class='form-control'>";
				print "<option>-Escolha-</option>";
				if($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) {
						print "<option value='" . $row["id_medico"] . "'>";
							print $row["nome_medico"] . " - " . $row["crm_medico"] . " - " . $row["especialidade_medico"];
						print "</option>";
					}
				} else {
					print "<option>-Sem resultados-</option>";
				}
			print "</select>";	
		?>
	</div>
		<div class="form-group">
		<label>Paciente</label>
		<?php
			$sql = "
				SELECT *
				FROM `clinica`.`paciente`";

			$res = $conn->query($sql);

			print "<select name='paciente_id_paciente' class='form-control'>";
				print "<option>-Escolha-</option>";
				if($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) {
						print "<option value='" . $row["id_paciente"] . "'>";
							print $row["nome_paciente"] . " - " . $row["cpf_paciente"] . " - " . $row["dt_nasc_paciente"] . " - " . $row["genero_paciente"];
						print "</option>";
					}
				} else {
					print "<option>-Sem resultados-</option>";
				}
			print "</select>";	
		?>
	</div>
	<div class="form-group">
		<label>Observação</label>
		<textarea name="obs_prontuario" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>