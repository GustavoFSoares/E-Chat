<?php
  class SalaDAO
  {

    private $conecta;

      public function __construct($conecta)
      {
        $this->conecta = $conecta;
      }

      public function entrarSala($idSala, $idUsuario){
        $query="INSERT INTO salas_usuarios VALUES ({$idSala}, {$idUsuario})";
        $resultado = mysqli_query($this->conecta, $query);
        
        return $resultado;
      }

      public function salaporId($id)
      {
        $query = "SELECT s.id_sala, s.nome 
          FROM sala s
          JOIN salas_usuarios su on su.id_salas = s.id_sala
          JOIN usuario u on u.id_usuario = su.id_usuarios 
          WHERE '{$id}' = id_usuarios";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

      public function listaSala()
      {
        $query = "SELECT s.nome, s.id_sala FROM sala s";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;  
      }

      public function adicionaSala($nome, $tipo, $idUsuario)
      {
        $query="INSERT INTO sala (nome, tipo, data,fk_usuario) VALUES ('{$nome}', '{$tipo}', now(),'{$idUsuario}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }

      public function selecionaId($nome)
      {
        $query = "SELECT id_sala FROM sala WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);

        return mysqli_fetch_assoc($resultado);
      }
  }
