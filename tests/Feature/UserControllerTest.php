<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testSuccessLogin()
    {
        $this->post('/regis', [
            'name' => 'required',
            'email' => 'akmaldi@gmail.com',
            'pwd' => 'required',
            'pwd2' => 'required',
        ])->assertRedirect("/regis");
    }
}
