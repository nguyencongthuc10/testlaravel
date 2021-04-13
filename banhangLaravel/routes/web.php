<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//font-end
Route::get('/', 'HomeController@index');
   

Route::get('/trang-chu', 'HomeController@index');


// back-end
// vào trangn login-admin
Route::get('/admin', 'AdminController@index');
//vào trang dashboard
Route::get('/dashboard', 'AdminController@show_dashboard');
//login-admin
Route::post('/admin-login', 'AdminController@admin_login');
// logout
Route::get('/logout_admin', 'AdminController@admin_logout');
//-----------------------------------------------------------------------------//

//category-product
//vào add_category
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
//vào all_category
Route::get('/all-category-product', 'CategoryProduct@all_category_product');
//thêm categry
Route::post('/save-category-product', 'CategoryProduct@save_category_product');
//ẩn or hiện category-product
Route::get('/active-category-product/{id_category_product}', 'CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{id_category_product}', 'CategoryProduct@unactive_category_product');
//cập nhật category
Route::get('/edit-category-product/{id_category_product}', 'CategoryProduct@edit_category_product');
Route::post('/update-category-product/{id_category_product}', 'CategoryProduct@update_category_product');
//del category
Route::get('/del-category-product/{id_category_product}', 'CategoryProduct@del_category_product');

//=---------------------------------------------------------------=
//brand-product
//vào brand
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
//vào all_category
Route::get('/all-brand-product', 'BrandProduct@all_brand_product');
//thêm categry
Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
//ẩn or hiện category-product
Route::get('/active-brand-product/{id_brand_product}', 'BrandProduct@active_brand_product');
Route::get('/unactive-brand-product/{id_brand_product}', 'BrandProduct@unactive_brand_product');
//cập nhật category
Route::get('/edit-brand-product/{id_brand_product}', 'BrandProduct@edit_brand_product');
//del category
Route::get('/del-brand-product/{id_brand_product}', 'BrandProduct@del_brand_product');

Route::post('/update-brand-product/{id_brand_product}', 'BrandProduct@update_brand_product');


//============================================================================
// product
Route::get('/add-product', 'ProductController@add_product');
//vào all_category
Route::get('/all-product', 'ProductController@all_product');
//thêm categry
Route::post('/save-product', 'ProductController@save_product');
//ẩn or hiện category-product
Route::get('/active-product/{id_product}', 'ProductController@active_product');
Route::get('/unactive-product/{id_product}', 'ProductController@unactive_product');
//cập nhật category
Route::get('/edit-product/{id_product}', 'ProductController@edit_product');
//del category
Route::get('/del-product/{id_product}', 'ProductController@del_product');

Route::post('/update-product/{id_product}', 'ProductController@update_product');


Route::post('/load-more-product', 'ProductController@loadmore_product');



//show category index 
Route::get('/detail-product/{product_id}', 'ProductController@show_detail_product');
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProduct@show_category_product');

Route::get('/thuong-hieu-san-pham/{brand_id}', 'BrandProduct@show_brand_product');

Route::post('/save-cart', 'CartController@cart_save');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/show-cart-ajax', 'CartController@show_cart_ajax');
Route::get('/delete-cart/{rowId}', 'CartController@delete_cart');
Route::post('/update-qty', 'CartController@update_qty');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');


// check-out
Route::get('/login-check-out-cart', 'CheckOutController@login_checkout');
Route::get('/check-out-cart', 'CheckOutController@checkout');
Route::post('/add-customer', 'CheckOutController@add_customer');
Route::post('/save-checkout-customer', 'CheckOutController@save_checkout_customer');
Route::get('/logout-check-out-cart', 'CheckOutController@logout_check_out_cart');
Route::post('/login-customer', 'CheckOutController@login_customer');
Route::get('/payment', 'CheckOutController@payment');
Route::post('/hinhthucthanhtoan', 'CheckOutController@hinhthucthanhtoan');


// search
Route::post('/search-custom', 'HomeController@search_custom');

//quan lý dơn hàng admin 
Route::get('/manage', 'CheckOutController@manage_order');
Route::get('/view-order/{orderid}', 'CheckOutController@view_order');
Route::get('/del-order/{orderid}', 'CheckOutController@del_order');


// Auth::routes();

// Route::get('/home', 'HomeController@index');
