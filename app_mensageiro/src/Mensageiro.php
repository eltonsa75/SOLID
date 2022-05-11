<?php

namespace src;

use src\Email;
use src\ImensagemToken;

class Mensageiro {


    private $canal;

    public function __construct(ImensagemToken $canal) {
        $this->setCanal($canal);
    }

    public function getCanal(): ImensagemToken {
        return $this->canal;
    }

    public function setCanal(ImensagemToken $canal): void {
        $this->canal = $canal;
    }

     public function enviarToken(): void {
        $this->getCanal()->enviar();



    //    $classe = '\src\\'. ucfirst($this->getCanal());
    //     echo $classe;
    //     echo'<br>';
    //    $obj = new $classe;
    //    $obj->enviar();
    }
}