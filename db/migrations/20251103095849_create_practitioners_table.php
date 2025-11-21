<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePractitionersTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('practitioners');
        $table->addColumn('registration_number', 'string', ['limit' => 50])
              ->addColumn('full_name', 'string', ['limit' => 255])
              ->addColumn('profile_photo_url', 'string', ['limit' => 255, 'null' => true])
              ->addColumn('status_id', 'integer', ['signed' => false])
              ->addColumn('speciality_id', 'integer', ['signed' => false])
              ->addColumn('sub_speciality_id', 'integer', ['signed' => false, 'null' => true])
              ->addColumn('date_of_registration', 'date', ['null' => true])
              ->addColumn('deleted_at', 'timestamp', ['null' => true]) // From your changes.md
              ->addTimestamps()
              ->addIndex(['registration_number'], ['unique' => true])
              ->addForeignKey('status_id', 'statuses', 'id')
              ->addForeignKey('speciality_id', 'specialities', 'id')
              ->addForeignKey('sub_speciality_id', 'sub_specialities', 'id', ['delete' => 'SET_NULL'])
              ->create();
    }
}
