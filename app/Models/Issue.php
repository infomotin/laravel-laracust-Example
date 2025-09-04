<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Mail\IssueCreated;
use Mail;



class Issue extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected static function booted(){
        static::created(function($issue){
            Mail::to('admin@gmail.com')
            ->send(new IssueCreated($issue));
        });

        static::updated(function($issue){
            Mail::to('admin@gmail.com')
            ->send(new IssueCreated($issue));
        });

        static::deleted(function($issue){
            Mail::to('admin@gmail.com')
            ->send(new IssueCreated($issue));
        });
    }

}
