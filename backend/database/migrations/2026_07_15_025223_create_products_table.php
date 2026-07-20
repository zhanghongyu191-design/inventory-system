<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            // 商品编号
            $table->string('product_code')->unique();

            // JAN
            $table->string('jan_code')->unique();

            // 商品名称
            $table->string('name_jp');

            $table->string('name_cn')->nullable();

            // 分类
            $table->foreignId('category_id')->nullable();

            // 品牌
            $table->foreignId('brand_id')->nullable();

            // 单位
            $table->string('unit')->default('個');

            // 当前库存
            $table->integer('stock_quantity')->default(0);

            // 安全库存
            $table->integer('minimum_stock')->default(0);

            // 库位
            $table->foreignId('location_id')->nullable();

            // 图片
            $table->string('image_path')->nullable();

            // 状态
            $table->smallInteger('status')->default(1);

            // 备注
            $table->text('remarks')->nullable();

            $table->timestamps();

            // 逻辑删除
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
