<?php
namespace Chitaric\Lenvendo\App\Commands;

use Chitaric\Lenvendo\ConsoleCommands\Commands\Command;
use Chitaric\Lenvendo\ConsoleCommands\CommandManager;

/**
 * Output all registered commands
 */
class OutputInputDataCommand extends Command
{
    protected const NAME        = "output:input-data";
    protected const DESCRIPTION = "Output parsed arguments";

    /**
     * Execute command
     *
     * @return void
     */
    public function execute() {
        $arguments = $this->input->getArguments();
        $parameters = $this->input->getParameters();

        $this->output->write([
            "Called command: ", $this->getName(), "\n",
            "\nArguments:\n",
        ]);

        foreach ($arguments as $argument) {
            $this->output->write([
                "   -  ", $argument, "\n"
            ]);
        }

        $this->output->write([
            "\nOptions:\n",
        ]);

        foreach ($parameters as $key => $values) {
            $this->output->write([
                "   -  ", $key, "\n"
            ]);

            foreach ($values as $value) {
                $this->output->write([
                    "      -  ", $value, "\n"
                ]);
            }
        }
    }
}
