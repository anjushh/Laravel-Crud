<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    protected $fillable = ['title','content'];

    public function show($id)
    {
        return $this->where('id',$id)->first();
    }
    public function edit($id)
    {
        return $this->where('id',$id)->first();
    }
}