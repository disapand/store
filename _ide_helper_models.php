<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\File
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $filename
 * @property string $mine
 * @property string $original_filename
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\File whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\File whereFilename($value)
 * @method static \Illuminate\Database\Query\Builder|\App\File whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\File whereMine($value)
 * @method static \Illuminate\Database\Query\Builder|\App\File whereOriginalFilename($value)
 * @method static \Illuminate\Database\Query\Builder|\App\File whereUpdatedAt($value)
 */
	class File extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property-read \App\File $file
 * @mixin \Eloquent
 * @property int $id
 * @property string $product_name
 * @property string $product_desc
 * @property float $product_price
 * @property string $product_img_url
 * @property string $product_file_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductFileId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductImgUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

