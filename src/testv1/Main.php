<?php

namespace test;

use pocketmine\server;
use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger->Info("Testv1 Has Been Enabled!");
    }
  
  public function onDisable(){
    $this->getLogger->Info("Testv1 Has Been Disabled!");
    }
  
  publick function onCommand(CommandSender $command, 
