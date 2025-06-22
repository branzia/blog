<?php

namespace Branzia\Blog\Filament\Resources\AuthorResource\Pages;

use Branzia\Blog\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthor extends CreateRecord
{
    protected static string $resource = AuthorResource::class;
}
