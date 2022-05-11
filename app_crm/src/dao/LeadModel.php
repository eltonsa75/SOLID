<?php


namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao {
    public function salvar() {
        //lógica
    }
   
    public function enviarNotificacao(Notificacao $notificacao) {
        //lógica
    }
}