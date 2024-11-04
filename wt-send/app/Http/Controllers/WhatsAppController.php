<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    public function sendWhatsAppMessage(): JsonResponse
    {
        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_AUTH_TOKEN');
        $twilioWhatsAppNumber = env('TWILIO_WHATSAPP_NUMBER');
        $recipientNumber = 'whatsapp:+91_mobile_number';
        $message = "Hello from Programming Experience";

        $twilio = new Client($twilioSid, $twilioToken);

        try {
            $twilio->messages->create(
                $recipientNumber,
                [
                    "from" => 'whatsapp:' . $twilioWhatsAppNumber,
                    "body" => $message,
                ]
            );
            return response()->json(['message' => 'WhatsApp message sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
