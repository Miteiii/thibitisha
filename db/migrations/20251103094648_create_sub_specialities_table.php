<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSubSpecialitiesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('sub_specialities');
        $table->addColumn('name', 'string', ['limit' => 150])
              ->addColumn('speciality_id', 'integer', ['signed' => false]) // Match specialities.id type
              ->addForeignKey('speciality_id', 'specialities', 'id', [
                  'delete' => 'CASCADE',
                  'update' => 'CASCADE'
              ])
              ->addTimestamps()
              ->create();
    }
}
