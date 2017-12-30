<?php

namespace restartme\event\plugin;

use pocketmine\event\plugin\PluginEvent;
use restartme\RestartMe;

class ServerRestartEvent extends PluginEvent{
    /** @var \pocketmine\event\HandlerList */
    public static $handlerList = null;
    /** @var int */
    private $mode;
    /**
     * @param RestartMe $plugin
     */
    public function __construct(RestartMe $plugin, $mode){
        parent::__construct($plugin);
        $this->mode = (int) $mode;
    }
    /**
     * @return int
     */
    public function getMode(): int{
        return $this->mode;
    }
    /**
     * @param int $mode
     */
    public function setMode(int $mode){
        $this->mode = (int) $mode;
    }
}
