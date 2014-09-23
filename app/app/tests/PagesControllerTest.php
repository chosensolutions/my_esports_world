<?php

class PagesControllerTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->call('GET', '/');

        $this->assertTrue($response->isOk());
        $this->assertTrue(!! $response->getOriginalContent());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAbout()
    {
        $response = $this->call('GET', '/about');

        $this->assertTrue($response->isOk());
        $this->assertTrue(!! $response->getOriginalContent());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testContact()
    {
        $response = $this->call('GET', '/contact');

        $this->assertTrue($response->isOk());
        $this->assertTrue(!! $response->getOriginalContent());
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTerms()
    {
        $response = $this->call('GET', '/terms');

        $this->assertTrue($response->isOk());
        $this->assertTrue(!! $response->getOriginalContent());
    }

}
