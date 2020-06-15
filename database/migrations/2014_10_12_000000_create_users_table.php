        <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->default('');
            $table->string('user_name')->nullable()->default('');
            $table->string('email')->nullable()->default('');
            $table->enum('status', ['active', 'in-active'])->nullable()->default('in-active');
            $table->string('phone_number')->nullable()->default('');
            $table->string('mobile_number')->nullable()->default('');
            $table->string('address')->nullable()->default('');
            $table->string('state')->nullable()->default('');
            $table->string('postal_code')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('country')->nullable()->default('');
            $table->string('website')->nullable()->default('');
            $table->string('company_name')->nullable()->default('');
            $table->string('company_registration_number')->nullable()->default('');
            $table->string('vat_pan_no')->nullable()->default('');
            $table->string('contact_name')->nullable()->default('');
            $table->string('contact_email')->nullable()->default('');
            $table->string('contact_phone_number')->nullable()->default('');
            $table->string('contact_mobile_number')->nullable()->default('');
            $table->string('password');
            $table->string('password_reference')->nullable()->default('');
            $table->string('password_change_code')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
