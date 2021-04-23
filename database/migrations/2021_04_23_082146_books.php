<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('headshot')->nullable();
            $table->mediumText('author_bio')->nullable();
            $table->text('author_tagline')->nullable();
            $table->string('facebook_sm_headline')->nullable();
            $table->string('linkedin_sm_headline')->nullable();
            $table->string('twitter_sm_headline')->nullable();
            $table->string('youtube_sm_headline')->nullable();
            $table->string('pinterest_sm_headline')->nullable();
            $table->string('instagram_sm_headline')->nullable();
            $table->string('preferred_cover_author_name')->nullable();
            $table->string('full_book_title')->nullable();
            $table->string('book_subtitle')->nullable();
            $table->string('edition')->nullable();
            $table->string('series_name')->nullable();
            $table->enum('publisher', ['Write Way', 'Barnsley Ink'])->default('Write Way');
            $table->enum('book_format', ['Soft Cover', 'Ebook', 'Hard Cover'])->default('Soft Cover');
            $table->string('book_trim_size')->nullable();
            $table->string('isbn_softcover')->nullable();
            $table->string('isbn_hardcover')->nullable();
            $table->string('isbn_ebook')->nullable();
            $table->integer('grade_range')->nullable();
            $table->integer('pages_in_formatted_book')->nullable();
            $table->enum('book_interior', ['B/W', 'Color', 'Color With Bleed'])->default('B/W');
            $table->enum('paper_choice', ['White', 'Creme'])->default('White');
            $table->string('book_front_cover')->nullable();
            $table->enum('book_cover', ['Matt', 'Glossy'])->default('Matt');
            $table->enum('kdp', ['KDP', 'KDP SELECT'])->default('KDP');
            $table->string('intro_pricing_ebook')->nullable();
            $table->string('regular_pricing_ebook')->nullable();
            $table->string('intro_pricing_soft_cover_book')->nullable();
            $table->string('regular_pricing_soft_cover_book')->nullable();
            $table->string('regular_pricing_hard_cover_book')->nullable();
            $table->string('basic_categories_name')->nullable();
            $table->string('amazon_book_and_kindle_cat_list')->nullable();
            $table->string('keyword_list')->nullable();
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
        Schema::dropIfExists('books');
    }
}
