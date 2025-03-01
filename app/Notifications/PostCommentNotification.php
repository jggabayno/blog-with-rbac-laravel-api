<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostCommentNotification extends Notification
{
    use Queueable;


    protected $query;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(object $query)
    {
            $this->query = $query;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {


        return [$this->query];
    }
}
