<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::where('name', 'Brazil')->get()->first();

        echo $country->name;

        $location = $country->location;
        echo "<hr>{$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }
}
