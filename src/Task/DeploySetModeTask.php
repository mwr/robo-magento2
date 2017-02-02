<?php
/**
 * @copyright Copyright (c) 2017 Matthias Walter
 *
 * @see LICENSE
 */

namespace Mwltr\Robo\Magento2\Task;

/**
 * DeploySetModeTask
 */
class DeploySetModeTask extends AbstractTask
{
    protected $action = "deploy:mode:set";

    protected $taskInfo = 'activate production mode';

    public function modeProduction()
    {
        $this->mode('production');

        return $this;
    }

    public function modeDefault()
    {
        $this->mode('default');

        return $this;
    }

    public function modeDeveloper()
    {
        $this->mode('developer');

        return $this;
    }

    public function mode($mode)
    {
        $this->arg($mode);

        return $this;
    }

    public function skipCompilation()
    {
        $this->option('skip-compilation');

        return $this;
    }
}