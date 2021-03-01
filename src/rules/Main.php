<?php
namespace rules;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::GOLD . "[Rules]" .TEXTFORMAT::RED. " --> -->" .TEXTFORMAT::AQUA.  "The config has been updated");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "rules":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[Server Rules]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule8"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("use.rules")){
                    $sender->sendMessage("§c--------§e[§aServer §bRules§e]§c--------");
                    $sender->sendMessage("§b- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage("§b- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage("§b- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage("§b- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("rule8"));
                    return true;
                }
                break;
            }
        }
    }
?>
