<?php

namespace Branzia\Blog\Filament\Resources\BlogCategoryResource\Pages;

use Branzia\Blog\Filament\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogCategory extends CreateRecord
{
    protected static string $resource = BlogCategoryResource::class;
}
