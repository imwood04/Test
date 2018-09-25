<?php

namespace test;

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
  
  publick function onCommand(CommandSender sender, Command $cmd, string $label, array $args){
    switch($cmd->getName(){
      case "test":
      $sender->addTitle("Hey Player this is a test");
      $item = Item::get(276,0,1);
      
