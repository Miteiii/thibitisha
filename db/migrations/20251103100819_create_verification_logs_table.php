<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateVerificationLogsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('verification_logs');
        $table->addColumn('practitioner_id', 'integer', ['signed' => false])
              ->addColumn('ip_address', 'string', ['limit' => 45, 'null' => true])
              ->addColumn('user_agent', 'text', ['null' => true])
              ->addColumn('is_valid', 'boolean')
              ->addColumn('verified_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addForeignKey('practitioner_id', 'practitioners', 'id')
              ->create();
    }
}

