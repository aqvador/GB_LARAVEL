<?php
declare(strict_types=1);


namespace App\Http\Contracts;


use App\Models\Posts\ItemPost;
use App\Models\Posts\Posts;

interface PostsRepository
{
    public function findById(int $id): ?ItemPost;

    public function fundByTitle(string $title): ?Posts;

    public function lastPosts(int $lastPosts): ?Posts;

    public function save(array $fields): bool;

}
