<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProfileCreatedMail extends Notification implements ShouldQueue
{
    use Queueable;
    public $profile;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Profile Added')
                    ->line('New Profile of '.$this->profile->user->name.' has been added')
                    ->line('Thank you for using our application!');
    }

}
