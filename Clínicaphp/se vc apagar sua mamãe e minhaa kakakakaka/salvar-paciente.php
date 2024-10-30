<?php
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_REQUEST['nome_paciente'];
		$cpf = $_REQUEST['cpf_paciente'];
		$email = $_REQUEST['email_paciente'];
		$fone = $_REQUEST['fone_paciente'];
		$dtnasc = $_REQUEST['dt_nasc_paciente'];
		$sexo = $_REQUEST['sexo_paciente'];
		$endereco = $_REQUEST['endereco_paciente'];
		$sql = "INSERT INTO paciente (nome_paciente, cpf_paciente, email_paciente, fone_paciente, dt_nasc_paciente, sexo_paciente, endereco_paciente)
					VALUES ('{$nome}', '{$cpf}', '{$email}', '{$fone}', '{$dtnasc}', '{$sexo}', '{$endereco}')";
		$res = $conn->query($sql);

		if ($res == true) {
			print "<script>alert('Cadastro com sucesso!');</script>";
			print "<script>location.href'?page=listar-paciente</script>";
		} else {
			print "<script>alert('Deu errado');</script>";
			print "<script>location.href'?page=listar-paciente';</script>";
		}
		break;

	case 'editar':
		// code...
		break;

	case 'excluir':
		// code...
		break;

	default:
		// code...
		break;
}
