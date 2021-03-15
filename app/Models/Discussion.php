<?php

namespace App\Models;


class Discussion extends Model
{
    /**
     * discussion created belongs to which user?
     * @return user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * replies belonging to a specific discussion
     * @return replies
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    /**
     * use slug instead of default id
     * @return slug
     * */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
