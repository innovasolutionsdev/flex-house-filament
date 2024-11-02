<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Notifications\BookingSubmitted;
use App\Services\Notificationservice;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    protected $notificationService;

    public function __construct(Notificationservice $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create the booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('phone'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'note' => $request->input('note'),
        ]);

        // Notify admin(s) once booking is successfully created
        if ($booking) {
            $admin = User::where('role', 1)->first(); // Assuming role 1 is for admin
            if ($admin) {
                $admin->notify(new BookingSubmitted($booking));
            }
        }

        {

            $twilioSid = env('TWILIO_SID');
            $twilioAuthToken = env('TWILIO_AUTH_TOKEN');
            $twilioWhatsappNumber = 'whatsapp:'.env('TWILIO_WHATSAPP_NUMBER');
            // Get the recipient's WhatsApp number and message content from the request
            $to = 'whatsapp:+94'.$request->input('phone');

            // Create a new Twilio client using the SID and Auth Token
            $client = new Client($twilioSid, $twilioAuthToken);
            try {
                // Send the WhatsApp message using Twilio's API
                $message = $client->messages->create(
                    $to,
                    array(
                        'from' => $twilioWhatsappNumber,
                        'body' => "Hello {$request->input('first_name')}! 🏋️‍♂️

Your private session is successfully booked! at Flexhouse Here are the details:

Date:{$request->input('date')}
Time: {$request->input('time')}

Please arrive a few minutes early and come prepared. If you need to reschedule, feel free to reply to this message or contact us at [Gym Contact Number].

Looking forward to helping you achieve your fitness goals! 💪"
                    )
                );
                // Return success message with the message SID for reference

            } catch (Exception $e) {
                // Catch any errors and return the error message
                return "Error sending message: " . $e->getMessage();
            }
        }

       return redirect()->back()->with('success', 'Booking submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
