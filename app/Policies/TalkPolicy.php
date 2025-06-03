<?php

namespace App\Policies;

use App\Models\Talk;
use App\Models\User;

class TalkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Talk $talk): bool
    {
        return $this->userOwnsTalk($user, $talk);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Talk $talk): bool
    {
        return $this->userOwnsTalk($user, $talk);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Talk $talk): bool
    {
        return $this->userOwnsTalk($user, $talk);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Talk $talk): bool
    {
        return $this->userOwnsTalk($user, $talk);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Talk $talk): bool
    {
        return $this->userOwnsTalk($user, $talk);
    }

    private function userOwnsTalk(User $user, Talk $talk): bool
    {
        return $user->id === $talk->user_id;
    }
}
