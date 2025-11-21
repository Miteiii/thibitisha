<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateInstitutionsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('institutions');
        $table->addColumn('name', 'string', ['limit' => 255])
              ->addIndex(['name'], ['unique' => true])
              ->addTimestamps()
              ->create();
    }
}
