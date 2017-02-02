<?php
/**
 * @copyright Copyright (c) 2017 Matthias Walter
 *
 * @see LICENSE
 */

namespace Mwltr\Robo\Magento2\Task;

/**
 * SetupUpgradeTask
 */
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