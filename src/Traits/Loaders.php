<?php

namespace Baconfy\Ui\Traits;

trait Loaders
{
    /**
     * @param string $path
     * @return false|string
     */
    protected function getRootDirectory($path = '')
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..');

        return $root . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * @return false|string
     */
    protected function getViewsDirectory()
    {
        return $this->getRootDirectory('resources/views');
    }

    /**
     * @return false|string
     */
    protected function getConfigDirectory()
    {
        return $this->getRootDirectory('config/baconfy.php');
    }

    /**
     * @return false|string
     */
    protected function getTranslationsDirectory()
    {
        return $this->getRootDirectory('resources/lang');
    }
}