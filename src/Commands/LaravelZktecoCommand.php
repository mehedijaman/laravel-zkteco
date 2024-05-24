<?php

namespace MehediJaman\LaravelZkteco\Commands;

use Illuminate\Console\Command;

class LaravelZktecoCommand extends Command
{
    public $signature = 'laravel-zkteco';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
