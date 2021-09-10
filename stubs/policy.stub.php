<?php

namespace Descom\Skeleton\Policies;

use App\User;
use Descom\Skeleton\Models\SkeletonModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class SkeletonPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, SkeletonModel $skeleton)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, SkeletonModel $skeleton)
    {
    }

    public function delete(User $user, SkeletonModel $skeleton)
    {
    }
}
