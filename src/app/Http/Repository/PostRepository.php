<?php
declare(strict_types=1);


namespace App\Http\Repository;


use App\Http\Contracts\PostsRepository;
use App\Models\Posts\ItemPost;
use App\Models\Posts\Posts;

class PostRepository implements PostsRepository
{
    private const START_INDEX = 1;

    public function findById(int $id): ?ItemPost
    {
        return new ItemPost(
            $id,
            'Title Post',
            'Description Post'
        );
    }

    public function fundByTitle(string $title): ?Posts
    {
        return $this->generatePosts($title, mt_rand(self::START_INDEX, mt_rand(self::START_INDEX, 50)));
    }

    public function lastPosts(int $lastPosts): ?Posts
    {
        return $this->generatePosts('Search last Post', $lastPosts);
    }

    private function generatePosts(string $title, int $limit): ?Posts
    {
        $fill = array_fill(self::START_INDEX, $limit, $title);

        $items = [];
        foreach ($fill as $key => $v) {
            $items[] = new ItemPost($key, sprintf('%s +  %s', $title, $key), sprintf('%s + %s', 'Description', $key));
        }

        return !empty($items) ? new Posts(...$items) : null;
    }

    public function save(array $fields): bool
    {
        return isset($fields['title'], $fields['description']);
    }
}
