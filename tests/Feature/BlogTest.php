<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_can_visit_the_blogs_page(): void
    {
        $response = $this->get(route('blogs'));

        $response->assertStatus(200);
    }

    public function test_blogs_page_displays_blogs(): void
    {
        $blog = Blog::factory()->create([
            'title' => 'Test Blog Post Title'
        ]);

        $response = $this->get(route('blogs'));

        $response->assertStatus(200);
        $response->assertSee('Test Blog Post Title');
    }

    public function test_guests_can_visit_individual_blog_details_page(): void
    {
        $blog = Blog::factory()->create([
            'title' => 'My Detailed Blog Post',
            'content' => 'This is the body content of my detailed blog post.'
        ]);

        $response = $this->get(route('blogs.show', $blog));

        $response->assertStatus(200);
        $response->assertSee('My Detailed Blog Post');
        $response->assertSee('This is the body content of my detailed blog post.');
    }
}
