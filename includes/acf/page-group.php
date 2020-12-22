<?php
namespace includes\acf;

use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Location;

register_extended_field_group([
    'title' => 'About',
    'fields' => [
        Image::make('Image'),
        Text::make('Title', 'heading')
        ->instructions('Add the text value')
        ->required(),
    ],
    'location' => [
        Location::if('post_type', 'page')
    ],
    

  
]);