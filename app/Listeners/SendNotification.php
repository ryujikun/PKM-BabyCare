<?php

namespace App\Listeners;

use App\Events\QuestionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuestionEvent  $event
     * @return void
     */
    public function handle(QuestionEvent $event)
    {
        //
    }
}
