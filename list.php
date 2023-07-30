<h1>Listar Jogador</h1>

<?php
$sql = "SELECT * FROM jogadores";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0)
{
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Data de Nascimento</th>"; 
    print "<th>Nivel do Jogador</th>";
    print "<th>Time</th>";
    print "<th>Início do Contrato</th>";
    print "<th>Término do Contrato</th>";
    print "<th>Valor de Mercado</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while($row = $res->fetch_object())
    {
        print "<tr>";
        print "<td>" .$row->ID."</td>";
        print "<td>" .$row->nome. "</td>";
        print "<td>" .$row->data_nasc. "</td>"; 
        print "<td>" .$row->nivel. "</td>";
        print "<td>" .$row->time. "</td>";
        print "<td>" .$row->inicio_contrato. "</td>";
        print "<td>" .$row->fim_contrato. "</td>";
        print "<td>" .$row->valor_jogador. "</td>";

        print "<td>  

        <button onclick=\"location.href='?page=editar&id=".$row->ID."';\" class='btn btn-success'>Editar</button> 

        <button  onclick=\"if(confirm('Tem certeza que deseja excluir estes dados?')){location.href='?page=salvar&acao=excluir&id=".$row->ID."';}else{false;}\" class='btn btn-danger'>Excluir</button>

        </td>";
        print "</tr>";
    }
    print "</table>";
} else
{
    print "<p class='alert alert-daneger'>Não foi possível encontrar resultados!</p>";
}
?>