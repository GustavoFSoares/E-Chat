<?php
  class SalaDAO
  {

    private $conecta;

      public function __construct($conecta)
      {
        $this->conecta = $conecta;
      }


      public function entrarSala($salaId, $usuarioId)
      {
        $query="INSERT INTO salas_usuarios VALUES ({$salaId}, {$usuarioId})";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function salaporId($userId)
      {
        $query = "SELECT s.id_sala, s.nome FROM sala s
            JOIN salas_usuarios su on su.id_salas = s.id_sala
            JOIN usuario u on u.id_usuario = su.id_usuarios
        WHERE '{$userId}' = id_usuarios";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function verifica($userId, $salaId)
      {
          $query = "SELECT s.* FROM sala s
                JOIN salas_usuarios su on su.id_salas = s.id_sala
                JOIN usuario u on u.id_usuario = su.id_usuarios
          WHERE '{$userId}' = su.id_usuarios AND '{$salaId}' = su.id_salas";
          $resultado = mysqli_query($this->conecta, $query);

          if (mysqli_num_rows($resultado)==0) {
            $resultado = FALSE;
          } else {
            $resultado = TRUE;
          }

          return $resultado;
      }


      public function listaSala()
      {
        $query = "SELECT s.nome, s.id_sala FROM sala s";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function adicionaSala($nome, $tipo, $userId)
      {
        $query="INSERT INTO sala (nome, tipo, data,fk_usuario) VALUES ('{$nome}', '{$tipo}', now(),'{$userId}')";
        $resultado = mysqli_query($this->conecta, $query);

        return $resultado;
      }


      public function selecionaId($nome)
      {
        $query = "SELECT id_sala FROM sala WHERE nome = '{$nome}'";
        $resultado = mysqli_query($this->conecta, $query);


        $sala = mysqli_fetch_assoc($resultado);
        return $sala['id_sala'];
      }

  }
