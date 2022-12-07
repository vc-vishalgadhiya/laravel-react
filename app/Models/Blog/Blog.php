<?php

namespace App\Models\Blog;

use App\Models\Blog\Traits\Relationship\BlogRelationship;
use App\Models\Blog\Traits\Scope\BlogScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,
        SoftDeletes,
        BlogRelationship,
        BlogScope;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'active',
    ];
}
