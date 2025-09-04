<?php

namespace App\Listeners;

use App\Events\IssueChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\IssueChangedMail;
use Illuminate\Support\Facades\Mail;

class SendIssueChangedMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(IssueChanged $event): void
    {
        //send email
        Mail::to('admin@gmail.com')
            ->send(new IssueChangedMail($event->issue, $event->action));
    }
}
