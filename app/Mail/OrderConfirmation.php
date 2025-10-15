<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// optionally implement ShouldQueue to queue this email
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
        // $this->order = $order->load('items.product');
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->subject("Order Confirmation — Order #{$this->order->order_number}")
            ->view('emails.orders.confirmation')
            ->with([
                'order' => $this->order,
            ]);
    }
}
