<?php
  class usuarioDAO
  {

    private $conexao;

      function __construct($conexao)
      {
        $this->conexao = $conexao;
      }


      function adicionaUsuario($nome)
      {
        $query="INSERT INTO usuario (nome) VALUES ('{$nome}')";
        $resultado = mysqli_query($this->conexao, $query);

        return $resultado;
      }


  }
