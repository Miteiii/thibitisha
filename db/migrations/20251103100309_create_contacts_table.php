<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateContactsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('contacts');
        $table->addColumn('practitioner_id', 'integer', ['signed' => false])
              ->addColumn('type', 'string', ['limit' => 50]) // email, phone, whatsapp
              ->addColumn('value', 'string', ['limit' => 255])
              ->addColumn('is_primary', 'boolean', ['default' => false])
              ->addTimestamps()
              ->addForeignKey('practitioner_id', 'practitioners', 'id', ['delete' => 'CASCADE'])
              ->create();
    }
}

