
<?php
if(!empty($_POST['ExcConta']))
{
    include_once('config.php');
    $email  = $conexao->escape_string($_POST['email']);
    $sqlSelect = "SELECT locador_id from locador where email = '$email';";
    $result = $conexao->query($sqlSelect);

    if ($result) {
        // A consulta foi executada sem erros
        if ($result->num_rows > 0) {
            // A consulta retornou resultados
            $row = $result->fetch_assoc(); // Obter a primeira linha do resultado
            $id = $row['locador_id']; // Obter o valor da coluna 'id'
        
            $sqlDelete = "DELETE FROM locador where locador_id = $id;";
            $resultDelete = $conexao->query($sqlDelete);
        
            if ($resultDelete) {
                // O registro foi excluído com sucesso
                echo "Conta excluída com sucesso.";
                header('location: index.html');
            } else {
                // Ocorreu um erro ao excluir o registro
                echo "Erro ao excluir a conta: " . $conexao->error;
            }
        } else {
            // A consulta não retornou resultados
            echo "Nenhuma conta encontrado com o email informado.";
        }
    } else {
        // Ocorreu um erro na consulta
        echo "Erro na consulta: " . $conexao->error;
    }
    
}

if(!empty($_POST['AtuPerfil']))
{
    include_once('config.php');
    $email  = $conexao->escape_string($_POST['email']);
    $sqlSelect = "SELECT locador_id from locador where email = '$email';";
    $result = $conexao->query($sqlSelect); 
    $nome = $_POST['nome'];
    $senha = $_POST['pass'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['tel'];

    if ($result) {
        // A consulta foi executada sem erros
        if ($result->num_rows > 0) {
            // A consulta retornou resultados
            $row = $result->fetch_assoc(); // Obter a primeira linha do resultado
            $id = $row['usuario_id']; // Obter o valor da coluna 'id'
        
            $sqlUpdate = "UPDATE locador SET nome = '$nome', senha = '$senha', endereco = '$endereco', telefone = '$tel'  WHERE email = '$email'";
            $resultUp = $conexao->query($sqlUpdate);
        
            if ($resultUp) {
                // O registro foi Alterado com sucesso
                echo "Registro alterado com sucesso.";
                header('location: index.html'); 
            } else {
                // Ocorreu um erro ao excluir o registro
                echo "Erro ao Alterar o registro: " . $conexao->error;
            }
        } else {
            // A consulta não retornou resultados
            echo "Nenhum registro encontrado com o email informado.";
        }
    } else {
        // Ocorreu um erro na consulta
        echo "Erro na consulta: " . $conexao->error;
    }
    
}
?>