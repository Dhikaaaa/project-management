<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the projects that owns the member.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the users that owns the member.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
