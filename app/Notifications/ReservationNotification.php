<?php

namespace App\Notifications;

use App\Models\Customer;
use App\Models\Pack;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    private $reservation;
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['slack'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toSlack(object $notifiable): SlackMessage
    {
        return (new SlackMessage)
                    ->content(
                        '
                        New Reservation
from: '.$this->reservation->email.', Phone Number:'.$this->reservation->phone_number.'
for the pack: '.$this->reservation->name.'
Total price: '.$this->reservation.'
                       '
                    );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
