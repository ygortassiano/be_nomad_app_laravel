<?php

namespace be_nomad_app\Policies;

use be_nomad_app\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class partner_validation
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
