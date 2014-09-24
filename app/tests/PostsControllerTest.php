<?php

class PostsControllerTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->post = Mockery::mock('Acme\Interfaces\PostRepositoryInterface');
        $this->app->instance('Acme\Interfaces\PostRepositoryInterface', $this->post);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->post->shouldReceive('getAll')->once()->andReturn('foo');
        $response = $this->call('GET', 'posts');

        $this->assertTrue($response->isOk());
        $this->assertTrue(!! $response->getOriginalContent()->posts);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testShow()
    {
        $this->post->shouldReceive('getById')->andReturn('foo');
        $response = $this->call('GET', 'posts/1');

        $this->assertTrue($response->isOk());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->call('GET', 'posts/create');

        $this->assertTrue($response->isOk());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->post->shouldReceive('getById')->andReturn('foo');
        $response = $this->call('GET', 'posts/1/edit');

        $this->assertTrue($response->isOk());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testStore()
    {
        $response = $this->call('POST', 'posts');

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('posts');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testUpdate()
    {
        /*
        $response = $this->call('PUT', 'posts/1');

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('posts');
        */
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $this->post->shouldReceive('delete')->andReturn('foo');
        $response = $this->call('DELETE', 'posts/1');

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('posts');
    }

}
