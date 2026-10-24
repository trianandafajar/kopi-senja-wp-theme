<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data passed to the view.
     *
     * Values are resolved eagerly so arrays can be read with `$business['…']`
     * in Blade; deferred public-method variables don't support array access.
     */
    protected function with(): array
    {
        return [
            'siteName' => $this->siteName(),
            'business' => $this->business(),
        ];
    }

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Shop details shared by the visit section and the footer.
     *
     * Kopi Senja is fictional: the address, phone number and email below
     * are placeholders to be replaced with real details.
     */
    public function business(): array
    {
        return [
            'address' => [
                __('Jl. Kenanga Senja No. 17', 'kopi-senja'),
                __('Yogyakarta 55000', 'kopi-senja'),
            ],
            'phone' => '+62 812-0000-0000',
            'email' => 'halo@kopisenja.example',
            'hours' => [
                ['days' => __('Senin – Jumat', 'kopi-senja'), 'time' => '07.00 – 22.00'],
                ['days' => __('Sabtu – Minggu', 'kopi-senja'), 'time' => '08.00 – 23.00'],
                ['days' => __('Hari libur nasional', 'kopi-senja'), 'time' => '10.00 – 20.00'],
            ],
        ];
    }
}
