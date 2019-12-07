<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FixedPlan extends Model
{
    //
    protected $fillable = ['name', 'user_id', 'plan_amount', 'plan_balance', 'rate', 'next_interest_date', 'start_date', 'end_date'];

    public function user(){

        return $this->belongsTo('App\User');
    }
}
