<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }



    protected function afterSave(): void
    {
        // Cek apakah user yang sedang di edit adalah user yang sedang login
        // if (Auth::id() === $this->record->id) {
        //     // Logout
        //     Auth::logout();
        // }
    }
}
