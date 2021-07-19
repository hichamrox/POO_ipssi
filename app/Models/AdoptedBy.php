<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptedBy extends Model
{
    use HasFactory;


    protected $table = "adopted_by";
    protected $guarded = [];


    public function by()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
