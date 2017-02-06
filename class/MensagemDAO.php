<?php

    class MensagemDAO
    {

      private $conecta;

        public function __construct($conecta)
        {
          $this->conecta = $conecta;
        }


        public function adicionaMensagem($mensagem, $salaId)
        {
            $query = "INSERT INTO mensagem (msg, data, fk_sala) VALUES ('{$mensagem}',now(),'{$salaId}')";

            $resultado = mysqli_query($this->conecta, $query);
            return $resultado;
        }

        public function exibirMensagem($salaId)
        {
            $query = "SELECT mensagem.* FROM mensagem
                INNER JOIN usuario ON usuario.id_usuario = mensagem.id_usuario
                INNER JOIN sala ON sala.id_sala = mensagem.id_sala
            WHERE id_sala = '{$idSala}' ORDER BY mensagem.data";

            $resultado = mysqli_query($this->conecta, $query);

            $arMensagem = array();
            while($mensagem = mysqli_fetch_assoc($resultado)) {
              array_push($arMensagem, $mensagem);
            }
            return $arMensagem;
        }
          
    }
