<?php

namespace App\Console\Commands;

use App\Mail\NewMail;
use App\Models\MailContent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = MailContent::all();

        if ($users->count() > 0) {
            foreach ($users as $user) {
                Mail::to($user)->send(new NewMail($user));
            }
        }

        return 0;
    }
}
