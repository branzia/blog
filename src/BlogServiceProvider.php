<?php

namespace Branzia\Blog;
use Illuminate\Support\Facades\File;
use Branzia\Blueprint\BranziaServiceProvider;
use Branzia\Blueprint\Contracts\ProvidesFilamentDiscovery;
class BlogServiceProvider extends BranziaServiceProvider implements ProvidesFilamentDiscovery
{
    public function moduleName(): string
    {
        return 'Blog';
    }
    public function moduleRootPath():string{
        return dirname(__DIR__);
    }
    
    public function boot():void
    {
        parent::boot();
    }

    public function register(): void
    {
        parent::register();
    }
    public static function filamentDiscoveryPaths(): array
    {
        return [
            'resources' => [
                ['path' => __DIR__.'/Filament/Resources', 'namespace' => 'Branzia\\Blog\\Filament\\Resources'],
            ],
            'pages' => [
                ['path' => __DIR__.'/Filament/Pages', 'namespace' => 'Branzia\\Blog\\Filament\\Pages'],
            ],
            'clusters' => [
                ['path' => __DIR__.'/Filament/Clusters', 'namespace' => 'Branzia\\Blog\\Filament\\Clusters'],
            ],
            'widgets' => [
                ['path' => __DIR__.'/Filament/Widgets', 'namespace' => 'Branzia\\Blog\\Filament\\Widgets'],
            ],
        ];
    }
}

