<?php namespace Acme\Modules\User\Commands\Register\Events;

class EmailNotifier extends EventListener {

    public function whenUserHasRegistered()
    {
        dd('send off welcome email');
    }

} 