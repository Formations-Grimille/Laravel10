<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function generateAvatar(string $firstname, string $lastname, int $size) {
        if ($size > 256) $size = 256;
        if ($size < 24) $size = 24;
        
        return "<img src='https://ui-avatars.com/api/?name=$firstname+$lastname&size=$size'/>";
    }
}
