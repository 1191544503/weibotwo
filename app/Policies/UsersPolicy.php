<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;

class UsersPolicy
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
    public function edit(User $curr,User $user){
        return $user->id===$curr->id;
    }
    public function destroy(User $curr,User $user){
        return $curr->is_admin&&$curr->id !==$user->id;
    }
}
