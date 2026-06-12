    <?php

    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\ProductItemController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/founder_message', [HomeController::class, 'founder_message'])->name('founder_message');
    Route::get('/capabilities', [HomeController::class, 'capabilities'])->name('capabilities');
    Route::get('/air', [HomeController::class, 'capabilities_air'])->name('capability.air');
    Route::get('/land', [HomeController::class, 'capabilities_land'])->name('capability.land');
    Route::get('/sea', [HomeController::class, 'capabilities_sea'])->name('capability.sea');
    Route::get('/weapon', [HomeController::class, 'capabilities_weapon'])->name('capability.weapons');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::post('/achievements', [HomeController::class, 'achievement_store'])->name('achievements.store');
    Route::put('/achievements/{achievement}', [HomeController::class, 'achievement_update'])->name('achievements.update');
    Route::delete('/achievements/{achievement}', [HomeController::class, 'achievement_destroy'])->name('achievements.destroy');
    Route::resource('products', ProductController::class);
    Route::match(
        ['post', 'put'],
        '/products/header-image',
        [ProductController::class, 'headerImage']
    )->name('products.header_image');
    Route::delete(
        '/products/header-image',
        [ProductController::class, 'headerImage']
    );
    Route::prefix('products/{product}')->group(function () {
        Route::get('items', [ProductItemController::class, 'index'])->name('products.items.index');
        Route::get('items/create', [ProductItemController::class, 'create'])->name('products.items.create');
        Route::post('items', [ProductItemController::class, 'store'])->name('products.items.store');
        Route::get('items/{item}/edit', [ProductItemController::class, 'edit'])->name('products.items.edit');
        Route::put('items/{item}', [ProductItemController::class, 'update'])->name('products.items.update');
        Route::delete('items/{item}', [ProductItemController::class, 'destroy'])->name('products.items.destroy');
    });
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
