<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the projects that owns the category.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
