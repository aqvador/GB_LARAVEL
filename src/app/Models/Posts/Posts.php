<?php
declare(strict_types=1);


namespace App\Models\Posts;


class Posts implements \JsonSerializable
{
    /** @var ItemPost[] */
    private array $posts;

    public function __construct(ItemPost ...$itemPosts)
    {
        $this->posts = $itemPosts;
    }

    public function addPost(ItemPost $itemPost): void
    {
        $this->posts[] = $itemPost;
    }

    /**
     * @return ItemPost[]
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    public function jsonSerialize()
    {
        return $this->getPosts();
    }
}
