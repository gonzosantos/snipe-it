<?php

namespace Tests\Feature\Users\Ui;

use App\Models\Company;
use App\Models\User;
use Tests\TestCase;

class ViewUserTest extends TestCase
{
    public function testPermissionsForUserDetailPage()
    {
        $this->settings->enableMultipleFullCompanySupport();

        [$companyA, $companyB] = Company::factory()->count(2)->create();

        $superuser = User::factory()->superuser()->create();
        $user = User::factory()->for($companyB)->create();

        $this->actingAs(User::factory()->editUsers()->for($companyA)->create())
            ->get(route('users.show', $user))
            ->assertStatus(302);

        $this->actingAs($superuser)
            ->get(route('users.show', $user))
            ->assertOk()
            ->assertStatus(200);
    }
}
