<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Smartphone;

class SmartphonesTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * @test
     */
    public function CreateASmartphone()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        // Create a new smartphone to be stored
        $data = [
            'brand_id' => 3,
            'name' => 'Xiaomi Poco X3',
            'release_date' => '2020-09-01',
            'size' => '76.8 x 165.3 x 9.4 (mm)',
            'weight' => '215 g',
            'screen_size' => '6.67',
            'processor' => 'Qualcomm Snapdragon 732G',
            'image' => 'https://cdn-files.kimovil.com/devicerender/0005/21/thumb_420765_devicerender_small.jpeg',
        ];

        $response = $this->post('/api/smartphone', $data);

        // should return a 201 (Created) HTTP code
        $response->assertStatus(201);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'brand_id',
            'name',
            'release_date',
            'size',
            'weight',
            'screen_size',
            'processor',
            'image',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function ShowSmartphonesList()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/smartphone');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            [
                'id',
                'brand_id',
                'brand_name',
                'name',
                'release_date',
                'size',
                'weight',
                'screen_size',
                'processor',
                'image',
            ]
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * @test
     */
    public function ShowASpecificSmartphone()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/smartphone/1');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'brand_id',
            'brand_name',
            'name',
            'release_date',
            'size',
            'weight',
            'screen_size',
            'processor',
            'image',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * @test
     */
    public function ShowASpecificSmartphoneToEdit()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $response = $this->get('/api/smartphone/1/edit');

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'brand_id',
            'brand_name',
            'name',
            'release_date',
            'size',
            'weight',
            'screen_size',
            'processor',
            'image',
        ]);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * @test
     */
    public function UpdateSmartphone()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $id = 1;

        // Smartphone's updated data
        $data = [
            'brand_id' => 3,
            'name' => 'Xiaomi Poco X3',
            'release_date' => '2020-09-01',
            'size' => '76.8 x 165.3 x 9.4 (mm)',
            'weight' => '215 g',
            'screen_size' => '6.67',
            'processor' => 'Qualcomm Snapdragon 732G',
            'image' => 'https://cdn-files.kimovil.com/devicerender/0005/21/thumb_420765_devicerender_small.jpeg',
        ];

        $response = $this->put("/api/smartphone/$id", $data);

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        // The response should will contains this structure
        $response->assertJsonStructure([
            'id',
            'brand_id',
            'name',
            'release_date',
            'size',
            'weight',
            'screen_size',
            'processor',
            'image',
        ]);

        $updatedSmartphone = Smartphone::find($id);

        $this->assertEquals($updatedSmartphone->brand_id, $data['brand_id']);
        $this->assertEquals($updatedSmartphone->name, $data['name']);
        $this->assertEquals($updatedSmartphone->release_date, $data['release_date']);
        $this->assertEquals($updatedSmartphone->size, $data['size']);
        $this->assertEquals($updatedSmartphone->weight, $data['weight']);
        $this->assertEquals($updatedSmartphone->screen_size, $data['screen_size']);
        $this->assertEquals($updatedSmartphone->processor, $data['processor']);
        $this->assertEquals($updatedSmartphone->image, $data['image']);

        // This method shows the response from api
        // $response->dump();
    }

    /**
     * @test
     */
    public function DeleteSmartphone()
    {
        // This method provides error details
        $this->withoutExceptionHandling();

        $id = 1;

        $response = $this->delete("/api/smartphone/$id");

        // should return a 200 (OK) HTTP code
        $response->assertStatus(200);

        $this->assertEmpty(Smartphone::find($id));

        // This method shows the response from api
        // $response->dump();
    }
}
