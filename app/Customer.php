<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable=['name','email','status','company_id'];


    public function scopeActive($query){
        return $query->where('status',1);
    }



    public function scopeinActive($query){
        return $query->where('status',0);
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
