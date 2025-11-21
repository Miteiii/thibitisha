<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function degree() : BelongsTo
    {
        return $this-> belongsTo(Degree::class);
    }

    public function institution() : BelongsTo
    {
        return $this-> belongsTo(Institution::class);
    }

}
