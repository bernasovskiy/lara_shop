<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['desc', 'status', 'user_id'];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function change_status() {
    	$this->status = !$this->status;
    	$this->save();
    }
}
