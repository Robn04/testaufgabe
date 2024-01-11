<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
    ___.           __________      ___.   .__        
    \_ |__ ___.__. \______   \ ____\_ |__ |__| ____  
     | __ <   |  |  |       _//  _ \| __ \|  |/    \ 
     | \_\ \___  |  |    |   (  <_> ) \_\ \  |   |  \
     |___  / ____|  |____|_  /\____/|___  /__|___|  /
         \/\/              \/           \/        \/ 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
