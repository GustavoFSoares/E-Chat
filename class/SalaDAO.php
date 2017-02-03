<?php
  class SalaDAO
  {

    private $conecta;

      function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      function adicionaSala($nome, $tipo, $idUsuario)
      {
        $query="INSERT INTO sala (nome, tipo, data,fk_usuario) VALUES ('{$nome}', '{$tipo}', now(),'{$idUsuario}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

  }
