<?php

namespace Mwltr\Robo\Magento2\Task;

class SetupUpgradeTask extends AbstractTask
{
    protected $action = "setup:upgrade";

    protected $taskInfo = 'Setup Upgrade';

    public function keepGenerated()
    {
        $this->option('--keep-generated');

        return $this;
    }

}