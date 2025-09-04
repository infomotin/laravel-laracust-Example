<?php

namespace App\Mail;

use App\Models\Issue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class IssueCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $issue;
    /**
     * Create a new message instance.
     */
    public function __construct(Issue $issue)
    {
        $this->issue = $issue;
    }

    public function build()
    {
        return $this->markdown('mail.issue-created')
        ->with([
            'issue' => $this->issue
        ]);
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Issue Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.issue-created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
