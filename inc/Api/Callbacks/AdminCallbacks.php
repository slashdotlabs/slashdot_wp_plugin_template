<?php


namespace SlashStarter\Api\Callbacks;

use SlashStarter\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function confSettings()
    {

        return require_once("$this->plugin_path/templates/settings.php");
    }
}
