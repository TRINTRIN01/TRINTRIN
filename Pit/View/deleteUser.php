
<?php
if(!empty($_POST['ExcConta']))
{
    include_once('config.php');
    $email  = $conexao->escape_string($_POST['email']);
    $sqlSelect = "SELECT usuario_id from usuario where email = '$email';";
    $result = $conexao->query($sqlSelect); 

    if ($result) {
        // A consulta foi executada sem erros
        if ($result->num_rows > 0) {
            // A consulta retornou resultados
            $row = $result->fetch_assoc(); // Obter a primeira linha do resultado
            $id = $row['usuario_id']; // Obter o valor da coluna 'id'
        
            $sqlDelete = "DELETE FROM usuario where usuario_id = $id;";
            $resultDelete = $conexao->query($sqlDelete);
        
            if ($resultDelete) {
                // O registro foi excluído com sucesso
                echo "Registro excluído com sucesso.";
                header('location: index.html'); 
            } else {
                // Ocorreu um erro ao excluir o registro
                echo "Erro ao excluir o registro: " . $conexao->error;
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