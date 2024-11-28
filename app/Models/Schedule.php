<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{

    // Factoryを使うための記述
    use HasFactory;

    //テーブル名
    protected $table = 'schedules';

    //可変項目
    protected $fillable = 
    [
        'user_id',
        'title',
        'description',
        'place',
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
