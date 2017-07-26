<?php

namespace easy;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\text\TextFormat as Color;

 class Main extends PluginBase{
 
  public function onEnable(){
   $this->getServer()->getLogger()->info(" EasyCommands Plugin Enabled");
    }
    
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($sender->isOp()){
     switch($cmd->getName()({
     case 'gm1':
      $sender->setGamemode(1);
      $sender->sendMessage(Color::GREEN."Done you now Gamemode 1");
       } else {
       $sender->sendMessage(Color::RED."YOU NOT OP");
        break;
        case 'hl':
        $sender->setHealth(20);
        } else {
        $sender->sendMessage(Color::RED."YOU NOT OP");
     }
    }
   }
