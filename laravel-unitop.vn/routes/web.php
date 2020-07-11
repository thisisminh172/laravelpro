<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


/*
##### lession 5/7/2020

#####Định tuyến cơ bản

Route::get('/post', function () {
    return 'Đây là trang bài viết';
});

Route::get('/admin/product', function () {
    return 'Trang quản lý sản phẩm';
});

Route::get('/admin/product/add', function () {
    return 'Trang thêm sản phẩm';
});

#####Định tuyến có tham số

Route::get('posts/{id}', function ($id) {
    return $id;
});

Route::get('/posts/{cat_id}/page/{page}', function ($cat_id, $page) {
    return $cat_id . '_' . $page;
});

#####Đặt tên định tuyến
Route::get('/users/profile', function () {
    return route('profile');
})->name('profile');

#####định tuyến tham số có tùy chọn
//domain.com/users => Hiển thị ra danh sách users
//domain.com/users/4 => hiển thị chi tiết danh sach user
Route::get('users/{id?}', function ($id = 0) {
    return $id;
});

####định tuyến với tham số ràng buộc biểu thức chính quy

// Route::get('product/{id}', function ($id) {
//     return $id;
// })-> where('id','[0-9]+');

//nhập được nhiều điều kiện
Route::get('product/{slug}/{id}', function ($slug, $id) {
    return $id . '----' . $slug;
})->where(['slug' => '[A-Za-z0-9-_]+']);

//Định tuyến qua một view
Route::view('/welcome', 'welcome');
//tạo view post.blade.php
Route::view('/post', 'post', ['id' => 20]);

//Định tuyến qua controller
Route::get('/post/{id}', 'PostController@detail');

#Bài tập routing - quẩn lý bài viết trong admin
Route::get('admin/post/add', function () {
    return "Thêm bài viết";
});
Route::get('admin/post/update/{id}', function ($id) {
    return "cập nhật bài viết: " . $id;
});
Route::get('admin/post/show', function () {
    return "Hiển thị danh sách bài viết";
});

Route::get('admin/post/delete/{id}', function ($id) {
    return "Xóa bài viết " . $id;
});
*/

#### Định tuyến qua ProductController
Route::get('product/show/{id}', 'ProductController@show');

Route::get('product/create', 'ProductController@create');

Route::get('product/update/{id}', 'ProductController@update');