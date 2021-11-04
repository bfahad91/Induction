<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal_info()
    {
        return $this->hasOne(PersonalInformation::class);
    }

    public function professional_info()
    {
        return $this->hasMany(ProfessionalInfo::class);
    }

    public function educational_info()
    {
        return $this->hasMany(EducationInfo::class);
    }

    public function employment_info()
    {
        return $this->hasMany(EmploymentInfo::class);
    }

    public function additional_info()
    {
        return $this->hasOne(AdditionalInfo::class);
    }

    /**
     * Get all of the advertisement for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advertisement(): HasMany
    {
        return $this->hasMany(Advertisement::class, 'advertisement_id', 'id');
    }
}