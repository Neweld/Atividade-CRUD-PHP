<h1>Novo Jogador</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nivel do Jogador</label>
        <input type="number" name="nivel" min="35" max="96" class="form-control">
    </div>
    <div class="mb-3">
        <label>Time</label>
        <input type="text" name="time" class="form-control">
    </div>
    <div class="mb-3">
        <label>Inicio do Contrato</label>
        <input type="date" name="inicio_contrato" class="form-control">
    </div>
    <div class="mb-3">
        <label>Fim do Contrato</label>
        <input type="date" name="fim_contrato" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor de Mercado</label>
        <input type="text" name="valor_jogador" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit"> Enviar </button>        
    </div>
</form>