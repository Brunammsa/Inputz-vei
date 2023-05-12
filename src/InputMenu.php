<?php

namespace Brunammsa\Inputzvei;

class InputMenu extends Input
{
    protected function feedBackMessage(): string
    {
        return 'Opção inexistente';
    }

    protected function validate(string $answer): bool
    {
        $options = [
            'Insert',
            'Update',
            'Remove',
            'List'
        ];

        return !(in_array($answer, $options) === false);
    }
}