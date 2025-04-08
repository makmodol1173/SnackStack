<?php

namespace App\Models;
use App\Models\Food;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'foods';
    protected $fillable = [
        'name',
        'price',
        'description',
        'type',
        'picture',
    ];

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
