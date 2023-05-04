<?php

declare(strict_types=1);

namespace Yiisoft\Cache\Db\Tests\Driver\Mssql;

use Throwable;
use Yiisoft\Cache\Db\Tests\Common\AbstractDbSchemaManagerTest;
use Yiisoft\Cache\Db\Tests\Support\MssqlFactory;

/**
 * @group Mssql
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DbSchemaManagerTest extends AbstractDbSchemaManagerTest
{
    /**
     * @throws Throwable
     */
    protected function setUp(): void
    {
        // create connection dbms-specific
        $this->db = (new MssqlFactory())->createConnection();

        parent::setUp();
    }
}
