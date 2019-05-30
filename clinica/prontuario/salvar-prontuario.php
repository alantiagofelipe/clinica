<?php
	$id                 = @$_REQUEST["id_prontuario"];
	$id_medico          = @$_REQUEST["medico_id_medico"];
	$id_medico_update   = @$_REQUEST["medico_id_medico_update"];
	$id_paciente        = @$_REQUEST["paciente_id_paciente"];
	$id_paciente_update = @$_REQUEST["paciente_id_paciente_update"];
	$obs                = @$_REQUEST["obs_prontuario"];
	$data               = date("Y-m-d H:i:s");

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "
				INSERT INTO `clinica`.`prontuario` (
					`medico_id_medico`, 
					`paciente_id_paciente`, 
					`obs_prontuario`, 
					`data_prontuario`)
				VALUES (
					'{$id_medico}',
					'{$id_paciente}', 
					'{$obs}', 
					'{$data}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
			} else {
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		
		case 'editar':
			$sql = "
				UPDATE `clinica`.`prontuario`
				SET
					`id_prontuario`        = '{$id}', 
					`medico_id_medico`     = '{$id_medico_update}', 
					`paciente_id_paciente` = '{$id_paciente_update}', 
					`obs_prontuario`       = '{$obs}', 
					`data_prontuario`      = '{$data}'
				WHERE
					`id_prontuario`        = '{$id}' AND
					`medico_id_medico`     = '{$id_medico}' AND 
					`paciente_id_paciente` = '{$id_paciente}'
			";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;

		case 'excluir':
			$sql = "
				DELETE FROM `clinica`.`prontuario`
				WHERE
					`id_prontuario`        = '{$id}' AND
					`medico_id_medico`     = '{$id_medico}' AND
					`paciente_id_paciente` = '{$id_paciente}'
			";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br><div class='alert alert-success'>Excluído com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;		
	}
?>
