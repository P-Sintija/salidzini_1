<?php

namespace App\Views;

use App;
use Illuminate\Contracts\View\View;
use Route;

final class AdminLayoutViewComposer
{
    public function compose(View $view): void
    {
        $view->with([
            'jsControllerName' => $this->getJsControllerName(),
        ]);
    }

    protected function getCurrentActionName(): string
    {
        return Route::getCurrentRoute() ?
            Route::getCurrentRoute()->getActionName() : (string)null;
    }

    protected function getJsControllerName(): string
    {
        if (($currentActionName = $this->getCurrentActionName())) {
            $parts = explode("\\", $this->getCurrentActionName());
            return end($parts);
        }
        return (string)null;
    }
}
