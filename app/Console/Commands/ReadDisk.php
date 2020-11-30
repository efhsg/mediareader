<?php

namespace App\Console\Commands;

use App\Domain\Mount;
use Illuminate\Console\Command;

class ReadDisk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'read {dir} {--mountpoint=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read media files from disk (mount)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $mountpoint = $this->option('mountpoint') ?? config('app.mountpoint');
        $mount =  new Mount($mountpoint);
        $dir = $this->argument('dir');

        $this->info($mount->getPoint() . DIRECTORY_SEPARATOR . $dir);
    }
}
