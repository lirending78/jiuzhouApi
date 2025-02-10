<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
        $this->app->make(\Illuminate\Contracts\Console\Kernel::class)->call('route:cache');
        // 显式设置环境变量
        putenv('APP_ENV=testing');
    }
}
