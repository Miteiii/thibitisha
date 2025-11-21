<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateLicensesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('licenses');
        $table->addColumn('practitioner_id', 'integer', ['signed' => false])
              ->addColumn('license_number', 'string', ['limit' => 100])
              ->addColumn('issue_date', 'date')
              ->addColumn('expiry_date', 'date')
              ->addColumn('expires_at', 'timestamp', ['null' => true]) // From your changes.md
              ->addColumn('status', 'enum', ['values' => ['active', 'suspended', 'expired'], 'default' => 'active'])
              ->addTimestamps()
              ->addIndex(['license_number'], ['unique' => true])
              ->addForeignKey('practitioner_id', 'practitioners', 'id', ['delete' => 'CASCADE'])
              ->create();
    }
}
