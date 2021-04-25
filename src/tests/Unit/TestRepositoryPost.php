<?php
declare(strict_types=1);


namespace Tests\Unit;


use App\Http\Contracts\PostsRepository;
use App\Http\Repository\PostRepository;
use App\Models\Posts\ItemPost;
use App\Models\Posts\Posts;

class TestRepositoryPost extends \PHPUnit\Framework\TestCase
{
    private PostsRepository $repository;

    public function setUp(): void
    {
        $this->repository = new PostRepository();
    }

    public function testSearch()
    {
        $post = $this->repository->findById(1);

        $this->assertInstanceOf(ItemPost::class, $post);
    }

    public function testLimit()
    {
        $posts = $this->repository->lastPosts(50);

        $this->assertInstanceOf(Posts::class, $posts);

        $this->assertIsArray($posts->getPosts());

        $this->assertEquals(50, count($posts->getPosts()));
    }
}
