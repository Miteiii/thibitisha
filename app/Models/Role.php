<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

protected $primaryKey = 'id';
protected $table = 'roles';
protected $fillable =['name', 'description'];

 // created_at, updated_at timestamps will be handled automatically by Eloquent ORM 

    /** relationships (1-m)
    * 1 role has many users
    * an admin role has many users assigned to it
    *
    * public function users(){
    *     return $this->hasMany(User::class);
    * }
    */

    public function users(): HasMany
    {
    return $this->hasMany(User::class);
 }

}
