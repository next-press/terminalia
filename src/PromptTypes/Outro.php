<?php

namespace Terminalia\PromptTypes;

use Symfony\Component\Console\Style\OutputStyle;
use Terminalia\Enums\BlockSymbols;
use Terminalia\Helpers\WritesOutput;

class Outro
{
    use WritesOutput;

    protected bool $answer;

    public function __construct(
        protected OutputStyle $output,
        protected string $text,
    ) {
        $this->registerStyles();
    }

    public function display(): void
    {
        $this->writeInactiveBlock('');
        $this->writeInactiveBlock($this->text, BlockSymbols::END);
        $this->output->newLine();
    }
}
