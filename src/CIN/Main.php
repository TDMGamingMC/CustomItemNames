<?php
namespace CIN;

use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getLogger()->info(TextFormat::BLUE."[CustomItemNames]Plugin Enabled!");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
		if(!file_exists($this->getDataFolder() . "config.yml")) {
            @mkdir($this->getDataFolder());
             file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml"));
        }
}

public function PlayerItemHeld(PlayerItemHeldEvent $ev){
        $item = $ev->getItem();
        $player = $ev->getPlayer();
        if($item instanceof Item){
            switch($item->getId()){
                case 364:
                    $player->sendPopUp("{$this->getConfig()->get("Steak")}");
                break;
            }
        }
        
        if($item instanceof Item){
            switch($item->getId()){
                case 276:
                    $player->sendPopUp("{$this->getConfig()->get("Diamond_Sword")}");
                break;
            }
        }
    }
    if($item instanceof Item){
            switch($item->getId()){
                case 260:
                    $player->sendPopUp("{$this->getConfig()->get("Apple")}");
                break;
            }
        }
    }
    }
