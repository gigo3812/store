<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('نام محصول');
            $table->string('enName')->nullable()->comment('نام انگلیسی');
            $table->text('summary')->nullable()->comment('خلاصه توضیح در مورد محصول');
            $table->text('description')->nullable()->comment('توضیحات');
            $table->string('pic')->comment('تصویر صفحه اصلی')->nullable();
            $table->json('pics')->comment('تصاویر گالری')->nullable();
            $table->double('price')->default(0);
            $table->double('offPrice')->nullable()->comment('قیمت تخفیف خورده');

            $table->integer('stock')->default(100)->nullable();
            $table->integer('min_order')->default(1)->nullable();
            $table->integer('max_order')->default(100)->nullable();

            $table->string('seo_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->string('slug', 500)->nullable();
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
        Schema::dropIfExists('products');
    }
}
