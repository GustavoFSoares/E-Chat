<?php

    class MensagemDAO
    {

      private $conecta;

        public function __construct($conecta)
        {
          $this->conecta = $conecta;
        }


        public function adicionaMensagem($mensagem, $salaId, $userId)
        {
            $query = "INSERT INTO mensagem (msg, data, fk_sala, fk_usuario) VALUES ('{$mensagem}',now(),'{$salaId}', '{$userId}')";

            $resultado = mysqli_query($this->conecta, $query);
            return $resultado;
        }

        public function exibirMensagem($salaId)
        {
            $query = "SELECT mensagem.*, (SELECT nome AS nome_usuario FROM usuario WHERE usuario.id_usuario = mensagem.fk_usuario) AS nome_usuario FROM mensagem
                INNER JOIN usuario ON usuario.id_usuario = mensagem.fk_usuario
                INNER JOIN sala ON sala.id_sala = mensagem.fk_sala
            WHERE sala.id_sala = '{$salaId}' ORDER BY mensagem.id_msg" ;

            $resultado = mysqli_query($this->conecta, $query);

            $arMensagem = array();
            while($mensagem = mysqli_fetch_assoc($resultado)) {
              array_push($arMensagem, $mensagem);
            }
            return $arMensagem;
        }

    }
