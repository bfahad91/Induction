<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProfessionalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseName',
        'instituteName',
        'to',
        'from',
        'description',
        'application_id'
    ];

    public function application(): HasOne
    {
        return $this->hasOne(Application::class, 'application_id', 'id');
    }
}
