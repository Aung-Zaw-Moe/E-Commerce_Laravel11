<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the table name (optional if your table name follows Laravel's convention)
    protected $table = 'contacts';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    // Optionally, you can add any relationships here (if needed in the future)
}
