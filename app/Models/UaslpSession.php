<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UaslpSession extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ticket',
        'session_id',
        'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public static function createSession(string $ticket, string $sessionId): self
    {
        static::where('expires_at', '<', Carbon::now())->delete();

        return static::create([
            'ticket' => $ticket,
            'session_id' => $sessionId,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);
    }

    public static function findAndValidateSession(string $ticket): ?string
    {
        $session = static::where('ticket', $ticket)
            ->where('expires_at', '>=', Carbon::now())
            ->first();

        if ($session === null) {
            return null;
        }

        $sessionId = $session->session_id;
        $session->delete();

        return $sessionId;
    }
}
