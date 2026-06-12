<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const ROLE_ADMIN = 'admin';
    public const ROLE_EDITOR = 'editor';
    public const ROLE_CAPTURISTA = 'capturista';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'rpe',
        'uaslp_username',
        'role',
        'is_active',
        'password',
        'uaslp_authenticated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'uaslp_authenticated_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public static function roleLabels(): array
    {
        return [
            self::ROLE_ADMIN => 'Administrador',
            self::ROLE_EDITOR => 'Editor',
            self::ROLE_CAPTURISTA => 'Capturista',
        ];
    }

    public function roleLabel(): string
    {
        return self::roleLabels()[$this->role] ?? 'Usuario';
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function canAccessAdminPanel(): bool
    {
        return (bool) $this->is_active && in_array($this->role, array_keys(self::roleLabels()), true);
    }

    public function canCaptureTesis(): bool
    {
        return $this->canAccessAdminPanel()
            && in_array($this->role, [self::ROLE_ADMIN, self::ROLE_EDITOR, self::ROLE_CAPTURISTA], true);
    }

    public function canEditTesis(): bool
    {
        return $this->canAccessAdminPanel()
            && in_array($this->role, [self::ROLE_ADMIN, self::ROLE_EDITOR], true);
    }

    public function canImportTesis(): bool
    {
        return $this->canEditTesis();
    }

    public function canDeleteTesis(): bool
    {
        return $this->canAccessAdminPanel() && $this->role === self::ROLE_ADMIN;
    }
}
