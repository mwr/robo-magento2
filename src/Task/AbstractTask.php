<?php

namespace Mwltr\Robo\Magento2\Task;

use Robo\Common\ExecOneCommand;
use Robo\Task\BaseTask;

/**
 * BaseTask
 */
abstract class AbstractTask extends BaseTask
{
    use ExecOneCommand;

    protected $taskInfo = '';

    protected $command;

    protected $action = null;

    protected $ansi = null;

    public function __construct($magentoBin = 'bin/magento')
    {
        $this->command = "php $magentoBin";
    }

    /**
     * {@inheritdoc}
     */
    public function getCommand()
    {
        if (!isset($this->ansi) && $this->getConfig()->isDecorated()) {
            $this->ansi();
        }
        $this->option($this->ansi);

        return "{$this->command} {$this->action}{$this->arguments}";
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $command = $this->getCommand();
        
        $this->printTaskInfo("$this->taskInfo : {command}", ['command' => $command]);

        return $this->executeCommand($command);
    }

    /**
     * adds `ansi` option to composer
     *
     * @return $this
     */
    public function ansi()
    {
        $this->ansi = '--ansi';

        return $this;
    }

}