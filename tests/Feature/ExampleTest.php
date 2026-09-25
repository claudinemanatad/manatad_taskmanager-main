<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_task_board_returns_a_successful_response(): void
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
        $response->assertSee('Mission board');
    }
}
