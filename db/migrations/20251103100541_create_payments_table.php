<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePaymentsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('payments');
        $table->addColumn('license_id', 'integer', ['signed' => false])
              ->addColumn('amount', 'decimal', ['precision' => 10, 'scale' => 2])
              ->addColumn('payment_date', 'date')
              ->addColumn('method', 'string', ['limit' => 50]) // mpesa, card, etc.
              ->addColumn('status', 'enum', ['values' => ['pending', 'confirmed'], 'default' => 'pending'])
              ->addTimestamps()
              ->addForeignKey('license_id', 'licenses', 'id', ['delete' => 'CASCADE'])
              ->create();
    }
}
