<h1>Cadastrar Consulta</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
    <div class="mb-3">
    <div class="mb-3">
		<label>Nome do Paciente:</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
    
		<label>Data da Consulta:</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div>

		<label>Horário:</label>
		<input type="time" name="nome_paciente" class="form-control">
	</div>

    <div class="mb-3">
        <label>Descrição</label><br>
        <textarea name="descricao_paciente" class="form-control" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-info">Enviar</button>
</form>
