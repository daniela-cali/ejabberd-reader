<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;

class AddEjabberdNickToUsers extends Migration
{
    /**
     * Copiata da https://shield.codeigniter.com/latest/customization/adding_attributes_to_users/
     * @var string[]
     */
    private array $tables;

    public function __construct(?Forge $forge = null)
    {
        parent::__construct($forge);

        /** @var \Config\Auth $authConfig */
        $authConfig   = config('Auth');
        $this->tables = $authConfig->tables;
    }

    public function up()
    {
        $fields = [
            'ejabberd_nick' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true],
        ];
        $this->forge->addColumn($this->tables['users'], $fields);
    }

    public function down()
    {
        $fields = [
            'ejabberd_nick',
        ];
        $this->forge->dropColumn($this->tables['users'], $fields);
    }
}

