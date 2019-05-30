<h1>Cadastrar Médico</h1>
<form action="index.php?page=sal-medico" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_medico" class="form-control">
	</div>
	<div class="form-group">
		<label>CRM</label>
		<input type="text" name="crm_medico" class="form-control">
	</div>
	<div class="form-group">
		<label>Especialidade</label>
		<input type="text" name="especialidade_medico" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>