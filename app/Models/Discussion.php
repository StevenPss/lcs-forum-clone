<?php

namespace App\Models;

use App\Notifications\MarkAsBestReply;

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
     * filter content by channels
     * @param $builder current query builder instance
     */
    public function scopeFilterByChannels($builder)
    {
        if (request()->query('channel')) {
            $channel = Channel::where('slug', request()->query('channel'))->first();

            if ($channel) {
                return $builder->where('channel_id', $channel->id);
            }
            return $builder;
        }
        return $builder;
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
        $this->update([
            'reply_id' => $reply->id
        ]);

        if ($reply->owner->id != $this->user->id) {
            $reply->owner->notify(new MarkAsBestReply($reply->discussion));
        }
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
