<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailForQueue;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $pass;
    protected $email;
    protected $name;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $pass, $name)
    {
        $this->pass = $pass;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailForQueue($this->pass, $this->name);
        Mail::to($this->email)->send($email);
    }
}
