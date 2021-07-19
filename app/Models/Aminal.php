<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Aminal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function adopted()
    {
        return $this->hasOne(AdoptedBy::class, 'animal_id');
    }

    public function adopteIt()
    {
        $this->dispo = false;
        $this->adopted()->create([
            'user_id' => Auth::id(),
            'animal_id' => $this->id
        ]);

        return $this->save();
    }
}
