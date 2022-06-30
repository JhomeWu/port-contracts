<?php

namespace JhomeWu\PortContracts\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'port-contracts:install';

    public $description = 'install port-contracts package functionality';

    public function handle()
    {
        // $this->call('migrate');  // Need to migrate when install
    }
}
