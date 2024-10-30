<h1>Cadastrar Paciente</h1>

<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Paciente:</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF:</label>
		<input type="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email:</label>
		<input type="email" name="email_paciente" class="form-control">
	</div>

    <div class="mb-3">
		<label>Telefone:</label>
		<input type="text" name="fone_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento:</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div>

	<div class="mb-3">
        <label>Sexo: </label><br>
        <input type="radio" id="masculino" name="sexo_paciente" value="masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="sexo_paciente" value="feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="outro" name="sexo_paciente" value="outro">
        <label for="outro">Outro</label>
    </div>

    <div class="mb-3">
		<label>Endereço:</label>
		<input type="text" name="endereco_paciente" class="form-control">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-outline-info">Salvar</button>
	</div>
</form>
