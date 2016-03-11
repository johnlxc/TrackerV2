<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $fillable = ['mileage'];
    protected $fillable = ['location'];
    protected $fillable = ['number_gallons'];
    protected $fillable = ['gas_price'];
    protected $fillable = ['notes'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
