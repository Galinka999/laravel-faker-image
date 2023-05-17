<?php

declare(strict_types=1);

namespace Galka\FakerImageGenerator;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageGenerator extends Base
{
    public function imageLoremFlickr(string $dir = '', int $width = 500, int $height = 500, string $category = ''): string
    {
        $filename = Str::substr(microtime(), 11, 11) . Str::random(6) . '.jpg';

        $dirname = $dir . '/' . $filename;

        Storage::put(
            $dirname,
            file_get_contents("https://loremflickr.com/$width/$height/$category")
        );

        return '/storage/' . $dirname;
    }

    public function imageRandomFromFixtures(string $dir, bool $fullname = false): string
    {
        if(!Storage::exists($dir)) {
            Storage::makeDirectory($dir);
        }

        $filename = $this->generator->file(
            base_path('tests/Fixtures/' . $dir),
            Storage::path($dir),
            $fullname
        );

        return '/storage/' . $dir . '/' . $filename;
    }
}
