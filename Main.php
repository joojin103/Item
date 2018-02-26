<?php

namespace hapu\Item;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use onebone\economyapi\EconomyAPI;
use pocketmine\item\Item;
use pocketmine\inventory\Inventory;


class Main extends PluginBase
implements Listener{


public function onEnable(){
       $this->getServer()->getLogger()->info("§d하푸의 플러그인.");

    }
   

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool{
      if ($command == "명상") {
         if (! isset ( $args [0] )) {
            $sender->sendMessage ( "§l§a[명령어상점]§l§b/명상 판매 [금,철,다이아,에메랄드,청금석,레드스톤]" );
            return true;
         }
         switch ($args [0]) {
            case "판매" :
               if (! isset ( $args [0] )) {
                  $sender->sendMessage ( "§l§a[명령어상점]§l§b/명상 판매 [금,철,다이아,에메랄드,청금석,레드스톤]" );
                  return true;
               }
             switch ($args [1]) {
                  case "금" :
              if(!$sender->getInventory()->contains(Item::get(266,0,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
}
         $sender->getInventory()->removeItem(Item::get(266,0,32));
       EconomyAPI::getInstance()->addmoney($sender,19200);
   	$sender->sendMessage("§l§a[명령어상점]§l§b금을(를) 32개 판매하셨습니다.");
   	return true;
   	
                  case "철" :
              if(!$sender->getInventory()->contains(Item::get(265,0,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
}
         $sender->getInventory()->removeItem(Item::get(265,0,32));
       EconomyAPI::getInstance()->addmoney($sender,19200);
   	$sender->sendMessage("§l§a[명령어상점]§l§b철을(를) 32개 판매하셨습니다.");
   	return true;
   	
                case "다이아" :
              if(!$sender->getInventory()->contains(Item::get(264,0,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
}
         $sender->getInventory()->removeItem(Item::get(264,0,32));
       EconomyAPI::getInstance()->addmoney($sender,28800);
   	$sender->sendMessage("§l§a[명령어상점]§l§b다이아을(를) 32개 판매하셨습니다.");
   	return true;
   	
               case "에메랄드" :
             if(!$sender->getInventory()->contains(Item::get(388,0,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
}
         $sender->getInventory()->removeItem(Item::get(388,0,32));
       EconomyAPI::getInstance()->addmoney($sender,38400);
   	$sender->sendMessage("§l§a[명령어상점]§l§b에메랄드을(를) 32개 판매하셨습니다.");
   	return true;
   	
			   case "청금석" :
			 if(!$sender->getInventory()->contains(Item::get(351,4,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
      }
         $sender->getInventory()->removeItem(Item::get(351,4,32));
       EconomyAPI::getInstance()->addmoney($sender,3200);
   	$sender->sendMessage("§l§a[명령어상점]§l§b청금석을(를) 32개 판매하셨습니다.");
   	return true;

             case "레드스톤" :
            if(!$sender->getInventory()->contains(Item::get(331,0,32)) ){
			$sender->sendMessage("§l§a[명령어상점]§l§b판매할 아이템이 모자랍니다.");
			return true;
}
         $sender->getInventory()->removeItem(Item::get(331,0,32));
       EconomyAPI::getInstance()->addmoney($sender,3840);
   	$sender->sendMessage("§l§a[명령어상점]§l§b레드스톤을(를) 32개 판매하셨습니다.");
   	return true;
}
 }
 }
 }
 }
 ?>