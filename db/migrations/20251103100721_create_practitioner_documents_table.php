<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePractitionerDocumentsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('practitioner_documents');
        $table->addColumn('practitioner_id', 'integer', ['signed' => false])
              ->addColumn('document_type', 'string', ['limit' => 50]) // degree, certificate, id, license
              ->addColumn('file_path', 'string', ['limit' => 255])
              ->addColumn('uploaded_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addTimestamps()
              ->addForeignKey('practitioner_id', 'practitioners', 'id', ['delete' => 'CASCADE'])
              ->create();
    }
}
