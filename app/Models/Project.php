<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the clients that owns the project.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the categories that owns the project.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tasks that owns the project.
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get the members that owns the project.
     */
    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
