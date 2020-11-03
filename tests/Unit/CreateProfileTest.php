<?php

namespace Tests\Unit;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateProfileTest extends TestCase
{

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }

    // private function makeTestCreateProfile() {
    //     $name = factory(User::class)->make();
    //     $name->save();
    //     $submission = factory(CreateProfile::class)->make(); 
    //     return $submission; 
    // }

    // public function testCreateProfile() {
    //     $createProfile = $this->makeTestCreatePlantSubmission();
    //     $this->assertInstanceOf(CreateProfile::class, $createProfile);
    //     $this->assertTrue($createProfile->save());
    //     $createProfile->delete();
    // }

    public function testDB(){
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());

        $response = $this->$post(
            '/user', [
                'name' => 'TestUser',
                'email' => 'test@test.com'
            ]
            );
            
            $this->assertCount(1, User::all());

    }
}