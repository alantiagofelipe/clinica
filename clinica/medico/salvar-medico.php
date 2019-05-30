<?php
	$id 		   = @$_REQUEST["id_medico"];
	$nome 		   = @$_REQUEST["nome_medico"];
	$crm 		   = @$_REQUEST["crm_medico"];
	$especialidade = @$_REQUEST["especialidade_medico"];

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "
				INSERT INTO `clinica`.`medico` (
					`nome_medico`,
					`crm_medico`,
					`especialidade_medico`)
				VALUES (
					'{$nome}',
					'{$crm}',
					'{$especialidade}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
			} else {
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		
		case 'editar':
			$sql = "
				UPDATE medico 
				SET
					nome_medico = '{$nome}',
					crm_medico = '{$crm}',
					especialidade_medico = '{$especialidade}'
				WHERE
					`id_medico` = '{$id}'
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
				DELETE FROM medico
				WHERE
					`id_medico` = '{$id}'
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