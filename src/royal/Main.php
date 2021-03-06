<?php

namespace royal;

use Core\API\FormAPI\SimpleForm;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\item\ItemFactory;
use pocketmine\event\Listener;

use onebone\EconomieAPI;
use pocketmine\utils\Config;
use royal\commandes\Sppioche;


class Main extends PluginBase implements Listener{
    private static $instance;

    public function onEnable()
    {
        self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("Plugin Spawner_Pickaxe load ");
        $this->getServer()->getLogger()->info( "§aPlugin Chargé avec succès !");
        ItemFactory::registerItem(new Pioche($this));
        $this->getServer()->getCommandMap()->register("commandes", new Sppioche("piocheui", $this));
        $this->getServer()->getPluginManager()->registerEvents(new Spawner($this), $this);
        $config = new Config($this->getDataFolder()."Config.yml", Config::YAML, array(
            "Price_pickaxe" => 100000,
            "titre" => "spawnerpickaxe",
            "ContentUI" => "Salut , {joueur} tu as actuellement {money} de money ",
            "name_pioche" => "pioche en topaze",
            "Item" => 244,
            "phrase" => " tu as cassé un spawner mais tu n'as pas pus le récupéré , domage ",
            "Durabilitie" => 1000,
        ));
    }
    public static function getInstance(){
        return self::$instance;
    }

}


