<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
 protected   $fillable=["title","body","rate","user_id"];
 function user(){
     return $this->belongsTo(User::class);
 }
 /// article has many comment when pernt is null
 function comments(){
     return $this->hasMany(Comment::class)->whereNull('parent_id');
 }
}
