<?php

namespace royal;


use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;


class Spawner {

    public function onBreak(BlockBreakEvent $event) {
        $item_in_hand = $event->getPlayer()->getInventory()->getItemInHand();
        $block = $event->getBlock();
        $item = $event->getItem();
        if ($item_in_hand == 369) {
            if($block->getId() == Block::MONSTER_SPAWNER){
                $event->setDrops([Item::get(52, 0, 1)]);
            }

        }
    }
}
