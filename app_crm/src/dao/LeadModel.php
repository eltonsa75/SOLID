<?php


namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;

use src\componentes\Log;
use src\componentes\Notificacao;

class LeadModel extends BD implements ICadastro {
    public function salvar() {
        //lógica
    }
    
    public function registrarLog(Log $log) {
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        //lógica
    }
}