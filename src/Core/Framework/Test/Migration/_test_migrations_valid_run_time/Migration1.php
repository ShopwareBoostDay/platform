<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Test\Migration\_test_migrations_valid_run_time;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1 extends MigrationStep
{
    public function update(Connection $connection): void
    {
        //nth
    }

    public function updateDestructive(Connection $connection): void
    {
        //nth
    }
}
