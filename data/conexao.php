<?php

class Conexao {

    private $host = "localhost";
    private $nomeBanco = "objetivo";
    private $usuario = "root";
    private $senha = "";

    function conectar(){
        try {

            $conexao = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->nomeBanco,
                $this->usuario,
                $this->senha
            );

            $nome = ($_POST["nome"]);
            $obs = ($_POST["obs"]);
            $numero = ($_POST["numero"]);
            
            $insert = "
                INSERT INTO cliente(id_cliente, nome, obeservacao)
                VALUES('1', '$nome', '$obs')
            ";
                        
            $stmt = $conexao->query($insert);
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $conexao;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
    $conexao = new Conexao;
    $conexao->conectar()
?>