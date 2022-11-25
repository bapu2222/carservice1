<?php

use App\Http\Controllers\Allservices;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, "loginView"])->name('login');
Route::get('/register', [AuthController::class, "registerView"]);
Route::post('/do-login', [AuthController::class, "doLogin"])->name('do-login');
Route::post('/do-register', [AuthController::class, "doRegister"])->name('do-register');
Route::get('/dashboard', [AuthController::class, "dashboard"]);
Route::get('/logout', [AuthController::class, "logout"])->name('auth.logout');


Route::get('/forgot', function () {
    return view('forgot-password');
});

Route::get('/', function () {
    return view('user/index');
})->name('user-site');

Route::get('/contact', function () {
    return view('user/contact');
});

Route::get('/product', function () {
    return view('user/product');
});

Route::get('/about', function () {
    return view('user/about');
});

Route::get('/uservice', function () {
    return view('user/service');
});

Route::get('/why', function () {
    return view('user/why');
});


Route::get('/periodic/{type}', [Allservices::class, "index"])->name('all-services-periodic-index');

//user/periodic_service
//Route::get('/addcategory', function () {
//    return view('admin/add_category');
//});
//
//Route::get('/service', function () {
//    return view('admin/Services/manage_service');
//});
//
//Route::get('/addservice', function () {
//    return view('admin/Services/add_service');
//});
//
//Route::get('/offers', function () {
//    return view('admin/Offers/offers');
//});

Route::resource('book', BookController::class);
Route::post('get-model', [BookController::class, "getModel"]);

Route::group(['middleware' => 'is_admin'], function () {
    Route::resource('categories', CategoriesController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('offers', OffersController::class);
    Route::resource('model', CarModelController::class);
    Route::resource('brand', BrandsController::class);
    Route::resource('dashboard', DashboardController::class);

    Route::get('/appointment', [AppointmentController::class, "index"])->name('appointment.all');
    Route::get('/accept-appointment', [AppointmentController::class, "acceptAppointment"])->name('appointment.accept');
    Route::get('/completed-appointment', [AppointmentController::class, "completedAppointment"])->name('appointment.completed');
    Route::get('/reject-appointment', [AppointmentController::class, "rejectedAppointment"])->name('appointment.reject');
    Route::post('/change-appointment-status', [AppointmentController::class, "changeStatus"]);
    Route::post('/appointment-note', [AppointmentController::class, "appointmentNote"])->name('appointment.note');

    Route::get('/appointment-id-view/{id}', [AppointmentController::class, "appointmentIdView"])->name('appointment.id.view');

    Route::get('/header', function () {
        return view('admin/include/header');
    });
    Route::get('/amc', function () {
        return view('admin/amc_membership');
    });
    Route::get('/offers', function () {
        return view('admin/offers');
    });
    Route::get('/vehical', function () {
        return view('admin/list_vehical');
    });
    Route::get('/invoice', function () {
        return view('admin/Invoice');
    });

    Route::get('/Regular_service', function () {
        return view('admin/Regular_service');
    });
    Route::get('/Emergency_service', function () {
        return view('admin/Emergency_service');
    });
    Route::get('/regularclient', function () {
        return view('admin/client');
    });

    Route::get('/allappointment', function () {
        return view('admin/all_appointment');
    });
    Route::get('/newappointment', function () {
        return view('admin/new_appointment');
    });
    Route::get('/acceptappointment', function () {
        return view('admin/accepted_appointment');
    });
    Route::get('/rejectappointment', function () {
        return view('admin/rejected_appointment');
    });
    Route::get('/geninvoice', function () {
        return view('admin/gen_invoice');
    });

    Route::get('/assign', function () {
        return view('admin/assign_service');
    });
    Route::get('/view', function () {
        return view('admin/view_appointment');
    });

    Route::get('/adm', function () {
        return view('admin/include/slider');
    });

    Route::get('/adm', function () {
        return view('admin/include/header');
    });
});

// Admin side


