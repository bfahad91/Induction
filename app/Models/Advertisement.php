<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = ['title','title_urdu','adImg','description','start_date','end_date'];

    /**
     * Get all of the users for the Advertisement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the applications for the Advertisement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class,'advertisement_id','id');
    }
}
