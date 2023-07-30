<?php
switch (@$_REQUEST["acao"])
{
    case 'cadastrar';
    $nome = $_POST["nome"];
    $data_nasc = $_POST["data_nasc"];
    $nivel = $_POST["nivel"];
    $time = $_POST["time"];
    $inicio_contrato = $_POST["inicio_contrato"];
    $fim_contrato = $_POST["fim_contrato"];
    $valor_jogador = $_POST["valor_jogador"];

        $sql = "INSERT INTO jogadores (nome, data_nasc, nivel, time, inicio_contrato, fim_contrato, valor_jogador) VALUES ('{$nome}', '{$data_nasc}', '{$nivel}', '{$time}', '{$inicio_contrato}', '{$fim_contrato}', '{$valor_jogador}')";
        $res = $conn->query($sql);

        if($res==true)
        {
            print "<script>alert('Jogador cadastrado com sucesso'); </script>";

            print "<script>location.href='?page=listar';</script>";
        } else
        {
            print "<script>alert('O cadastro do seu jogador não foi efetuado corretamente'); </script>";

            print "<script>location.href='?page=listar';</script>";
        }
    break;
    
    case 'editar';
    $nome = $_POST["nome"];
    $data_nasc = $_POST["data_nasc"];
    $nivel = $_POST["nivel"];
    $time = $_POST["time"];
    $inicio_contrato = $_POST["inicio_contrato"];
    $fim_contrato = $_POST["fim_contrato"];
    $valor_jogador = $_POST["valor_jogador"];

        $sql = "UPDATE jogadores SET nome='{$nome}', data_nasc='{$data_nasc}', nivel='{$nivel}', time='{$time}', inicio_contrato='{$inicio_contrato}', fim_contrato='{$fim_contrato}', valor_jogador='{$valor_jogador}' WHERE id=".$_REQUEST["ID"];
        $res = $conn->query($sql);

    if($res==true)
        {
            print "<script>alert('Jogador editado com sucesso'); </script>";

            print "<script>location.href='?page=listar';</script>";
        } else
        {
            print "<script>alert('Não foi possível editar os dados do seu jogador'); </script>";

            print "<script>location.href='?page=listar';</script>";
        }
    break;

    case 'excluir':
        $sql = "DELETE FROM jogadores WHERE ID=".$_REQUEST["id"];
        $res = $conn->query($sql); 

        if($res==true)
        {
            print "<script>alert('O jogador foi excluido com sucesso'); </script>";

            print "<script>location.href='?page=listar';</script>";
        } else
        {
            print "<script>alert('Não foi possível excluir os dados do seu jogador'); </script>";

            print "<script>location.href='?page=listar';</script>";
        }
        break; 

}
?>