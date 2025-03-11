<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $tipoEmail;
    protected $novasenha;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, $tipoEmail, $novasenha)
    {
        $this->user = $user;
        $this->tipoEmail = $tipoEmail;
        $this->novasenha = $novasenha;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->setFrom(env('MAIL_USERNAME'), 'Feiras-sis');
        $mail->addAddress($this->user->email, $this->user->nome);
        $mail->isHTML(true);             
        $mail->Subject = $this->getSubject();
        $mail->Body = $this->getBody();
        $mail->AltBody = 'Este é um email de teste para clientes de e-mail que não reconhecem HTML';
        $mail->send();
    }

    protected function getSubject()
    {
        switch ($this->tipoEmail) {
            case 'senha':
                return 'Redefinição de senha';
                break;
            case 'email':
            default:
                return 'Verificação de Email';
                break;
        }
    }

    protected function getBody()
    {
        switch ($this->tipoEmail) {
            case 'senha':
                return 'Sua nova senha é: ' . $this->novasenha;
                break;
            case 'email':
            default:
                return 'Token para verificar email : ' . $this->user->token.'<br><br>Esta é uma mensagem automática. Por favor, não responda a este e-mail.';
                break;
        }
    }
}
