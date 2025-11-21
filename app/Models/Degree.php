<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Degree extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // mbchb - bachelor of medicine and bachelor of surgery, belongs to a qualification
    // degree belongs to qualification
    //public function qualification()
    //{
    //    return $this->belongsTo(Qualification::class);
    //}

    // a degree has many qualifications (degree_id is in qualifications table)
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }   
    
}
