<?php

namespace Casebox\CoreBundle\Service\DataModel;

class Crons extends Base
{
    /**
     * database table name
     * @var string
     */
    protected static $tableName = 'crons';

    protected static $tableFields = [
        'id' => 'int',
        'cron_id' => 'varchar',
        'cron_file' => 'varchar',
        'last_start_time' => 'datetime',
        'last_end_time' => 'datetime',
        'execution_info' => 'text',
        'last_action' => 'datetime',
    ];
}
