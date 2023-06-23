<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{

    public function created(Post $post): void
    {
        $post->slug = str::slug($post->title);
        $post->save();

    }

    public function updated(Post $post): void
    {
        //
    }

    public function deleted(Post $post): void
    {
        //
    }

    public function restored(Post $post): void
    {
        //
    }

    public function forceDeleted(Post $post): void
    {
        //
    }
}
