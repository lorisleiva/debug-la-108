<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class ResetPasswordAction
{
    use AsAction;

    public string $commandSignature = 'user:reset-password {users*}';
    public string $commandDescription = 'Reset password of the given users.';
    public string $commandHelp = 'Reset password of the given users, by id.';

    public function handle()
    {
        dd('ResetPasswordAction@handle');
    }

    public function asCommand(Command $command): void
    {
        dd('ResetPasswordAction@asCommand');
    }
}
