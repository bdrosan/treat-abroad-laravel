<?php

namespace App\Services;

use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class WhatsappService
{
    /**
     * @throws ConfigurationException
     * @throws TwilioException
     */
    public function send(string $message, string $to)
    {

        $from = env('TWILIO_WHATSAPP_FROM');


        $twilio = new Client(env('TWILIO_AUTH_SID'), env('TWILIO_AUTH_TOKEN'));


        return $twilio->messages->create('whatsapp:' . $to, [
            "from" => 'whatsapp:' . $from,
            "contentSid" => "HXb5b62575e6e4ff6129ad7c8efe1f983e",
            "contentVariables" => "{\"1\":\"12/1\",\"2\":\"3pm\"}",
            "body" => $message
        ]);
    }
}