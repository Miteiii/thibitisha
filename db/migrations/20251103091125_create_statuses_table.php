<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateStatusesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('statuses');
        $table->addColumn('name', 'string', ['limit' => 50])
              ->addColumn('description', 'text', ['null' => true])
              ->addIndex(['name'], ['unique' => true])
              ->addTimestamps()
              ->create();
    }
}
