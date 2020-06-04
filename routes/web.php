<?php

Route::get('/', function () { return view('pages.index');} );

//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password/change', 'HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index')->name('admin.home');

Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('admin', 'Admin\LoginController@login');

        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');

Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');

Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');

Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

///// Admin Section
	// Categories
	Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');

	Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');

	Route::get('delete/category/{id}', 'Admin\Category\CategoryController@Deletecategory');

	Route::get('edit/category/{id}', 'Admin\Category\CategoryController@Editcategory');

	Route::post('update/category/{id}', 'Admin\Category\CategoryController@Updatecategory');

///// Brands
	Route::get('admin/brands', 'Admin\Category\BrandController@brand')->name('brands');

	Route::post('admin/store/brand', 'Admin\Category\BrandController@storebrand')->name('store.brand');

	Route::get('delete/brand/{id}', 'Admin\Category\BrandController@Deletebrand');

	Route::get('edit/brand/{id}', 'Admin\Category\BrandController@EditBrand');

	Route::post('update/brand/{id}', 'Admin\Category\BrandController@UpdateBrand');

//  Sub Categories
	Route::get('admin/sub/category', 'Admin\Category\SubCategoryController@subcategory')->name('sub.categories');

	Route::post('admin/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');

	Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubcategory');

	Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubcategory');

	Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubcategory');

// Coupons
	Route::get('admin/coupon', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');

	Route::post('admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');

	Route::get('delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');

	Route::get('edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');

	Route::post('update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');

// Newsletter 
	Route::get('admin/newsletter', 'Admin\Category\CouponController@Newsletter')->name('admin.newsletter');

	Route::get('delete/Subc/{id}', 'Admin\Category\CouponController@DeleteSubc');

// For Show Sub Category When Selected Category with Ajax
	Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');


// Product All Route
	Route::get('admin/product/list', 'Admin\ProductController@index')->name('list.product');
	Route::get('admin/product/create', 'Admin\ProductController@create')->name('create.product');
	Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');

	Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
	Route::get('active/product/{id}', 'Admin\ProductController@active');
	Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');
	Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
	Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');

	Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');
	Route::post('update/product/photo/{id}', 'Admin\ProductController@UpdateProductPhoto');

// Blog  All Admin Site
	Route::get('blog/category/list', 'Admin\PostController@BlogCateList')->name('add.blog.categorylist');
	Route::post('admin/store/blog', 'Admin\PostController@BlogCatStore')->name('store.blog.category');
	Route::get('delete/blogcategory/{id}', 'Admin\PostController@DeleteBlogCategory');
	Route::get('edit/blogcategory/{id}', 'Admin\PostController@EditBlogCategory');
	Route::post('update/blog/category/{id}', 'Admin\PostController@UpdateBlogCategory');

	Route::get('admin/add/post', 'Admin\PostController@Create')->name('add.blogpost');
	Route::get('admin/list/post', 'Admin\PostController@index')->name('list.blogpost');
	Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
	Route::get('delete/post/{id}', 'Admin\PostController@DeletePost');

	Route::get('edit/post/{id}', 'Admin\PostController@EditPost');
	Route::post('update/post/{id}', 'Admin\PostController@UpdatePost');

// Frontend All Routes
	Route::post('store/newsletter', 'FrontendController@StoreNewsletter')->name('store.newsletter');

// Wishlist
	Route::get('add/wishlist/{id}','WishlistController@addWishlist');

// Add to Cart /add/to/cart/
	Route::get('add/to/cart/{id}','CartController@addCart');
	Route::get('check','CartController@check');
	Route::get('product/cart','CartController@ShowCart')->name('show.cart');
	Route::get('remove/cart/{rowId}','CartController@RemoveCart');
	Route::post('update/cart/item/','CartController@UpdateCart')->name('update.cartitem');

	Route::post('insert/into/cart/','CartController@InsertCart')->name('insert.into.cart');

	Route::get('/product/details/{id}/{product_name}','ProductController@ProductView');
	Route::post('/cart/product/add/{id}','ProductController@AddCart');

	Route::get('/cart/product/view/{id}','CartController@ViewProduct');
	



