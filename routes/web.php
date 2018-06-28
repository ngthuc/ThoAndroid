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

Route::get('/', function () {
    return redirect('/home');
});
Route::get('admin', function () {
    return redirect('/home');
});
Route::get('user', function () {
    return view('page.trangchu');
});
Route::get('trang-chu-chi-tiet', function () {
    return view('index.IndexMain');
});

// Route quản lý phòng ban là bảng role trong csdl

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'QuanLyVaiTro'],function(){
        Route::get('danhsach','roleController@getDanhSach');

        Route::get('sua/{class_id}','roleController@getSua');
        Route::post('sua/{class_id}','roleController@postSua');

        Route::get('them','roleController@getThem');
        route::post('them','roleController@postThem');

        route::get('xoa/{class_id}','roleController@getXoa');

    });
    Route::group(['prefix'=>'QuanLyNguoiDung'],function(){
        Route::get('danhsach','userController@getDanhSach');

        Route::get('sua/{class_id}','userController@getSua')->name('update_user');
        Route::post('sua/{class_id}','userController@postSua');

        Route::get('them','userController@getThem');
        route::post('them','userController@postThem');

        route::get('xoa/{class_id}','userController@getXoa');

        Route::get('xem/{class_id}','userController@getXem')->name('xem_user');
    });
    Route::group(['prefix'=>'QuanLyPhongBan'],function(){
        Route::get('danhsach','unitsController@getDanhSach');

        Route::get('sua/{class_id}','unitsController@getSua');
        Route::post('sua/{class_id}','unitsController@postSua');

        Route::get('them','unitsController@getThem');
        route::post('them','unitsController@postThem');

        route::get('xoa/{class_id}','unitsController@getXoa');

        Route::get('yeucau/{class_id}','unitsController@them')->name('getloaiyeucau');
        Route::post('yeucau/{class_id}','unitsController@postLoai')->name('postloaiyeucau');
    });




    Route::group(['prefix'=>'QuanLyLoaiYeuCau'],function(){

        Route::get('danhsach','RequirementTypeController@getDanhSach');

        Route::get('sua/{class_id}','RequirementTypeController@getSua');
        Route::post('sua/{class_id}','RequirementTypeController@postSua');

        Route::get('them','RequirementTypeController@getThem');
        Route::post('them','RequirementTypeController@postThem');

        Route::get('xoa/{class_id}','RequirementTypeController@getXoa');

    });
    Route::group(['prefix'=>'QuanLyLoaiYeuCau'],function(){

        Route::get('thuoctinh/{class_id}','propertiesController@getDanhSach');

        Route::get('thuoctinh/sua/{class_id}', 'propertiesController@getSua');
        Route::post('thuoctinh/sua/{class_id}','propertiesController@postSua');

        Route::get('thuoctinh/them/{class_id}','propertiesController@getThem');
        Route::post('thuoctinh/them/{class_id}','propertiesController@postThem');

        Route::get('thuoctinh/xoa/{class_id}','propertiesController@getXoa');

    });




    //quan ly truy xuat yeu cau
    Route::group(['prefix'=>'QuanLyTruyXuatYC'],function(){
        Route::get('them','requirementController@getThemYC');
        Route::post('themchitet','requirementController@getThemCT')->name('themchitet');
        Route::post('themyeucau','requirementController@postThemYC')->name('themyeucau');
        Route::get('xemlichsu','requirementController@getXemlichsu');
        Route::get('chitietyeucau/{id}','requirementController@getChitietyeucau')->name('chitietyeucau');
    });









    //duyệt yêu cầu
    Route::group(['prefix'=>'DuyetYeuCau'],function(){
        Route::get('duyet','requirementController@getDuyetYeuCau')->name('duyet');
        Route::post('post_duyet','requirementController@postDuyetYeuCau')->name('post_duyet');
        Route::get('chitietyeucau/{id}','requirementController@themyeucau')->name('chitietduyetyeucau');
        Route::get('xoa/{id}','requirementController@xoa')->name('xoa');

    });
    //Thong ke
    Route::group(['prefix'=>'ThongKe'],function(){
        Route::get('thongke','ThongKeController@getThongKe');
        Route::post('xuatExcel', 'ThongKeController@xuatExcel')->name('excelExport');

    });

});

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});
Route::get('/home', 'HomeController@index')->name('home');
