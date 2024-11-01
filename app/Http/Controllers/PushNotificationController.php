<?php

namespace App\Http\Controllers;

use App\Models\PushSubscription;
use Illuminate\Http\Request;

class PushNotificationController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'endpoint' => 'required',
            'publicKey' => 'required',
            'authToken' => 'required',
        ]);

        PushSubscription::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'endpoint' => $request->endpoint,
                'public_key' => $request->publicKey,
                'auth_token' => $request->authToken,
            ]
        );

        return response()->json(['success' => true]);
    }
}
