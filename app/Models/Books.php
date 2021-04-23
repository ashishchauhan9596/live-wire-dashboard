<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'headshot',
        'author_bio',
        'author_tagline',
        'facebook_sm_headline',
        'linkedin_sm_headline',
        'twitter_sm_headline',
        'youtube_sm_headline',
        'pinterest_sm_headline',
        'instagram_sm_headline',
        'preferred_cover_author_name',
        'full_book_title',
        'book_subtitle',
        'edition',
        'series_name',
        'publisher',
        'book_format',
        'book_trim_size',
        'isbn_softcover',
        'isbn_hardcover',
        'isbn_ebook',
        'grade_range',
        'pages_in_formatted_book',
        'book_interior',
        'paper_choice',
        'book_front_cover',
        'book_cover',
        'kdp',
        'intro_pricing_ebook',
        'regular_pricing_ebook',
        'intro_pricing_soft_cover_book',
        'regular_pricing_soft_cover_book',
        'regular_pricing_hard_cover_book',
        'basic_categories_name',
        'amazon_book_and_kindle_cat_list',
        'keyword_list',
    ];
}
