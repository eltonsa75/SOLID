<?php


namespace src\dao;

use src\BD;

use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\Inotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro, Ilog, Inotificacao {
    public function salvar() {
        //lógica
    }

    public  function registrarLog(Log $log) {
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        //lógica
    }
}