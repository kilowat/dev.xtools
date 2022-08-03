<?php
namespace Dev\Xtools\Core;

use Bitrix\Main\Engine\Controller;

class BaseController extends Controller
{
    /**
     * Returns default pre-filters for action.
     * @return array
     */
    protected function getDefaultPreFilters(): array
    {
        return array();
    }
}