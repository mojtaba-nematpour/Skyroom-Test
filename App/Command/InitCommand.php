<?php

namespace App\Command;

use App\Models\Admin;
use App\Models\Token;
use App\Models\User;
use Core\Command\Command;
use Core\Http\Responses\IOResponse;

class InitCommand extends Command
{
    public function run(): IOResponse
    {
        $this->connection->createTable(Admin::class)
            ->createTable(Token::class)
            ->createTable(User::class);

        return $this->io('Successfully Created `Admin` && `Token` && `User` ');
    }
}
