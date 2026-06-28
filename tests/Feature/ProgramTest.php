<?php

namespace Tests\Feature;

use App\Models\Program;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProgramTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_can_visit_the_programs_page(): void
    {
        $response = $this->get(route('programs'));

        $response->assertStatus(200);
    }

    public function test_programs_page_displays_programs(): void
    {
        $program = Program::factory()->create([
            'title' => 'Test Rescue Program Title'
        ]);

        $response = $this->get(route('programs'));

        $response->assertStatus(200);
        $response->assertSee('Test Rescue Program Title');
    }
}
