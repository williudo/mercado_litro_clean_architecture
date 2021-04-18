<?php

use App\Models\User;
use Tests\TestCase;

class UpdateUserTest extends TestCase
{
    /**
     * Test try update a user without authentication.
     * Expects return a json with 401 - unauthorized response
     * @return void
     */
    public function testUnauthorized()
    {
        //Creates 1 ramdoms user
        $users = factory(User::class)->create();
        //make request
        $response = $this->json('PUT', '/api/users/update/'.$users->id, ['name'=> 'Willian Rodrigues', 'email' => 'willian@email.com', 'password' => '123456', 'password_confirmation' => '123456']);
        //checks if access is unauthorized
        $response->assertStatus(401);
    }

    /**
     * Test try update a user without user id.
     * Expects return a json with 401 - unauthorized response
     * @return void
     */
    public function testUpdateWithoutUserID()
    {
        //Creates 1 ramdoms user
        $user = factory(User::class)->create();
        //Acting as user
        $this->actingAs($user);
        //make request
        $response = $this->json('PUT', '/api/users/update/', ['name'=> 'Willian Rodrigues', 'email' => 'willian@email.com', 'password' => '123456', 'password_confirmation' => '123456']);
        //checks if access is unauthorized
        $response->assertStatus(404);
    }

    /**
     * Test try update a user with invalid user id.
     * Expects return a json with 401 - unauthorized response
     * @return void
     */
    public function testUpdateWithInvalidUserID()
    {
        //Creates 1 ramdoms user
        $user = factory(User::class)->create();
        //Acting as user
        $this->actingAs($user);
        //make request
        $response = $this->json('PUT', '/api/users/update/wad666668', ['name'=> 'Willian Rodrigues', 'email' => 'willian@email.com', 'password' => '123456', 'password_confirmation' => '123456']);
        //checks if access is unauthorized
        $response->assertStatus(404);
    }


    /**
     * Test try updates a user without pass password.
     * Expects return a json response success
     * @return void
     */
    public function testTryUpdateWithoutPassword()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian@email.com','name' => 'Willian Rodrigues', 'password_confirmation' => '123456']);

        $response->assertJsonFragment([
            "message" => "Usuário atualizado."
        ]);
        $response->assertStatus(200);
    }

    /**
     * Test try updates a user without pass password confirmation.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdateWithoutPasswordConfirmation()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian@email.com', 'name' => 'Willian Rodrigues', 'password' => '123456']);

        $response->assertJsonFragment([
            "password" => ["Campos password e password_confirmation estão diferentes."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user without pass password minimum characters.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdateWithoutPasswordMinimumCaracters()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian@email.com', 'name' => 'Willian Rodrigues', 'password' => '123', 'password_confirmation' => '123']);

        $response->assertJsonFragment([
            "password" => ["Mínimo 6 caracteres."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user with password and password_confirmation not matching.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdatePasswordAndPasswordConfirmationNotMatch()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian@email.com', 'name' => 'Willian Rodrigues', 'password' => '123456', 'password_confirmation' => '123457']);

        $response->assertJsonFragment([
            "password" => ["Campos password e password_confirmation estão diferentes."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user with name exceeds maximum characters.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdateWithNameExceeds()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian@email.com', 'name' => 'Willian Cesar Alves dos Santos Gonzaga Rodrigues Junior', 'password' => '123456', 'password_confirmation' => '123456']);

        $response->assertJsonFragment([
            "name" => ["Máximo 50 caracteres."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user with email exceeds maximum characters.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdateWithEmailExceeds()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian_cesar_alves_dos_santos_gonzaga_rodrigues_junior@email.com', 'name' => 'Willian Rodrigues', 'password' => '123456', 'password_confirmation' => '123456']);

        $response->assertJsonFragment([
            "email" => ["Máximo 50 caracteres."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user with invalid email.
     * Expects return a json error validation
     * @return void
     */
    public function testTryUpdateWithInvalidEmail()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);

        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['email' => 'willian_email.com', 'name' => 'Willian Rodrigues', 'password' => '123456', 'password_confirmation' => '123456']);

        $response->assertJsonFragment([
            "email" => ["Email inválido."]
        ]);
        $response->assertStatus(422);
    }

    /**
     * Test try updates a user.
     * Expects return a json model of product
     * @return void
     */
    public function testUpdate()
    {
        //Create a ramdom user
        $user = factory(User::class)->create();
        //acting as first user created
        $this->actingAs($user);
        $response = $this->json('PUT', '/api/users/update/'.$user->id, ['name'=> 'Willian Rodrigues', 'email' => 'willian@email.com']);

        $response->assertJsonFragment([
            "message" => 'Usuário atualizado.',
            "name" => "Willian Rodrigues"
        ]);
        $response->assertStatus(200);
    }
}
