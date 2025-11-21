<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateDataSyncLogsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('data_sync_logs');
        $table->addColumn('records_processed', 'integer')
              ->addColumn('source_url', 'string', ['limit' => 255])
              ->addColumn('synced_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('errors', 'text', ['null' => true])
              ->create();
    }
}
