<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //テーブル名
    protected $table = 'schedules';

    //可変項目
    protected $fillable = 
    [
        'user_id',
        'title',
        'description',
        'start',
        'end',
    ];

    //日付の属性を変更
    protected $dates = ['start', 'end'];

    //リレーション
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
