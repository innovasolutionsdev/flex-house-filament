<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification($token, $title, $body)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $fields = [
            'to' => $token,
            'notification' => [
                'title' => $title,
                'body' => $body,
                'icon' => 'your-icon-url', // Optional
            ],
        ];

        $headers = [
            'Authorization: key=' . 'BGL2kzbjuM6eemBjoXWvXuiFXGrFwvBh5vbY4ztkb-o4cxs9-u3Lx0BhR4Gt5bNNAwnHtUja5kzeG0lp4Hudlvo', // Replace with your Server Key
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);

        return response()->json(['result' => $result]);
    }
}
