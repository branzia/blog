<?php

namespace Branzia\Blog\Filament\Resources\PostResource\Pages;


use Branzia\Blog\Filament\Resources\PostResource;
use Branzia\Blog\Post;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    public function getTitle(): string | Htmlable
    {
        /** @var Post */
        $record = $this->getRecord();

        return $record->title;
    }

    protected function getActions(): array
    {
        return [];
    }
}
