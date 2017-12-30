<?php

namespace restartme\event\plugin;

use pocketmine\event\plugin\PluginEvent;
use restartme\RestartMe;

class PauseTimerEvent extends PluginEvent{
    /** @var \pocketmine\event\HandlerList */
    public static $handlerList = null;
    /** @var bool */
    private $value;
    /**
     * @param RestartMe $plugin
     * @param bool $value
     */
    public function __construct(RestartMe $plugin, bool $value){
        parent::__construct($plugin);
        $this->value = (bool) $value;
    }
    /**
     * @return bool
     */
    public function getValue(): bool{
        return $this->value;
    }
    /**
     * @param bool $value
     */
    public function setValue(bool $value){
        $this->value = (bool) $value;
    }
}
