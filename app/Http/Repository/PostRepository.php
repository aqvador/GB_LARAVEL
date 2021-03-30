<?php
declare(strict_types=1);


namespace App\Http\Repository;


use App\Http\Contracts\PostsRepository;
use App\Models\Posts\ItemPost;
use App\Models\Posts\Posts;

class PostRepository implements PostsRepository
{

    public function findById(int $id): ?ItemPost
    {
        $item = new ItemPost(
            $id,
            'Title Post',
            'Description Post'
        );

        return rand(0, 1) ? $item : null;
    }

    public function fundByTitle(string $title): ?Posts
    {
        return $this->generatePosts($title, rand(1, rand(1, 50)));
    }

    public function lastPosts(int $lastPosts): ?Posts
    {
        return $this->generatePosts('Search last Post', $lastPosts);
    }

    private function generatePosts(string $title, int $limit)
    {
        $fill = array_fill(1, $limit, $title);

        foreach ($fill as $key => $v) {
            $items[] = new ItemPost($key, sprintf('%s +  %s', $title, $key), sprintf('%s + %s', 'Description', $key));
        }

        return new Posts(...$items);
    }
}
