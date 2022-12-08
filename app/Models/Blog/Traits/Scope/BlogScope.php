<?php

namespace App\Models\Blog\Traits\Scope;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class BlogScope.
 */
trait BlogScope
{
    /**
     * Scope a query to only include active activities.
     *
     * @param Builder $query
     * @return void
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('active', true);
    }
}
