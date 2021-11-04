<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EmploymentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'employerName',
        'to',
        'from',
        'position',
        'responsibilities',
        'application_id'
        // 'is_recent',
    ];

    public function application(): HasOne
    {
        return $this->hasOne(Application::class, 'application_id', 'id');
    }
}
