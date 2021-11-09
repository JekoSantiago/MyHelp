<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AuthController@index');
Route::get('/logout','AuthController@logout');
Route::get('/home','HomeController@index');

Route::get('/ticket','TicketController@viewTicket'); 
Route::get('/ticket/ticket-details/{ticketID}','TicketController@viewTicketDetails');
Route::get('/ticket/create-ticket','TicketController@viewInsertTicket'); 
Route::get('/ticket/my-ticket','TicketController@index');
Route::get('/ticket/other-ticket','TicketController@viewOtherTicket'); 
Route::post('/ticket/insert-ticket','TicketController@insertTicket'); 
Route::post('/ticket/update-ticket','TicketController@updateTicket'); 
Route::post('/ticket/delete-file','TicketController@deleteFile');

Route::get('/dashboard','DashboardController@index');

Route::get('/contact','ContactController@index');

Route::get('/report','ReportController@index');

Route::get('/maintenance','MaintenanceController@index');

Route::post('/common/get-ticket-category','CommonController@getTicketCategory');
Route::post('/common/get-ticket-sub-category','CommonController@getTicketSubCategory');
 
