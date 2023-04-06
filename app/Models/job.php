<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'description',
        'image',
        'address',
        'salary',
        'is_approved',
        'company_id',
        'employer_id'
    ];
    public function company(){

        return $this->belongsTo(company::class);

    }
    public function User(){

        return $this->belongsTo(User::class);

    }

    public function job_application(){

        return $this->hasMany(job_application::class);

    }
}
