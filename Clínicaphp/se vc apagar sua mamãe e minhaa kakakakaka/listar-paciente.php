<h1>Listar Paciente</h1>

<?php
$sql = "SELECT * FROM paciente";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>Email</th>";
    print "<th>Fone</th>";
    print "<th>dt_nasc</th>";
    print "<th>sexo</th>";
    print "<th>endereco</th>";
    print "</tr>";  // Corrigido de </th> para </tr>

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_paciente . "</td>";
        print "<td>" . $row->nome_paciente . "</td>";
        print "<td>" . $row->cpf_paciente . "</td>";
        print "<td>" . $row->email_paciente . "</td>";
        print "<td>" . $row->fone_paciente . "</td>";
        print "<td>" . $row->dt_nasc_paciente . "</td>";
        print "<td>" . $row->sexo_paciente . "</td>";
        print "<td>" . $row->endereco_paciente . "</td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "Não encontrou resultados.";
}
