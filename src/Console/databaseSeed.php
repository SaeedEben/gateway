<?php

namespace Larabookir\Gateway\Console;

use Illuminate\Console\Command;
use Larabookir\Gateway\Models\Gateway;

class databaseSeed extends Command
{
    protected $signature = 'database:seed';

    protected $description = 'seed the database for gateway table from conf/gateway';

    public function handle()
    {
        $conf = config('gateway.gateways');
        $bar  = $this->output->createProgressBar();
        foreach ($conf as $key => $item) {
            $gateway = Gateway::where('name', $key)->first();
            if (!$gateway)
                $gateway = new Gateway();
            $gateway->name = $key;
            $gateway->fill($item);
            $gateway->save();

            $bar->advance();
        }

        $bar->finish();

    }
}
