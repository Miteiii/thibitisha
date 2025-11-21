<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateDegreesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('degrees');
        $table->addColumn('name', 'string', ['limit' => 100])
              ->addColumn('description', 'text', ['null' => true])
              ->addIndex(['name'], ['unique' => true])
              ->addTimestamps()
              ->create();
    }
}
