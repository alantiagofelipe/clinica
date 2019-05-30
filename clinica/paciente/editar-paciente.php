<h1>Editar Paciente</h1>
<?php
	$sql = "
		SELECT *
		FROM `clinica`.`paciente`
		WHERE `id_paciente` = ".$_REQUEST["id_paciente"];

	$res = $conn->query($sql);

	$row = $res->fetch_assoc();
?>
<form action="index.php?page=sal-paciente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_paciente" value="<?php print $row["id_paciente"]; ?>">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_paciente" class="form-control" value="<?php print $row["nome_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" class="form-control" value="<?php print $row["cpf_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>Nascimento</label>
		<input type="date" name="dt_nasc_paciente" class="form-control" value="<?php print $row["dt_nasc_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<br><input type="radio" name="genero_paciente" value="M" <?php if ($row["genero_paciente"]=="M") print 'checked'; ?>> Masculino
		<br><input type="radio" name="genero_paciente" value="F" <?php if ($row["genero_paciente"]=="F") print 'checked'; ?>> Feminino
		<br><input type="radio" name="genero_paciente" value="D" <?php if ($row["genero_paciente"]=="D") print 'checked'; ?>> Diversos
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="fone_paciente" class="form-control" value="<?php print $row["fone_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>Endereço</label>
		<input type="text" name="endereco_paciente" class="form-control" value="<?php print $row["endereco_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>Cidade</label>
		<input type="text" name="cidade_paciente" class="form-control" value="<?php print $row["cidade_paciente"]; ?>">
	</div>
	<div class="form-group">
		<label>UF</label>
		<input type="text" name="uf_paciente" class="form-control" value="<?php print $row["uf_paciente"]; ?>">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>