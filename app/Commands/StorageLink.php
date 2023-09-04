<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class StorageLink extends BaseCommand {
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CodeIgniter';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'storage:link';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params) {
        $target = __DIR__ . "/../../writable/uploads/";
        $destination = __DIR__ . "/../../public/uploads";
        $result = symlink($target, $destination);
        if ($result) {
            echo ("Symlink has been created! \n");
        } else {
            echo ("Symlink cannot be created! \n");
        }
    }
}
