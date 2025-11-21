<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateRolesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('roles');
        $table->addColumn('name', 'string', ['limit' => 50])
              ->addColumn('description', 'text', ['null' => true])
              ->addIndex(['name'], ['unique' => true])
              ->addTimestamps()
              ->create();
    }
}
