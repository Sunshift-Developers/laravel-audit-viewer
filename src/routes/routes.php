<?php
use Illuminate\Support\Facades\Route;
use Sunshift\Audits\Controllers\AuditController;
 
Route::get('/audits-viewer', [AuditController::class, 'index'])->name('audits');








