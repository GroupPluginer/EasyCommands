<?php

namespace easy;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;

 class Main extends PluginBase{
 
  public function onEnable(){
   $this->getServer()->getLogger()->info(" EasyCommands Plugin Enabled");
    }
    
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch($cmd->getName()){
     case 'gm1':
      if($sender->isOp()){
      $sender->setGamemode(1);
      $sender->sendMessage(Color::GREEN."Done you now Gamemode 1");
       }else{
       $sender->sendMessage(Color::RED."YOU NOT OP");
        }
       break;
      case 'hl':
        if($sender->isOp()){
        $sender->setHealth(20);
        $sender->sendMessage(Color::GREEN."Done Now Your Health Full");
        }else{
        $sender->sendMessage(Color::RED."YOU NOT OP");
        }
       break;
      case 'f':
       if($sender->isOp()){
        if($sender->getAllowFlight() == true){
         $sender->setAllowFlight(false);
        }else{
         $sender->setAllowFlight(true);
        $sender->sendMessage(Color::GREEN."Done Now You Can Fly");
       }else{
        $sender->sendMessage(Color::RED."YOU NOT OP");
     }
    }
   }
  }
