<h1>Editar Prontuário</h1>
<?php
	$id          = @$_REQUEST["id_prontuario"];
	$id_medico   = @$_REQUEST["medico_id_medico"];
	$id_paciente = @$_REQUEST["paciente_id_paciente"];

	$sql_prontuario = "
		SELECT *
		FROM
			`clinica`.`prontuario`      AS `pro`
		INNER JOIN `clinica`.`medico`   AS `med`
			ON `pro`.medico_id_medico     = `med`.`id_medico`
		INNER JOIN `clinica`.`paciente` AS pac
			ON `pro`.`paciente_id_paciente` = `pac`.`id_paciente`
		WHERE
			`pro`.`id_prontuario` = '{$id}' AND
			`pro`.`medico_id_medico` = '{$id_medico}' AND
			`pro`.`paciente_id_paciente` = '{$id_paciente}' 
	";

	$res_prontuario = $conn->query($sql_prontuario);

	$qtd_prontuario = $res_prontuario->num_rows;

	if($res_prontuario->num_rows > 0) {
		$row_prontuario = $res_prontuario->fetch_assoc();
	} else {
		print "-Sem resultados para o prontuário-";
	}
?>
<form action="index.php?page=sal-prontuario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_prontuario" value="<?php print $row_prontuario["id_prontuario"]; ?>">
	<input type="hidden" name="medico_id_medico" value="<?php print $row_prontuario["medico_id_medico"]; ?>">
	<input type="hidden" name="paciente_id_paciente" value="<?php print $row_prontuario["paciente_id_paciente"]; ?>">
	<div class="form-group">
		<label>Médico</label>
		<?php
			$sql = "
				SELECT *
				FROM `clinica`.`medico`";

			$res = $conn->query($sql);

			print "<select name='medico_id_medico_update' class='form-control'>";
				print "<option value='" . $row_prontuario["id_medico"] . "' selected>";
					print $row_prontuario["nome_medico"] . " - " . $row_prontuario["crm_medico"] . " - " . $row_prontuario["especialidade_medico"];
				print "</option>";
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

			print "<select name='paciente_id_paciente_update' class='form-control'>";
				print "<option value='" . $row_prontuario["id_paciente"] . "' selected>";
					print $row_prontuario["nome_paciente"] . " - " . $row_prontuario["cpf_paciente"] . " - " . $row_prontuario["dt_nasc_paciente"] . " - " . $row_prontuario["genero_paciente"];
				print "</option>";
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
		<?php
			print "<textarea name='obs_prontuario' class='form-control'>";
				print $row_prontuario["obs_prontuario"];
			print "</textarea>";	
		?>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>