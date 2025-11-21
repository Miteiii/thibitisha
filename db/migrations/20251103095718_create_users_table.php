<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['limit' => 255])
              ->addColumn('email', 'string', ['limit' => 255])
              ->addColumn('email_verified_at', 'timestamp', ['null' => true])
              ->addColumn('password', 'string', ['limit' => 255])
              ->addColumn('role_id', 'integer', ['signed' => false])
              ->addColumn('remember_token', 'string', ['limit' => 100, 'null' => true])
              ->addTimestamps()
              ->addIndex(['email'], ['unique' => true])
              ->addForeignKey('role_id', 'roles', 'id', [
                  'delete' => 'RESTRICT',
                  'update' => 'CASCADE'
              ])
              ->create();
    }
}
