<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function preview($length = 40)
    {
        return substr($this->content, 0, $length).(strlen($this->content) > $length ? '...' : '');
    }
}
