<?php

namespace src;


class Sms implements ImensagemToken {
    public function enviar(): void {
        echo 'Sms: Seu token é 888-222';
    }
}

