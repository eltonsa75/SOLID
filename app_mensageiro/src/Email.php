<?php

namespace src;


class Email implements ImensagemToken {
    public function enviar(): void {
        echo 'E-mail: Seu token é 555-333';
    }
}