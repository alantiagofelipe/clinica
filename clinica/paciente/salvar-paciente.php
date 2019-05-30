<?php
	$id       = @$_REQUEST["id_paciente"];
	$nome     = @$_REQUEST["nome_paciente"];
	$cpf      = @$_REQUEST["cpf_paciente"];
	$dt_nasc  = @$_REQUEST["dt_nasc_paciente"];
	$genero   = @$_REQUEST["genero_paciente"];
	$fone     = @$_REQUEST["fone_paciente"];
	$endereco = @$_REQUEST["endereco_paciente"];
	$cidade   = @$_REQUEST["cidade_paciente"];
	$uf       = @$_REQUEST["uf_paciente"];


	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "
				INSERT INTO `clinica`.`paciente` (
					`nome_paciente`, 
					`cpf_paciente`, 
					`dt_nasc_paciente`, 
					`genero_paciente`, 
					`fone_paciente`, 
					`endereco_paciente`, 
					`cidade_paciente`, 
					`uf_paciente`)
				VALUES (
					'{$nome}',
					'{$cpf}', 
					'{$dt_nasc}', 
					'{$genero}', 
					'{$fone}', 
					'{$endereco}', 
					'{$cidade}', 
					'{$uf}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
			} else {
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		
		case 'editar':
			$sql = "
				UPDATE `clinica`.`paciente`
				SET
					`nome_paciente` = '{$nome}',
					`cpf_paciente` = '{$cpf}', 
					`dt_nasc_paciente` = '{$dt_nasc}', 
					`genero_paciente` = '{$genero}', 
					`fone_paciente` = '{$fone}', 
					`endereco_paciente` = '{$endereco}', 
					`cidade_paciente` = '{$cidade}', 
					`uf_paciente` = '{$uf}'
				WHERE
					`id_paciente` = '{$id}'
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
				DELETE FROM `clinica`.`paciente`
				WHERE
					`id_paciente` = '{$id}'
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