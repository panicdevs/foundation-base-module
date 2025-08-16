<?php

/** @noinspection PhpUnused */
/** @noinspection PhpPossiblePolymorphicInvocationInspection */

declare(strict_types=1);

namespace Foundation\Base\Policies\V1\CleanPolicy;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

abstract class CleanPolicy
{
    use HandlesAuthorization;

    /**
     * Get the unique key
     */
    abstract protected function key(): string;

    /**
     * Determine whether the Model can view any models.
     */
    public function viewAny(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("view_any_{$this->key()}");
    }

    /**
     * Determine whether the Model can view the model.
     */
    public function view(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("view_{$this->key()}");
    }

    /**
     * Determine whether the Model can create models.
     */
    public function create(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("create_{$this->key()}");
    }

    /**
     * Determine whether the Model can update the model.
     */
    public function update(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("update_{$this->key()}");
    }

    /**
     * Determine whether the Model can delete the model.
     */
    public function delete(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("delete_{$this->key()}");
    }

    /**
     * Determine whether the Model can bulk delete.
     */
    public function deleteAny(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("delete_any_{$this->key()}");
    }

    /**
     * Determine whether the Model can permanently delete.
     */
    public function forceDelete(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("force_delete_{$this->key()}");
    }

    /**
     * Determine whether the Model can permanently bulk delete.
     */
    public function forceDeleteAny(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("force_delete_any_{$this->key()}");
    }

    /**
     * Determine whether the Model can restore.
     */
    public function restore(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("restore_{$this->key()}");
    }

    /**
     * Determine whether the Model can bulk restore.
     */
    public function restoreAny(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("restore_any_{$this->key()}");
    }

    /**
     * Determine whether the Model can bulk restore.
     */
    public function replicate(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("replicate_{$this->key()}");
    }

    /**
     * Determine whether the Model can reorder.
     */
    public function reorder(Model $model): bool
    {
        if (env('FORCE_POLICIES_TO_ACCESS_ANY', false))
        {
            return true;
        }

        return $model->can("reorder_{$this->key()}");
    }
}
