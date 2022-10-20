<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testCommand2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Hello';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->call('migrate:fresh');
    }
}
