<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EmailReservationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify reservatio holders';

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
     * @return int
     */
    public function handle()
    {
        $this->info(sprintf('Hello Vasim'));
    }
}
