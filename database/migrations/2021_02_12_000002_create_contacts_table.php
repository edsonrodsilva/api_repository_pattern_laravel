<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact');
            $table->unsignedInteger('type_contact_id');
            $table->foreign('type_contact_id', 'contacts_type_contact_id_foreign')
                ->references('id')
                ->on('type_contacts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_contacts', function (Blueprint $table) {
            $table->dropForeign('contacts_type_contact_id_foreign');
            $table->dropColumn('type_contact_id');
        });

        Schema::dropIfExists('contacts');
    }
}
