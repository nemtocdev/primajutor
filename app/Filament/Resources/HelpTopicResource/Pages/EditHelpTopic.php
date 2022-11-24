<?php

namespace App\Filament\Resources\HelpTopicResource\Pages;

use App\Filament\Resources\HelpTopicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHelpTopic extends EditRecord
{
    protected static string $resource = HelpTopicResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
