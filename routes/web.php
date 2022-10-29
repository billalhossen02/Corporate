<?php

use App\Models\Blog;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PageBuilderController;
use App\Http\Controllers\HomePageBuilderController;
use App\Http\Controllers\CategoryPageBuilderController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/dynamic_dependent/fetch', [HomeController::class, 'fetch'])->name('dynamicdependent.fetch');
Route::post('/contact_us', [HomeController::class, 'contactUs'])->name('contactus.store');
Route::post('/search', [HomeController::class, 'search'])->name('product.search');
Route::get('/single/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/allsoftware', [HomeController::class, 'allSoftware']);
Route::get('/software', [HomeController::class, 'software']);
Route::get('/modal/{id}', [HomeController::class, 'modal'])->name('modal');
Route::get('/product/filter', [HomeController::class, 'filter'])->name('filter');
Route::get('/shop.html', [HomeController::class, 'shop_html'])->name('shop.html');
Route::get('/partner.html', [HomeController::class, 'partner'])->name('partner');
Route::get('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter');
Route::get('/about.html', [HomeController::class, 'about'])->name('about');
Route::get('/techdeal.html', [HomeController::class, 'tech'])->name('tech');

// Route::get('/blog/show',[BlogController::class,'show']);



//Auth
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('post-login', [HomeController::class, 'postLogin'])->name('login.post');
Route::get('forgot', [HomeController::class, 'forgot'])->name('forgot');
Route::get('reset-password', [HomeController::class, 'reset'])->name('reset-password');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/logout', [HomeController::class, 'customLogout']);
//End Auth


//Client Story
Route::get('/story', [HomeController::class, 'story']);
Route::post('/story', [HomeController::class, 'addStory']);
//End Client Story

//End Frontend

//Backend Start
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

//products
Route::get('/product', [BackendController::class, 'products'])->name('products');
Route::post('/dynamic_dependent/fetch2', [CategoryController::class, 'fetch2'])->name('dynamicdependent.fetch2');
Route::get('/addProduct', [BackendController::class, 'addProductT'])->name('ProductT');
Route::post('/add/product', [BackendController::class, 'addProduct'])->name('addProduct');
Route::get('/edit/product/{id}', [BackendController::class, 'editProduct']);
Route::post('/update/product/{id}', [BackendController::class, 'updateProduct']);
Route::get('/delete/product/{id}', [BackendController::class, 'deleteProduct']);

//category

Route::get('/category', [CategoryController::class, 'categories'])->name('categories');
Route::get('/addCategory', [CategoryController::class, 'addCategoryT'])->name('CategoriesT');
Route::post('/add/category', [CategoryController::class, 'addCategory'])->name('addCategory');
Route::get('/edit/category/{id}', [CategoryController::class, 'editCategory']);
Route::post('/update/category/{id}', [CategoryController::class, 'updateCategory']);
Route::get('/delete/category/{id}', [CategoryController::class, 'deleteCategory']);



//Brand
Route::get('/brand', [BrandController::class, 'brands'])->name('brands');
Route::get('/addBrand', [BrandController::class, 'addBrandT'])->name('BrandsT');
Route::post('/add/brand', [BrandController::class, 'addBrand'])->name('addBrand');
Route::get('/edit/brand/{id}', [BrandController::class, 'editBrand']);
Route::post('/update/brand/{id}', [BrandController::class, 'updateBrand']);
Route::get('/delete/brand/{id}', [BrandController::class, 'deleteBrand']);


//Industry
Route::get('/industries', [IndustryController::class, 'industries'])->name('industries');
Route::get('/addIndustry', [IndustryController::class, 'addIndustryT'])->name('IndustryT');
Route::post('/add/industry', [IndustryController::class, 'addIndustry'])->name('addIndustry');
Route::get('/edit/industry/{id}', [IndustryController::class, 'editIndustry']);
Route::post('/update/industry/{id}', [IndustryController::class, 'updateIndustry']);
Route::get('/delete/industry/{id}', [IndustryController::class, 'deleteIndustry']);

//Solution
Route::get('/solutions', [SolutionController::class, 'view_solution'])->name('view_solution');
Route::get('/solutions/create', [SolutionController::class, 'create_solution'])->name('create_solution');
Route::post('/solutions', [SolutionController::class, 'store_solution'])->name('store_solution');
Route::get('solutions/{id}', [SolutionController::class, 'edit_solution'])->name('edit_solution');
//Update
Route::post('/solutions/{id}', [SolutionController::class, 'update_solution'])->name('update_solution');
Route::get('/delete/solutions/{id}', [SolutionController::class, 'delete'])->name('delete_solution');
//Single Solution
Route::get('/solutions/{solution}', [SolutionController::class, 'single_solution'])->name('single_solution');


//Cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('add/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

//End Cart


//Checkout

Route::get('checkout', [CartController::class, 'checkout'])->name('checkout')->middleware(['auth', 'verified']);

//Widget1

Route::get('/widget1', [ClientController::class, 'index'])->name('widget');
Route::get('add/widget1', [ClientController::class, 'add'])->name('widgetT');
Route::post('add/widget/', [ClientController::class, 'addWidget'])->name('addWidget');


Route::get('client', [ClientController::class, 'clientT'])->name('ClientT');
Route::post('add/client', [ClientController::class, 'clientE'])->name('ClientE');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', [BackendController::class, 'index'])->name('admin');
});

Route::post('/addorder', [OrderController::class, 'addOrder'])->name('add.order');
Route::get('order/details', [OrderDetailController::class, 'index'])->name('order.details');
Route::post('/order/update/{id}', [OrderDetailController::class, 'update']);
Route::post('/payment/update/{id}', [OrderController::class, 'paymentUpdate']);


//Page Builder

Route::post('pagebuilder/brand', [PageBuilderController::class, 'addPage'])->name('addPage');
Route::get('allpage', [PageBuilderController::class, 'allPage'])->name('allpage');
Route::get('choose', [PageBuilderController::class, 'choose']);
Route::get('pagebuilder/brand', [PageBuilderController::class, 'brand']);
Route::get('/hardware/{brand}', [HomeController::class, 'hardware']);
Route::get('pagebuilder/brand/delete/{id}', [PageBuilderController::class, 'brandDelete']);

// Route::get('pagebuilder/{id}',[PageBuilderController::class,'delete']);
// Route::get('pagebuilder/edit/{id}',[PageBuilderController::class,'edit']);
// Route::post('pagebuilder/update/{id}',[PageBuilderController::class,'update'])->name('updatePage');


//Page builder Home

Route::get('pagebuilder/home', [HomePageBuilderController::class, 'home']);
Route::post('pagebuilder/home', [HomePageBuilderController::class, 'addPageHome'])->name('addPageHome');
Route::get('pagebuilder/home/{id}',[HomePageBuilderController::class,'delete']);


//Page Builder Category

Route::get('pagebuilder/category', [CategoryPageBuilderController::class, 'category']);
Route::post('pagebuilder/category', [CategoryPageBuilderController::class, 'addPageCategory'])->name('addPageCategory');
Route::get('category.html/{category}', [HomeController::class, 'category'])->name('category');
Route::get('pagebuilder/category/delete/{id}', [CategoryPageBuilderController::class, 'categoryDelete']);



Route::get('client/dashboard', [ClientController::class, 'dashboard']);
Route::get('order/track', [ClientController::class, 'track']);


Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/contact/location', [HomeController::class, 'location']);



//error

Route::get('coming_soon', function () {
    return view('frontend.error.coming_soon');
});
Route::get('404', function () {
    return view('frontend.error.error');
});
Route::get('privacy', function () {
    return view('frontend.footer.privacy');
});
Route::get('terms', function () {
    return view('frontend.footer.terms');
});
Route::get('web-accessibility', function () {
    return view('frontend.footer.web');
});
Route::get('sitemap', function () {
    return view('frontend.footer.sitemap');
});
Route::get('tech_glossary', function () {
    return view('frontend.footer.tech_glossary');
});
Route::get('/allsoftware_template', function () {
    return view('frontend.product.allsoftware_template');
});
Route::get('/common_hardware_shop', function () {
    return view('frontend.common_hardware.common_hardware');
});
Route::get('/popup', function () {
    return view('frontend.popup');
});
Route::get('/service', function () {
    return view('frontend.service.service');
});
Route::get('/single_solution', function () {
    return view('frontend.blogs.single_solution');
});


Route::get('/industryall', [IndustryController::class, 'view_industries'])->name('view_industries');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');


//All Blogs
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
//Show Create Form
Route::get('/blogs/create', [BlogController::class, 'create']);
//Store Blog Data
Route::post('/blogs/add', [BlogController::class, 'store'])->name('addblog');
//Show Edit Form
Route::get('/blogs/edit/{blog}', [BlogController::class, 'edit'])->name('edit');
//Update Listing
Route::put('blogs/{blog}', [BlogController::class, 'update']);
//Update Delete
Route::delete('blogs/{blog}', [BlogController::class, 'destroy']);
//Single Blogs
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('single');
// Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('single');
Route::get('/story/{id}', [BlogController::class, 'storyShow']);


//Blogs Backend
// All Blogs Backend
Route::get('/admin/blogs', [BlogController::class, 'blogs_backend'])->name('blogs_backend');
//Show Create Form Backend
Route::get('/admin/blogs/create', [BlogController::class, 'blogs_create_backend'])->name('blogs_create_backend');
Route::post('/add/solution', [BlogController::class, 'addSolution'])->name('addSolution');

//Success
//View all successes
Route::get('/successes', [SuccessController::class, 'view_success'])->name('view_success');
//Show Edit Form
Route::get('/successes/edit/{success}', [SuccessController::class, 'edit_success']);
//Update Success
Route::put('successes/{success}', [SuccessController::class, 'update_success']);
//Single Success
Route::get('/Successes/{Success}', [SuccessController::class, 'show_success'])->name('show_success');


