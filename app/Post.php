<?php

namespace App;

class Post extends Model
{
    public function comments() {
      return $this->hasmany(Comment::class);
    }


    public function addComment ($body) {
      // Comment::create ([
      //   'body' => $body,
      //   'post_id' => $this->id
      // ]);

      $this->comments()->create(compact('body'));
    }
}
