<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'secondary_phone_number',
        'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'user_level' => 'integer',
            'user_status' => 'integer',
        ];
    }

    const USERLEVELS = [
        0 => 'super_admin',
        1 => 'admin',
        2 => 'owner',
        3 => 'staff',
        4 => 'user',
    ];

    const USERSTATUSES = [
        0 => 'inactive',
        1 => 'active',
    ];

    public function getFullNameAttribute():string
    {
        return $this->first_name. ' ' . $this->last_name;
    }

    public function getPhoneNumbersAttribute(): string
    {
        $numbers = array_filter(
            [$this->phone_number, $this->phone_other],
            fn ($value) => !is_null($value) && $value !== ''
        );

        return implode(' / ', $numbers);
    }

    public function getUserLevelLabelAttribute(): string
    {
        return self::USERLEVELS[$this->user_level] ?? 'unknown level';
    }
}
