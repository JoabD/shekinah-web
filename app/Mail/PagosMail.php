<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PagosMail extends Mailable
{
    

     public function __construct($nombre,$notificacion,$meses)
    {
        $this->nombre = $nombre;
        $this->notificacion = $notificacion;
        $this->meses = $meses;
    }

    public function build()
    {
        return $this->subject('Recordatorio de pago')
        ->markdown('emails.pagos')
        ->with([
            'nombre' => $this->nombre,
            'notificacion' => $this->notificacion,
            'meses' => $this->meses,
        ]);
    }

}