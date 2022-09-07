<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['no_id', 'nama', 'alamat', 'phone'];

    /**
     * Get the comments for the blog post.
     */
    public function memberUpline()
    {
        return $this->hasMany(MemberUpline::class);
    }

    public function upline(){
        return $this->hasOne(MemberUpline::class);
    }

}
