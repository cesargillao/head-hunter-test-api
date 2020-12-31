<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DataTest extends TestCase
{
    /**
     * Returns a recursive association of data.
     *
     * @return void
     * @test
     */
    public function ShowARecursiveAsociation()
    {
        $response = $this->get('/api/data/recursive');

        $response->assertStatus(200);

        $response->dump();
    }

    /**
     * Returns an optimal list of data.
     *
     * @return void
     * @test
     */
    public function ShowOptimal()
    {
        $response = $this->get('/api/data/optimal');

        $response->assertStatus(200);

        $response->dump();
    }
}
