<?php
  class SalaDAO
  {

    private $conecta;

      function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      function adicionaSala($nome, $tipo)
      {
        $query="INSERT INTO sala (nome, tipo, data) VALUES ('{$nome}', '{$tipo}', now())";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

  }
