<?php
namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Capmega\Blog\Models\BlogPost;

class GeneralConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general_config = BlogPost::find(1);
        $general_config->keys = serialize([
            [
                 'name'        => 'Facebook',
                 'seoname'     => 'facebook',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Social network',
                 'seocategory' => 'social-network',
            ],
            [
                 'name'        => 'Twitter',
                 'seoname'     => 'twitter',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Social network',
                 'seocategory' => 'social-network',
            ],
            [
                 'name'        => 'Linkedin',
                 'seoname'     => 'linkedin',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Social network',
                 'seocategory' => 'social-network',
            ],
            [
                 'name'        => 'Youtube',
                 'seoname'     => 'youtube',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Social network',
                 'seocategory' => 'social-network',
            ],
            [
                 'name'        => 'Address',
                 'seoname'     => 'address',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Address',
                 'seocategory' => 'address',
            ],
            [
                 'name'        => 'Phone',
                 'seoname'     => 'phone',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Contact',
                 'seocategory' => 'contact',
            ],
            [
                 'name'        => 'Movil',
                 'seoname'     => 'movil',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Contact',
                 'seocategory' => 'contact',
            ],
            [
                 'name'        => 'Email',
                 'seoname'     => 'email',
                 'type'        => '',
                 'values'      => '',
                 'category'    => 'Contact',
                 'seocategory' => 'contact',
            ],
        ]);
        $general_config->save();
    }
}
