<?php

namespace App\Observers;

use App\Models\User;
use App\Library\exitUser;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        if ($user -> isDirty('mobile')){
            $old = $user ->getOrginal('mobile');
            $new = $user ->getAttribute('mobile');

            exitUser:: getOld ($new , $old  );


        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        if ($user -> isDirty('mobile')){
            $old = $user ->getOrginal('mobile');
            $new = $user ->getAttribute('mobile');

            exitUser:: getOld ($new , $old  );


        }
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
