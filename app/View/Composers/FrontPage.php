<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
        'sections.home.*',
    ];

    /**
     * Content for the hero section.
     */
    public function hero(): array
    {
        return [
            'eyebrow' => __('Kedai Kopi Spesialti & Roastery', 'kopi-senja'),
            'title' => __('Secangkir hangat untuk menutup hari.', 'kopi-senja'),
            'lead' => __('Biji kopi Nusantara yang kami sangrai sendiri dalam batch kecil, diseduh pelan-pelan, dan disajikan saat langit mulai jingga.', 'kopi-senja'),
            'primary' => [
                'label' => __('Lihat Menu', 'kopi-senja'),
                'url' => '#menu',
            ],
            'secondary' => [
                'label' => __('Kunjungi Kedai', 'kopi-senja'),
                'url' => '#kunjungi',
            ],
            'facts' => [
                ['value' => '6', 'label' => __('daerah asal biji kopi', 'kopi-senja')],
                ['value' => '2×', 'label' => __('sangrai setiap minggu', 'kopi-senja')],
                ['value' => '22.00', 'label' => __('buka hingga malam', 'kopi-senja')],
            ],
            'roast' => [
                'label' => __('Sangrai minggu ini', 'kopi-senja'),
                'name' => __('Gayo, Aceh — Natural', 'kopi-senja'),
                'notes' => __('Nangka, cokelat hitam, gula aren', 'kopi-senja'),
            ],
        ];
    }
}
