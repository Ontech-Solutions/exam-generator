<?php

// app/Http/Middleware/PreventMultipleSessions.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class PreventMultipleSessions
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();
            $currentSessionId = Session::getId();
            $lastSessionId = $user->last_session_id;

            if ($lastSessionId && $currentSessionId !== $lastSessionId) {
                Session::getHandler()->destroy($lastSessionId);
            }

            $user->last_session_id = $currentSessionId;
            $user->save();
        }

        return $next($request);
    }
}
