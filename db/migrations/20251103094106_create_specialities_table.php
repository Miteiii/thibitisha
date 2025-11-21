<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSpecialitiesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('specialities');
        $table->addColumn('name', 'string', ['limit' => 100])
              ->addIndex(['name'], ['unique' => true])
              ->addTimestamps()
              ->create();
    }
}
