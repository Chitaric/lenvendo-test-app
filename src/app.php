<?php
include __DIR__ . '/../vendor/autoload.php';

use \Chitaric\Lenvendo\ConsoleCommands\CommandManager;
use \Chitaric\Lenvendo\App\Commands\OutputInputDataCommand;

CommandManager::registerCommand(OutputInputDataCommand::class);
CommandManager::execute();
