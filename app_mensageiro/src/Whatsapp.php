<?php

namespace src;


class Whatsapp implements ImensagemToken {
    public function enviar(): void {
        echo 'Whatsapp: Seu token é 888-222';
    }
}