<?php

namespace Mwltr\Robo\Magento2\Task;

/**
 * SetupStaticContentDeployTask
 */
class SetupStaticContentDeployTask extends AbstractTask
{
    protected $action = "setup:static-content:deploy";

    protected $taskInfo = 'Deploy Static Content';

    public function noJavascript()
    {
        return $this->option('--no-javascript');
    }

    public function noCss()
    {
        return $this->option('--no-css');
    }

    public function noLess()
    {
        return $this->option('--no-less');
    }

    public function noImages()
    {
        return $this->option('--no-images');
    }

    public function noFonts()
    {
        return $this->option('--no-fonts');
    }

    public function noHtml()
    {
        return $this->option('--no-html');
    }

    public function noMisc()
    {
        return $this->option('--no-misc');
    }

    public function noHtmlMinify()
    {
        return $this->option('--no-html-minify');
    }

    public function addTheme($theme)
    {
        return $this->option("--theme=$theme");
    }

    public function excludeTheme($theme)
    {
        return $this->option("--exclude-theme", $theme);
    }

    public function addLanguage($language)
    {
        return $this->option("--language", $language);
    }

    public function addLanguages(array $languages)
    {
        foreach ($languages as $language) {
            $this->addLanguage($language);
        }

        return $this;
    }

    public function excludeLanguage($language)
    {
        return $this->option("--exclude-language", $language);
    }

    public function addArea($area)
    {
        return $this->option("--area", $area);
    }

    public function excludeArea($area)
    {
        return $this->option("--exclude-area", $area);
    }

    public function jobs($jobs)
    {
        return $this->option("--jobs", $jobs);
    }

}