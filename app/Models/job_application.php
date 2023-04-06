<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job_application extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'candidate_id',
        'job_id'
    ];
    public function job(){

        return $this->belongsTo(job::class);

    }
    public function User(){

        return $this->belongsTo(User::class);

    }
}
