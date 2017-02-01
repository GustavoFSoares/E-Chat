<?php
  class usuarioDAO
  {

    private $conecta;

      function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      function adicionaUsuario($nome)
      {
        $query="INSERT INTO usuario (nome) VALUES ('{$nome}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


  }
