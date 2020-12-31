<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Brand;

class BrandsTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * @test
     */
    public function CreateABrand()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        // Create a new brand to be stored
        $data = [
            'name' => 'New Brand',
            'corp_name' => 'New Brand Inc.',
            'fundators' => 'Me',
            'fundation_date' => date('Y-m-d'),
            'campus' => 'Here',
            'website' => 'https://www.google.com',
            'logo' => 'mylogo.png',
        ];

        $response = $this->post('/api/brand', $data);

        // should return a 201 (Created) HTTP code
        $response->assertStatus(201);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'name',
            'corp_name',
            'fundators',
            'fundation_date',
            'campus',
            'website',
            'logo',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * Returns the brands list.
     *
     * @test
     */
    public function ShowBrandsList()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/brand');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            [
                'id',
                'name',
                'corp_name',
                'fundators',
                'fundation_date',
                'campus',
                'website',
                'logo',
            ]
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * Returns a specific brand.
     * @test
     */
    public function ShowASpecificBrand()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/brand/1');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'name',
            'corp_name',
            'fundators',
            'fundation_date',
            'campus',
            'website',
            'logo',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * Returns a specific brand to edit.
     * @test
     */
    public function ShowASpecificBrandToEdit()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/brand/1/edit');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'name',
            'corp_name',
            'fundators',
            'fundation_date',
            'campus',
            'website',
            'logo',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * Updates a specific brand and returns it edited.
     * @test
     */
    public function UpdateBrand()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $id = 1;

        // Brand's updated data
        $data = [
            'name' => 'New Brand',
            'corp_name' => 'New Brand Inc.',
            'fundators' => 'Me',
            'fundation_date' => date('Y-m-d'),
            'campus' => 'Here',
            'website' => 'https://www.google.com',
            'logo' => 'mylogo.png',
        ];

        $response = $this->put("/api/brand/$id", $data);

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'name',
            'corp_name',
            'fundators',
            'fundation_date',
            'campus',
            'website',
            'logo',
        ]);

        $updatedBrand = Brand::find($id);

        $this->assertEquals($updatedBrand->name, $data['name']);
        $this->assertEquals($updatedBrand->corp_name, $data['corp_name']);
        $this->assertEquals($updatedBrand->fundators, $data['fundators']);
        $this->assertEquals($updatedBrand->fundation_date, $data['fundation_date']);
        $this->assertEquals($updatedBrand->campus, $data['campus']);
        $this->assertEquals($updatedBrand->website, $data['website']);
        $this->assertEquals($updatedBrand->logo, $data['logo']);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * Remove a specific brand
     * @test
     */
    public function DeleteBrand()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $id = 1;

        $response = $this->delete("/api/brand/$id");

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        $this->assertEmpty(Brand::find($id));

        // This method shows the response from api
        // $response->dump();
    }
}
