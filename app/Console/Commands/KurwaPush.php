<?php

namespace App\Console\Commands;

use App\KurwaSender;
use Illuminate\Console\Command;

class KurwaPush extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kurwa:push {message?} {title?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $arguments = $this->arguments();
        $message = (!empty($arguments['message'])) ? $arguments['message'] : 'Kurwa!';
        $title = (!empty($arguments['title'])) ? $arguments['title'] : 'Kurwa!';
        KurwaSender::sendPush($message, $title);
    }
}
