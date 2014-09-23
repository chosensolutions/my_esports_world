<?php

use Acme\Interfaces\PostRepositoryInterface;


class PostsController extends \BaseController {
	
	protected $post;

	public function __construct(PostRepositoryInterface $post) 
	{
		$this->post = $post;
	}

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->post->getAll();

		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->post->getById($id);

		return View::make('posts.index', compact('post'));

	}

    /**
     * Display the specified post.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->post->getById($id);

        return View::make('posts.edit', compact('post'));
    }

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Post::create($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->post->delete($id);
		return Redirect::route('posts.index');
	}

}
