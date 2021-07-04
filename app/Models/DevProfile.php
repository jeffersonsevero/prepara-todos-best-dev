<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevProfile extends Model
{
    use HasFactory;


    protected $table = 'dev_profiles';

    protected $fillable = [
        'dev','profile', 'avatar', 'github_url', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeDoomDev($query)
    {
        return $query->where('profile', 'ruim');
    }


    public function scopeGoodDev($query)
    {
        return $query->where('profile', 'bom');
    }


    public function scopeVeryGoodDev($query)
    {
        return $query->where('profile', 'muito-bom');
    }









}
