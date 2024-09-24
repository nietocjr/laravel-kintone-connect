<?php

namespace nietocjr\LaravelKintoneConnect\Commands;

use Illuminate\Console\Command;

class LaravelKintoneConnectCommand extends Command
{
    public $signature = 'laravel-kintone-connect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
