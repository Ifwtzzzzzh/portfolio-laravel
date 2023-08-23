<?php

namespace App\Models;

use App\Mail\SendEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class ContactMe extends Model
{
    use HasFactory;

    protected $table = 'contact_mes';

    protected $fillable = [
        'email',
        'subject',
        'message'
    ];
}
