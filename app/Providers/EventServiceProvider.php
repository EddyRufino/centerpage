<?php

namespace App\Providers;

// use Illuminate\Auth\Events\MessageWasRecived;
// use Illuminate\Auth\Listeners\SendAutoResponder;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\MessageWasRecived' => [
            'App\Listeners\SendAutoResponder',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
