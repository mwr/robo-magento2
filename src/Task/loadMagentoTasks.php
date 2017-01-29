<?php
namespace Mwltr\Robo\Magento2\Task;

trait loadMagentoTasks
{
    /**
     * @return DeploySetModeTask
     */
    protected function taskMagentoDeploySetModeTask()
    {
        return $this->task(DeploySetModeTask::class);
    }

    /**
     * @return SetupDiCompileTask
     */
    protected function taskMagentoSetupDiCompileTask()
    {
        return $this->task(SetupDiCompileTask::class);
    }

    /**
     * @return SetupStaticContentDeployTask
     */
    protected function taskMagentoSetupStaticContentDeployTask()
    {
        return $this->task(SetupStaticContentDeployTask::class);
    }

    /**
     * @return SetupInstallTask
     */
    protected function taskMagentoSetupInstallTask()
    {
        return $this->task(SetupInstallTask::class);
    }

    /**
     * @return SetupUpgradeTask
     */
    protected function taskMagentoSetupUpgradeTask()
    {
        return $this->task(SetupUpgradeTask::class);
    }
}
