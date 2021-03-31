<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('ID_Role')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nominations', function(Blueprint $table) {
			$table->foreign('ID_Student')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nominations', function(Blueprint $table) {
			$table->foreign('ID_Offer')->references('id')->on('offers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->foreign('ID_Nomination')->references('id')->on('nominations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->foreign('ID_Account')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('offers', function(Blueprint $table) {
			$table->foreign('ID_Company')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->foreign('ID_Company')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('ID_City')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('gives', function(Blueprint $table) {
			$table->foreign('ID_Role')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('gives', function(Blueprint $table) {
			$table->foreign('ID_Right')->references('id')->on('rights')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('writes', function(Blueprint $table) {
			$table->foreign('ID_Review')->references('id')->on('reviews')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('writes', function(Blueprint $table) {
			$table->foreign('ID_Account')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('User_ID_Role_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('User_ID_Nomination_foreign');
		});
		Schema::table('nominations', function(Blueprint $table) {
			$table->dropForeign('Nomination_ID_Notification_foreign');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->dropForeign('Notification_ID_Nomination_foreign');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->dropForeign('Notification_ID_Account_foreign');
		});
		Schema::table('offers', function(Blueprint $table) {
			$table->dropForeign('Offer_ID_Company_foreign');
		});
		Schema::table('offers', function(Blueprint $table) {
			$table->dropForeign('Offer_ID_Nomination_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->dropForeign('Review_ID_Company_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('Company_ID_City_foreign');
		});
		Schema::table('gives', function(Blueprint $table) {
			$table->dropForeign('give_ID_Role_foreign');
		});
		Schema::table('gives', function(Blueprint $table) {
			$table->dropForeign('give_ID_Right_foreign');
		});
		Schema::table('writes', function(Blueprint $table) {
			$table->dropForeign('write_ID_Review_foreign');
		});
		Schema::table('writes', function(Blueprint $table) {
			$table->dropForeign('write_ID_Account_foreign');
		});
	}
}