<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookApiTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test a GET request to fetch all items.
     *
     * @return void
     */
    public function testFetchAllItems()
    {
        $books = Book::factory(10)->create();
        $writers = Writer::factory(10)->create();

        $response = $this->get('/api/books');

        $response->assertStatus(200)
                 ->assertJsonCount(10);
    }
}
