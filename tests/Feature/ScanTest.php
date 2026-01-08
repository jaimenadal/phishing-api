<?php

namespace Tests\Feature;

use Tests\TestCase;

class ScanTest extends TestCase
{
    public function test_scan_endpoint_phishing()
    {
        $response = $this->postJson('/api/v1/scan', ['url' => 'http://fake.com']);
        $response->assertStatus(200)
                 ->assertJson([
                     'is_phishing' => true,
                 ]);
    }

    public function test_scan_endpoint_safe()
    {
        $response = $this->postJson('/api/v1/scan', ['url' => 'http://example.com']);
        $response->assertStatus(200)
                 ->assertJson([
                     'is_phishing' => false,
                 ]);
    }
}
