<?php

namespace AtDataGrid\DataGrid\Column\Decorator;

class Long2Ip extends AbstractDecorator
{
    /**
     * @param $value
     * @param $row
     * @return string
     */
    public function render($value, $row)
    {
        if ($value) {
            return long2ip($value);
        }
    }
}