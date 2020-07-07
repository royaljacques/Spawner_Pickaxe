<?php

namespace royal;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\event\Listener;

use royal\Pioche;
use royal\Spawner;

class Main extends PluginBase implements Listener{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info( "§aPlugin Chargé avec succès !");
        ItemFactory::registerItem(new Pioche(), true );
        $this->getPluginManager()->registerEvents(new Spawner($this), $this);
    }
}

