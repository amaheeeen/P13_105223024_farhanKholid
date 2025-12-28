<?php

namespace App\Models; // <--- Pastikan ini ada dan benar

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Tambahkan ini agar bisa mengisi data lewat seeder
    protected $fillable = ['name', 'headline', 'about', 'email', 'linkedin_url', 'github_url'];
}