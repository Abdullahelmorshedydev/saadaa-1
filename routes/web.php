<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// loginandregisteration-----------------------------------------------------------------------------
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login_post');
Route::post('/register', [AuthController::class, 'registrationPost'])->name('register_post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// endlogin----------------------------------------------------------------------------------------------



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
/////////////////Eventss/////////////////////////////////////////////////////////////////////////////============================================
Route::get('/anniversary_in', function () {
    return view('anniversaryindoor');
})->name('anniversaryindoor');

Route::get('/anniversary_out', function () {
    return view('anniversary');
})->name('anniversary');

Route::get('/babyshower_in', function () {
    return view('babyshowerindoor');
})->name('babyshowerindoor');

Route::get('/babyshower_out', function () {
    return view('babyshoweroutdoor');
})->name('babyshoweroutdoor');

Route::get('/birthday_in', function () {
    return view('birthdayindoor');
})->name('birthdayindoor');

Route::get('/birthday_out', function () {
    return view('birthdayoutdoor');
})->name('birthdayoutdoor');

Route::get('/conference', function () {
    return view('conference');
})->name('conference');

Route::get('/date', function () {
    return view('date');
})->name('date');

Route::get('/dishparty', function () {
    return view('dishparty');
})->name('dishparty');


Route::get('/engagment_in', function () {
    return view('engagmentindoor');
})->name('engagmentindoor');

Route::get('/engagment_out', function () {
    return view('engagmentoutdoor');
})->name('engagmentoutdoor');

Route::get('/funday', function () {
    return view('funday');
})->name('funday');

Route::get('/prom', function () {
    return view('prom');
})->name('prom');

Route::get('/wedding', function () {
    return view('wedding');
})->name('wedding');

/////////////////////////////////////////////////////EVENTS END///////////////////////////////////////////////////////////////////////////////////
// Facebook routes================================================================================================================================
Route::get('www.facebook.com/ezz.yahya.74/', function () {
    return redirect()->away('https://www.facebook.com/ezz.yahya.74/');
});
Route::get('www.facebook.com/hashem.mohamed2002', function () {
    return redirect()->away('https://www.facebook.com/hashem.mohamed2002');
});
Route::get('www.facebook.com/abdalrahman.ehab.52', function () {
    return redirect()->away('https://www.facebook.com/abdalrahman.ehab.52');
});
Route::get('www.facebook.com/sabrinahesham27', function () {
    return redirect()->away('https://www.facebook.com/sabrinahesham27');
});
Route::get('www.facebook.com/maaymahmoud69', function () {
    return redirect()->away('https://www.facebook.com/maaymahmoud69');
});

Route::get('www.facebook.com/yasminsaad.842799', function () {
    return redirect()->away('https://www.facebook.com/yasminsaad.842799');
});

// instagram routes===============================================================================================================================
Route::get('www.instagram.com/hashem7mohamed', function () {
    return redirect()->away('https://www.instagram.com/hashem7mohamed?igsh=ZXQ1bDB2YXRxZDdt&utm_source=qr');
});
Route::get('www.instagram.com/abdalrahman_678', function () {
    return redirect()->away('https://www.instagram.com/abdalrahman_678?igsh=cmV1eTVhM2s0bzJ4');
});
Route::get('www.instagram.com/sabrina_hisham75', function () {
    return redirect()->away('https://www.instagram.com/sabrina_hisham75?igsh=bmN1OXdxeHgwZ3Rj');
});
Route::get('www.instagram.com/ezzz_yahya', function () {
    return redirect()->away('https://www.instagram.com/ezzz_yahya?igsh=MTdnMXAzZzh2azUxaQ==');
});
Route::get('www.instagram.com/maaaymahmoud', function () {
    return redirect()->away('https://www.instagram.com/maaaymahmoud?igsh=YWVpdHV5c2piZ3Zl');
});
Route::get('www.instagram.com/yasminsaad13', function () {
    return redirect()->away('https://www.instagram.com/yasminsaad13?igsh=YjMwamg4ZjZnbmhs');
});


