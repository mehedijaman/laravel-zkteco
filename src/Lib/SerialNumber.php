<?php

namespace MehediJaman\LaravelZkteco\Lib;

use MehediJaman\LaravelZkteco\LaravelZkteco;

class SerialNumber
{
    /**
     * @return bool|mixed
     */
    public static function get(LaravelZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SerialNumber';

        return $self->_command($command, $command_string);
    }
}
