<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class Login extends BaseLogin
{
    protected function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormAction(),
        ];
    }

    protected function hasFullWidthFormActions(): bool
    {
        return true;
    }

    public function getSubheading(): string|Htmlable|null
    {
        return new HtmlString('
            <div class="mt-4 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-200 dark:border-blue-800">
                <p class="text-sm font-semibold text-blue-800 dark:text-blue-200 mb-2">Data Dummy untuk Testing:</p>
                <p class="text-sm text-blue-700 dark:text-blue-300"><strong>Username:</strong> admin@admin.com</p>
                <p class="text-sm text-blue-700 dark:text-blue-300"><strong>Password:</strong> pass@123</p>
            </div>
        ');
    }
}
