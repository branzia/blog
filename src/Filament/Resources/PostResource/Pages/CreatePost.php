<?php

namespace Branzia\Blog\Filament\Resources\PostResource\Pages;

use Branzia\Blog\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
