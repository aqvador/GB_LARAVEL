<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use App\Http\Contracts\PostsRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private PostsRepository $postsRepository;

    protected $layout = 'layouts.basic';

    /**
     * PostsController constructor.
     * @param PostsRepository $postsRepository
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }


    public function view(int $id)
    {
        $post = $this->postsRepository->findById($id);

        return view('post/view', compact('post'));
    }

    public function list(int $limit = 10)
    {
        $posts = $this->postsRepository->lastPosts($limit);

        return view('post/list', compact('posts'));
    }
}
