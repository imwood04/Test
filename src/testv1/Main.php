<?php

namespace testv1;

use pocketmine\server;
use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\item\Item;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger->Info("Testv1 Has Been Enabled!");
    }
  
  public function onDisable(){
    $this->getLogger->Info("Testv1 Has Been Disabled!");
    }
  
  public function onCommand(CommandSender sender, Command $cmd, string $label, array $args){
    if ($sender indtanceof Player){
         switch($cmd->getName()){
             case "test":
             $sender->addTitle("Hey Player this is a test");
             $item = Item::get(276,0,1);
             $inv = sender->getinventory();
             $item->setCustomName("Testv1's Item");
             $inv->addItem($item);
           }elese{
                $sender->sendMessage("Please Use This Command In Game Please!");
                return true;
           }
    }
  }
