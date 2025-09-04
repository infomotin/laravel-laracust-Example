<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Mail\IssueCreated;
use Mail;
use App\Events\IssueChanged;



class Issue extends Model
{
    use HasFactory;
    protected $guarded =[];

//Now send mail depending on event type

// protected $dispatchesEvents = [
//     'created' => IssueCreated::class,
//     'updated' => IssueUpdated::class,
//     'deleted' => IssueDeleted::class,
// ];


//its normal Way to send email
    protected static function booted(){
        static::created(function ($issue) {
            event(new IssueChanged($issue, 'created'));
        });

        static::updated(function ($issue) {
            event(new IssueChanged($issue, 'updated'));
        });

        static::deleted(function ($issue) {
            event(new IssueChanged($issue, 'deleted'));
        });
    }

}
