<?php

namespace MudEnterprise;

function leftPad(string $input, int $pad_length, string $pad_string = " "): string
{
    return str_pad($input, $pad_length, $pad_string, STR_PAD_LEFT);
}
