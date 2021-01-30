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
        return $this->belongsTo(User::class);
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
