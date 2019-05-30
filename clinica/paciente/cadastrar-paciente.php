<h1>Cadastrar Paciente</h1>
<form action="index.php?page=sal-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>Nascimento</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<br><input type="radio" name="genero_paciente" value="M"> Masculino
		<br><input type="radio" name="genero_paciente" value="F"> Feminino
		<br><input type="radio" name="genero_paciente" value="D"> Diversos
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="fone_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço</label>
		<input type="text" name="endereco_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>Cidade</label>
		<input type="text" name="cidade_paciente" class="form-control">
	</div>
	<div class="form-group">
		<label>UF</label>
		<input type="text" name="uf_paciente" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>