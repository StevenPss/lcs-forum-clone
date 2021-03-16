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
     * mark as best reply
     * @return reply
     * */
    public function markAsBestReply(Reply $reply)
    {
        return $this->update([
            'reply_id' => $reply->id
        ]);
    }

    /**
     * get best reply
     * @return slug
     * */
    public function bestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
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
