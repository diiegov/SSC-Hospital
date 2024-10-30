<h1>Listar Consulta</h1>
<?php
$sql = "SELECT * FROM medico";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Consulta</th>";
    print "<th>Data da Consulta</th>";
    print "<th>Horário</th>";
    print "<th>Descrição</th>";
    print "</th>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_medico . "</td>";
        print "<td>" . $row->nome_medico . "</td>";
        print "<td>" . $row->crm_medico . "</td>";
        print "<td>" . $row->especialidade_medico . "</td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "Não encontrou resultados.";
}
