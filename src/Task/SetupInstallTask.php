<?php
/**
 * @copyright Copyright (c) 2017 Matthias Walter
 *
 * @see LICENSE
 */

namespace Mwltr\Robo\Magento2\Task;

/**
 * SetupInstallTask
 */
class SetupInstallTask extends AbstractTask
{
    const DB_HOST = 'db-host';
    const DB_USER = 'db-user';
    const DB_PASSWORD = 'db-password';
    const DB_NAME = 'db-name';
    const SESSION_SAVE = 'session-save';
    const BASE_URL = 'base-url';
    const BASE_URL_SECURE = 'base-url-secure';
    const USE_REWRITES = 'use-rewrites';
    const USE_SECURE = 'use-secure';
    const USE_SECURE_ADMIN = 'use-secure-admin';
    const ADMIN_USER = 'admin-user';
    const ADMIN_EMAIL = 'admin-email';
    const ADMIN_PASSWORD = 'admin-password';
    const ADMIN_FIRSTNAME = 'admin-firstname';
    const ADMIN_LASTNAME = 'admin-lastname';
    const BACKEND_FRONTNAME = 'backend-frontname';
    const CURRENCY = 'currency';
    const TIMEZONE = 'timezone';
    const LANGUAGE = 'language';
    const CLEANUP_DATABASE = 'cleanup-database';

    protected $action = "setup:install";

    protected $taskInfo = 'Setup Install';

    public function options(array $options, $separator = '')
    {
        foreach ($options as $key => $value) {
            if (empty($value)) {
                continue;
            }
            $option = "--$key=$value";
            $this->option($option, $separator);
        }
    }

    public function dbHost($value)
    {
        return $this->option(self::DB_HOST, $value);
    }

    public function dbUser($value)
    {
        return $this->option(self::DB_USER, $value);
    }

    public function dbPassword($value)
    {
        return $this->option(self::DB_PASSWORD, $value);
    }

    public function dbName($value)
    {
        return $this->option(self::DB_NAME, $value);
    }

    public function sessionSave($value)
    {
        return $this->option(self::SESSION_SAVE, $value);
    }

    public function baseUrl($value)
    {
        return $this->option(self::BASE_URL, $value);
    }

    public function baseUrlSecure($value)
    {
        return $this->option(self::BASE_URL_SECURE, $value);
    }

    public function useRewrites($value)
    {
        return $this->option(self::USE_REWRITES, $value);
    }

    public function useSecure($value)
    {
        return $this->option(self::USE_SECURE, $value);
    }

    public function useSecureAdmin($value)
    {
        return $this->option(self::USE_SECURE_ADMIN, $value);
    }

    public function adminUser($value)
    {
        return $this->option(self::ADMIN_USER, $value);
    }

    public function adminEmail($value)
    {
        return $this->option(self::ADMIN_EMAIL, $value);
    }

    public function adminPassword($value)
    {
        return $this->option(self::ADMIN_PASSWORD, $value);
    }

    public function adminFirstname($value)
    {
        return $this->option(self::ADMIN_FIRSTNAME, $value);
    }

    public function adminLastname($value)
    {
        return $this->option(self::ADMIN_LASTNAME, $value);
    }

    public function backendFrontname($value)
    {
        return $this->option(self::BACKEND_FRONTNAME, $value);
    }

    public function currency($value)
    {
        return $this->option(self::CURRENCY, $value);
    }

    public function timezone($value)
    {
        return $this->option(self::TIMEZONE, $value);
    }

    public function language($value)
    {
        return $this->option(self::LANGUAGE, $value);
    }

    public function cleanupDatabase()
    {
        return $this->option(self::CLEANUP_DATABASE);
    }

}
