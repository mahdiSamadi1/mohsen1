<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Models\User;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function setUp(): void
    {
        parent::setUp();
        $this->setUpUser();
    }

    public function testUserCanRetrieveHisProjects()
    {
        $this->json('GET', '/api/projects')
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Retrieved successfully'
            ]);
    }

    public function testUserCanRetrieveOneOfHisProject()
    {
        $this->json('GET', '/api/projects/' . $this->user->projects->last()->id)
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Retrieved successfully'
            ]);
    }

    public function testUserCanCreateProject()
    {
        $this->json('POST', '/api/projects', [
            'name' => 'test Project',
            'start_date' => '1401/01/01',
            'end_date' => '1401/03/01',
        ])
            ->assertStatus(201)
            ->assertJson(
                [
                    'message' => 'Created successfully'
                ]);
    }

    public function testUserCanUpdateHisProject()
    {
        $this->json('PUT', '/api/projects/' . $this->user->projects->last()->id, [
            'name' => 'test Project 2',
            'start_date' => '1401/02/01',
            'end_date' => '1401/03/01',
        ])
            ->assertStatus(200)
            ->assertJson(
                [
                    'message' => 'Update project successfully'
                ]);
    }

    public function testUserCanDeleteHisProject()
    {
        $this->json('DELETE', '/api/projects/' . $this->user->projects->last()->id)
            ->assertStatus(200)
            ->assertJson(
                [
                    'message' => 'Deleted'
                ]);
    }

}


class testParent
{
    public static $var1;
}
class testChild extends testParent
{
    public static $var2;
    public $abc =2;
    function testFunction()
    {
        self::$var2 = 3;
        parent::$var1 = 5;
    }
}
echo testChild::$abc; //throw fatal error
