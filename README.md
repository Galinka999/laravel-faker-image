## The package for Laravel complements the fake image generation methods.
### To generate images, you can use the LoremFlickr service.

#### Installation
- composer require galka/laravel-faker-image


### Publish
- php artisan vendor:publish --provider='Galka\FakerImageGenerator\Providers\FakerImageProvider'


### Factory usage

- will generate a 600 * 600 image in the storage/images directory with an image of a dog: <br>

$this->faker->imageLoremFlickr('images', 600, 600, 'dog')

- generate a random image from the test/Fixtures folder

$this->faker->imageRandomFromFixtures('images/products', false),
