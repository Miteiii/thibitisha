<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateQualificationsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('qualifications');
        $table->addColumn('practitioner_id', 'integer', ['signed' => false])
              ->addColumn('degree_id', 'integer', ['signed' => false])
              ->addColumn('institution_id', 'integer', ['signed' => false])
              ->addColumn('specialization', 'string', ['limit' => 150, 'null' => true])
              ->addColumn('year_awarded', 'integer', ['limit' => 4, 'null' => true])
              ->addColumn('notes', 'text', ['null' => true])
              ->addTimestamps()
              ->addForeignKey('practitioner_id', 'practitioners', 'id', ['delete' => 'CASCADE'])
              ->addForeignKey('degree_id', 'degrees', 'id')
              ->addForeignKey('institution_id', 'institutions', 'id')
              ->create();
    }
}

