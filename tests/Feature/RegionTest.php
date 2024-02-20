<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegionTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.

    public function test_example(): void
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }*/
    public function test_create_post()
    {
        $response = $this->post('api/region',['region_name'=>'Aral']);

        $response->assertStatus(201);
    }
}
