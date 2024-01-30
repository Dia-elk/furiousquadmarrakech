<?php

namespace App\Notifications;

use App\Models\Customer;
use App\Models\Pack;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification implements ShouldQueue
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
******************************************

🎉 New Reservation 🎉

Email: '.$this->reservation->customer->email.'.
Phone: '.$this->reservation->customer->phone_number.'.
The Pack: '.$this->reservation->pack->name.'.
Reservation date : '.$this->reservation->reservation_date.'.
Reservation Time : '.$this->reservation->reservation_time.'.
Drivers : '.$this->reservation->drivers.'.
Passenger : '.$this->reservation->passengers.'.
Children : '.$this->reservation->children.'.
Total price: '.$this->reservation->total_price.' Dh'.'

******************************************
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
