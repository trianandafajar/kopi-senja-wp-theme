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
     * Data passed to the view.
     *
     * Values are resolved eagerly so the sections can read them as arrays.
     */
    protected function with(): array
    {
        return [
            'hero' => $this->hero(),
            'menu' => $this->menu(),
            'beans' => $this->beans(),
            'process' => $this->process(),
            'testimonials' => $this->testimonials(),
        ];
    }

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

    /**
     * Featured drinks and snacks for the menu section.
     *
     * Prices are in Rupiah and serve as sample content.
     */
    public function menu(): array
    {
        return [
            [
                'name' => __('Es Kopi Susu Senja', 'kopi-senja'),
                'category' => __('Kopi Susu', 'kopi-senja'),
                'description' => __('Espresso blend rumah, susu segar, dan gula aren cair buatan sendiri.', 'kopi-senja'),
                'price' => 28000,
                'icon' => 'gelas',
                'badge' => __('Favorit', 'kopi-senja'),
            ],
            [
                'name' => __('Kopi Tubruk Toraja', 'kopi-senja'),
                'category' => __('Tradisional', 'kopi-senja'),
                'description' => __('Diseduh langsung di gelas, pekat dan bersahaja, disajikan dengan gula batu.', 'kopi-senja'),
                'price' => 22000,
                'icon' => 'cangkir',
            ],
            [
                'name' => __('V60 Single Origin', 'kopi-senja'),
                'category' => __('Manual Brew', 'kopi-senja'),
                'description' => __('Pilih biji dari rak sangrai kami, lalu barista menyeduhnya di depan Anda.', 'kopi-senja'),
                'price' => 35000,
                'icon' => 'cangkir',
                'badge' => __('Musiman', 'kopi-senja'),
            ],
            [
                'name' => __('Cappuccino Kayu Manis', 'kopi-senja'),
                'category' => __('Espresso', 'kopi-senja'),
                'description' => __('Busa susu lembut dengan taburan kayu manis dan sedikit pala.', 'kopi-senja'),
                'price' => 32000,
                'icon' => 'cangkir',
            ],
            [
                'name' => __('Teh Rempah Jahe Serai', 'kopi-senja'),
                'category' => __('Non-Kopi', 'kopi-senja'),
                'description' => __('Teh hitam, jahe merah, dan serai. Hangat untuk sore yang gerimis.', 'kopi-senja'),
                'price' => 24000,
                'icon' => 'daun',
            ],
            [
                'name' => __('Pisang Goreng Karamel', 'kopi-senja'),
                'category' => __('Camilan', 'kopi-senja'),
                'description' => __('Pisang kepok renyah dengan saus karamel gula aren dan sejumput garam laut.', 'kopi-senja'),
                'price' => 20000,
                'icon' => 'kue',
            ],
        ];
    }

    /**
     * Roasted beans available to take home (200 g packs).
     */
    public function beans(): array
    {
        return [
            [
                'origin' => __('Kintamani, Bali', 'kopi-senja'),
                'process' => __('Honey', 'kopi-senja'),
                'notes' => __('Jeruk, madu, teh manis', 'kopi-senja'),
                'price' => 95000,
            ],
            [
                'origin' => __('Bajawa, Flores', 'kopi-senja'),
                'process' => __('Washed', 'kopi-senja'),
                'notes' => __('Cokelat susu, kacang, rempah', 'kopi-senja'),
                'price' => 90000,
            ],
            [
                'origin' => __('Gayo, Aceh', 'kopi-senja'),
                'process' => __('Natural', 'kopi-senja'),
                'notes' => __('Nangka, anggur, gula aren', 'kopi-senja'),
                'price' => 110000,
            ],
        ];
    }

    /**
     * The "from bean to cup" steps shown in the about section.
     */
    public function process(): array
    {
        return [
            [
                'title' => __('Memilih', 'kopi-senja'),
                'text' => __('Kami mencicipi sampel dari kelompok tani di berbagai daerah dan hanya memilih lot yang membuat kami tersenyum.', 'kopi-senja'),
            ],
            [
                'title' => __('Menyangrai', 'kopi-senja'),
                'text' => __('Disangrai dalam batch kecil di roastery belakang kedai, dua kali seminggu, agar selalu segar.', 'kopi-senja'),
            ],
            [
                'title' => __('Menyeduh', 'kopi-senja'),
                'text' => __('Setiap resep diuji ulang setiap pagi. Takaran, suhu, dan waktu, semuanya kami catat.', 'kopi-senja'),
            ],
        ];
    }

    /**
     * Placeholder testimonials.
     *
     * These are NOT real reviews. They only demonstrate the layout and
     * should be replaced with genuine, consented customer feedback.
     */
    public function testimonials(): array
    {
        return [
            [
                'quote' => __('Contoh ulasan: tempat yang nyaman untuk bekerja di sore hari, dan es kopi susunya pas manisnya.', 'kopi-senja'),
                'author' => __('Nama Pelanggan', 'kopi-senja'),
                'meta' => __('Contoh testimoni', 'kopi-senja'),
            ],
            [
                'quote' => __('Contoh ulasan: barista dengan senang hati menjelaskan karakter setiap biji sebelum diseduh.', 'kopi-senja'),
                'author' => __('Nama Pelanggan', 'kopi-senja'),
                'meta' => __('Contoh testimoni', 'kopi-senja'),
            ],
            [
                'quote' => __('Contoh ulasan: biji sangrai untuk di rumah selalu segar dan wanginya memenuhi dapur.', 'kopi-senja'),
                'author' => __('Nama Pelanggan', 'kopi-senja'),
                'meta' => __('Contoh testimoni', 'kopi-senja'),
            ],
        ];
    }
}
