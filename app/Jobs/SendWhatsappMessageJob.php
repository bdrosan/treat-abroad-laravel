<?php

namespace App\Jobs;

use App\Services\WhatsappService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsappMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $message;
    private string $from;
    private string $to;

    private WhatsappService  $whatsappService;

    /**
     * Create a new job instance.
     */
    public function __construct($message = null, $from = null, $to = null)
    {
        $this->message = $message;
        $this->from = $from ?? env('TWILIO_WHATSAPP_FROM');
        $this->to = $to;

        $this->whatsappService = new WhatsappService();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this
            ->whatsappService
            ->send($this->message, $this->to);
    }
}
