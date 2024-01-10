<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\BabController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\EpisodeController;
use App\Http\Controllers\Admin\SubBabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Member\ArticleController as MemberArticleController;
use App\Http\Controllers\Member\ChatController;
use App\Http\Controllers\Member\DashboardController;
use App\Http\Controllers\Member\QuestionController as MemberQuestionController;
use App\Http\Controllers\Member\VideoListController as MemberVideoListController;
use App\Http\Controllers\RegistrasionController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\QuestionController;
use App\Http\Controllers\User\VideoListController;
use App\Http\Controllers\Ustadz\ArticleController as UstadzArticleController;
use App\Http\Controllers\Ustadz\DashboardController as UstadzDashboardController;
use App\Http\Controllers\Ustadz\PertanyaanController;
use App\Http\Controllers\Ustadz\VideoController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('components.templates.splash-screen');
})->name('splash-screen');

//authentication routes
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// registrasion router
Route::get('/registrasi', [RegistrasionController::class, 'index'])->middleware('guest')->name('registrasi.index');
Route::post('/registrasi', [RegistrasionController::class, 'registrasion'])->name('registrasi.proses');

Route::get('/home', [DashboardController::class, 'index'])->name('member.home.index');

// user routes

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->middleware('user')->name('user.index');

Route::get('/user/artikel', [ArticleController::class, 'index'])->name('user.artikel.index');
Route::get('/user/artikel/{param}', [ArticleController::class, 'show'])->name('user.artikel.show');

Route::get('/user/pertanyaan', [QuestionController::class, 'index'])->middleware('user')->name('user.pertanyaan.index');
Route::get('/user/pertanyaan/{param}', [QuestionController::class, 'show'])->name('user.pertanyaan.show');

Route::get('/user/video/{param}', [VideoListController::class, 'index'])->name('user.video.index');
Route::get('/user/video-show/{param}', [VideoListController::class, 'show'])->name('user.video.show');

//member router
Route::middleware(['member'])->group(function () {
    Route::get('/member/dashboard', [DashboardController::class, 'index'])->name('member.index');
    Route::get('/member/dashboard', [DashboardController::class, 'index'])->name('member.home.index');

    Route::get('/member/artikel', [MemberArticleController::class, 'index'])->name('member.artikel.index');
    Route::get('/member/artikel/{param}', [MemberArticleController::class, 'show'])->name('member.artikel.show');

    Route::get('/member/question', [MemberQuestionController::class, 'index'])->name('member.question.index');
    Route::get('/member/question/{param}', [MemberQuestionController::class, 'show'])->name('member.question.show');
    Route::get('/member/question/create', [MemberQuestionController::class, 'create'])->name('member.question.create');
    Route::post('/member/question/create', [MemberQuestionController::class, 'store'])->name('member.question.store');

    Route::get('/member/chat', [ChatController::class, 'index'])->name('member.chat.index');
    Route::post('/member/chat/{param}', [ChatController::class, 'store'])->name('member.chat.store');

    Route::get('/member/video/{param}', [MemberVideoListController::class, 'index'])->name('member.video.index');
    Route::get('/member/video-show/{param}', [MemberVideoListController::class, 'show'])->name('member.video.show');
});
//
//admin routes
Route::middleware(['admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('/admin/dashboard/create-kitab', [AdminDashboardController::class, 'createKitab'])->name('admin.dashboard.create-kitab');
    Route::post('/admin/dashboard/store-kitab', [AdminDashboardController::class, 'storeKitab'])->name('admin.dashboard.store-kitab');
    Route::get('/admin/dashboard/edit-kitab/{param}', [AdminDashboardController::class, 'editKitab'])->name('admin.dashboard.edit-kitab');
    Route::post('/admin/dashboard/update-kitab/{param}', [AdminDashboardController::class, 'updateKitab'])->name('admin.dashboard.update-kitab');
    Route::post('/admin/dashboard/delete-kitab/{param}', [AdminDashboardController::class, 'deleteKitab'])->name('admin.dashboard.delete-kitab');

    Route::get('/admin/dashboard/create-Bab', [AdminDashboardController::class, 'createBab'])->name('admin.dashboard.create-bab');
    Route::post('/admin/dashboard/store-Bab', [AdminDashboardController::class, 'storeBab'])->name('admin.dashboard.store-bab');
    Route::get('/admin/dashboard/edit-Bab/{param}', [AdminDashboardController::class, 'editBab'])->name('admin.dashboard.edit-bab');
    Route::post('/admin/dashboard/update-Bab/{param}', [AdminDashboardController::class, 'updateBab'])->name('admin.dashboard.update-bab');
    Route::post('/admin/dashboard/delete-Bab/{param}', [AdminDashboardController::class, 'deleteBab'])->name('admin.dashboard.delete-bab');

    Route::get('/admin/bab/{param}', [BabController::class, 'index'])->name('admin.bab.index');
    Route::get('/admin/bab/create-subbab', [BabController::class, 'createSubbab'])->name('admin.bab.create-subbab');
    Route::post('/admin/bab/store-subbab/{param}', [BabController::class, 'storeSubbab'])->name('admin.bab.store-subbab');
    Route::get('/admin/bab/edit-subbab/{param}', [BabController::class, 'editSubbab'])->name('admin.bab.edit-subbab');
    Route::post('/admin/bab/update-subbab/{param}', [BabController::class, 'updateSubbab'])->name('admin.bab.update-subbab');
    Route::post('/admin/bab/delete-subbab/{param}', [BabController::class, 'deleteSubbab'])->name('admin.bab.delete-subbab');

    Route::get('/admin/subbab/{param}', [SubBabController::class, 'index'])->name('admin.subbab.index');
    Route::get('/admin/subbab/create-judul', [SubBabController::class, 'createJudul'])->name('admin.subbab.create-judul');
    Route::post('/admin/subbab/store-judul/{param}', [SubBabController::class, 'storeJudul'])->name('admin.subbab.store-judul');
    Route::get('/admin/subbab/edit-judul/{param}', [SubBabController::class, 'editJudul'])->name('admin.subbab.edit-judul');
    Route::post('/admin/subbab/update-judul/{param}', [SubBabController::class, 'updateJudul'])->name('admin.subbab.update-judul');
    Route::post('/admin/subbab/delete-judul/{param}', [SubBabController::class, 'deleteJudul'])->name('admin.subbab.delete-judul');

    Route::get('/admin/episode/{param}', [EpisodeController::class, 'index'])->name('admin.episode.index');
    Route::get('/admin/episode/create-episode', [EpisodeController::class, 'createEpisode'])->name('admin.episode.create-episode');
    Route::post('/admin/episode/store-episode/{param}', [EpisodeController::class, 'storeEpisode'])->name('admin.episode.store-episode');
    Route::get('/admin/episode/edit-episode/{param}', [EpisodeController::class, 'editEpisode'])->name('admin.episode.edit-judul');
    Route::post('/admin/episode/update-episode/{param}', [EpisodeController::class, 'updateEpisode'])->name('admin.episode.update-episode');
    Route::post('/admin/episode/delete-episode/{param}', [EpisodeController::class, 'deleteEpisode'])->name('admin.episode.delete-episode');

    Route::get('/admin/artikel', [AdminArticleController::class, 'index'])->name('admin.article.index');
    Route::get('/admin/artikel/{param}', [AdminArticleController::class, 'show'])->name('admin.article.show');
    Route::get('/admin/artikel/create', [AdminArticleController::class, 'create'])->name('admin.article.create');
    Route::post('/admin/artikel/store', [AdminArticleController::class, 'store'])->name('admin.article.store');
    Route::get('/admin/artikel/edit/{param}', [AdminArticleController::class, 'edit'])->name('admin.article.edit');
    Route::post('/admin/artikel/update/{param}', [AdminArticleController::class, 'update'])->name('admin.article.update');
    Route::post('/admin/artikel/delete/{param}', [AdminArticleController::class, 'delete'])->name('admin.article.delete');
});


//ustadz routes
Route::middleware(['ustadz'])->group(function () {

    Route::get('/ustadz/dashboard', [UstadzDashboardController::class, 'index'])->name('ustadz.dashboard');

    Route::get('/ustadz/artikel', [UstadzArticleController::class, 'index'])->name('ustadz.article.index');
    Route::get('/ustadz/artikel/{param}', [UstadzArticleController::class, 'show'])->name('ustadz.article.show');
    Route::get('/ustadz/artikel/create', [UstadzArticleController::class, 'create'])->name('ustadz.article.create');
    Route::post('/ustadz/artikel/store', [UstadzArticleController::class, 'store'])->name('ustadz.article.store');
    Route::get('/ustadz/artikel/edit/{param}', [UstadzArticleController::class, 'edit'])->name('ustadz.article.edit');
    Route::post('/ustadz/artikel/update/{param}', [UstadzArticleController::class, 'update'])->name('ustadz.article.update');
    Route::post('/ustadz/artikel/delete/{param}', [UstadzArticleController::class, 'delete'])->name('ustadz.article.delete');

    Route::get('/ustadz/pertanyaan', [PertanyaanController::class, 'index'])->name('ustadz.pertnyaan.index');
    Route::get('/ustadz/pertanyaan/{param}', [PertanyaanController::class, 'show'])->name('ustadz.pertnyaan.show');
    Route::post('/ustadz/pertanyaan/post/{param}', [PertanyaanController::class, 'store'])->name('ustadz.pertnyaan.store');

    Route::get('/ustadz/video/{param}', [VideoController::class, 'index'])->name('ustadz.video.index');
    Route::get('/ustadz/video-show/{param}', [VideoController::class, 'show'])->name('ustadz.video.show');
});
