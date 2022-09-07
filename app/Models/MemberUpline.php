<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberUpline extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_upline';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['upline_id', 'member_id'];

     /**
     * Get the comments for the blog post.
     */
    public function members()
    {
        return $this->belongsToMany('App\Models\Member');
    }


}
