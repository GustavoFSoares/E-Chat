<?php
  class UsuarioDAO
  {

    private $conecta;

      public function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      public function adicionaUsuario($nome)
      {
        $query="INSERT INTO usuario (nome) VALUES ('{$nome}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

      public function removeUsuario($nome)
      {
        $query = "DELETE FROM usuario WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

      public function selecionaId($nome)
      {
        $query = "SELECT id_usuario FROM usuario WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);
        
        return mysqli_fetch_assoc($resultado);
      }

  }
