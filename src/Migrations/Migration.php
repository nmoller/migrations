<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 20/03/17
 * Time: 8:30 AM
 */

namespace Uqam\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {

    public $capsule;

    public $schema;

    //const DB_PATH = __DIR__.'/../../database/database.sqlite3';

    public function init() {
        $this->capsule = new Capsule();
        $this->capsule->addConnection([
          'driver' => 'sqlite',
          'database' => __DIR__.'/../../database/database.sqlite3',
          'prefix' => '',
        ], 'default');

        $this->capsule->bootEloquent();
        // Pour avoir accès à la méthode
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }

}