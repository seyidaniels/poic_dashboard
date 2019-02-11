<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProjectStatus extends Notification
{
    use Queueable;


    private $status;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $subject = "Notification with respect to your Project";
        $data = ['message' => $this->formatMessage($this->status)];
        return (new MailMessage)->view('email.project-status', $data)->from('poic@Unilag.edu.ng')->subject($subject);

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            "message" => $this->formatMessage($this->$status)
        ];
    }

    public function formatMessage($status) : string
    {
        // status could be created, updated, submitted || Accepted, Rejected, Modification
        $message = "";

        switch ($message) {
            case "created":
                $message = "Your Team Project has now been created, Further modififcations can be done before it can be finally submitted";
                break;
            case "updated":
                $message = "Your Team Project has been updated by " . Auth::user()->fullname() . ". Kindly log on your dashboard to make changes if need be!";
                break;
            case "submitted":
                $message = "Your Team Project has now been submitted and will no longer be edited, You will be notified about the status of your application in the coming days!";
                break;
        }
        return $message;
    }
}