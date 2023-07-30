<h1>Editar Jogador</h1>
<?php
$sql = "SELECT * FROM jogadores WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object(); 
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="ID" value="<?php print $row->ID; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?> ">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc"  value="<?php print $row->data_nasc; ?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label>Nivel do Jogador</label>
        <input type="number" name="nivel" min="35" max="96" value="<?php print $row->nivel;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Time</label>
        <input type="text" name="time" class="form-control" value="<?php print $row->time;?> ">
    </div>
    <div class="mb-3">
        <label>Inicio do Contrato</label>
        <input type="date" name="inicio_contrato" value="<?php print $row->inicio_contrato;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Fim do Contrato</label>
        <input type="date" name="fim_contrato" value="<?php print $row->fim_contrato;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor de Mercado</label>
        <input type="text" name="valor_jogador" class="form-control" value="<?php print $row->valor_jogador;?> ">
    </div>
    <div class="mb-3">
        <button type="submit"> Enviar </button>        
    </div>
</form>