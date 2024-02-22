<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SwaggerGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger:gen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate open api';

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        shell_exec(base_path().'/vendor/bin/openapi app -o public/openapi.json');
    }
}
