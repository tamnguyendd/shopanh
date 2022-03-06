<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugs = ["macBook-air","macbook-pro-13","macbook-pro-16","macBook-air1","macbook-pro-13-1","macbook-pro-16-1","macBook-air2","macbook-pro-13-2","macbook-pro-16-2","macBook-air3","macbook-pro-13-3","macbook-pro-16-3","macBook-air4","macbook-pro-13-4","macbook-pro-16-4","macBook-air5","macbook-pro-13-5","macbook-pro-16-5","inspiron-15-3000-amd","g15-ryzen-edition-gaming","vostro-5510","inspiron-15-3000-amd-1","g15-ryzen-edition-gaming-1","vostro-5510-1","inspiron-15-3000-amd-2","g15-ryzen-edition-gaming-2","vostro-5510-2","inspiron-15-3000-amd-3","g15-ryzen-edition-gaming-3","vostro-5510-3","inspiron-15-3000-amd-4","g15-ryzen-edition-gaming-4","vostro-5510-4","inspiron-15-3000-amd-5","g15-ryzen-edition-gaming-5","vostro-5510-5","hp-probook-430-g8-notebook-pc","hp-250-g7-notebook-pc","hp-zbook-firefly-g8-mobile-workstation-pc","hp-probook-430-g8-notebook-pc1","hp-250-g7-notebook-pc1","hp-zbook-firefly-g8-mobile-workstation-pc1","hp-probook-430-g8-notebook-pc2","hp-250-g7-notebook-pc2","hp-zbook-firefly-g8-mobile-workstation-pc2","hp-probook-430-g8-notebook-pc3","hp-250-g7-notebook-pc3","hp-zbook-firefly-g8-mobile-workstation-pc3","hp-probook-430-g8-notebook-pc4","hp-250-g7-notebook-pc4","hp-zbook-firefly-g8-mobile-workstation-pc4","hp-probook-430-g8-notebook-pc5","hp-250-g7-notebook-pc5","hp-zbook-firefly-g8-mobile-workstation-pc5","predator-triton-500","acer-chromebook-spin-311","aspire-5","predator-triton-5001","acer-chromebook-spin-3111","aspire-51","predator-triton-5002","acer-chromebook-spin-3112","aspire-52","predator-triton-5003","acer-chromebook-spin-3113","aspire-53","predator-triton-5004","acer-chromebook-spin-3114","aspire-54","predator-triton-5005","acer-chromebook-spin-3115","aspire-55","legion-7i-with-rtx-2080","thinkpad-x1-extreme-gen-3-intel","thinkpad-p1-workstation-gen-4-intel","legion-7i-with-rtx-20801","thinkpad-x1-extreme-gen-3-intel1","thinkpad-p1-workstation-gen-4-intel1","legion-7i-with-rtx-20802","thinkpad-x1-extreme-gen-3-intel2","thinkpad-p1-workstation-gen-4-intel2","legion-7i-with-rtx-20803","thinkpad-x1-extreme-gen-3-intel3","thinkpad-p1-workstation-gen-4-intel3","legion-7i-with-rtx-20804","thinkpad-x1-extreme-gen-3-intel4","thinkpad-p1-workstation-gen-4-intel4","legion-7i-with-rtx-20805","thinkpad-x1-extreme-gen-3-intel5","thinkpad-p1-workstation-gen-4-intel5","iphone-xr","iphone-11","iphone-se","iphone-12","iphone-12-pro","galaxy-z-fold3-5g","galaxy-z-flip3-5g","galaxy-s21-ultra-5g","galaxy-xcover-pro-64gb","sony-xperia-pro","sony-xperia-10-iii","sony-xperia-5-iii","sony-xperia-1-iii","sony-xperia-10-iii-lite","xiaomi-redmi-note-10t-5g","xiaomi-redmi-10","xiaomi-redmi-note-8","xiaomi-redmi-note-8","eos-kiss-x10i","eos-1d-x-mark-iii","eos-90d","eos-rebel-sl3","d6","d850","d810a","d780","sony-wf-1000xm4","sony-wh-1000xm4","sony-wf-1000xm3","sony-mdr-zx110nc","hd-400s","hd-559","hd-598","hd-600"];
        // apple laptop
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air',
                'name'              =>  'MacBook Air',
                'slug'              =>  'macBook-air',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13”',
                'name'              =>  'MacBook Pro 13”',
                'slug'              =>  'macbook-pro-13',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16”',
                'name'              =>  'MacBook Pro 16”',
                'slug'              =>  'macbook-pro-16',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air1',
                'name'              =>  'MacBook Air1',
                'slug'              =>  'macBook-air1',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13” 1',
                'name'              =>  'MacBook Pro 13” 1',
                'slug'              =>  'macbook-pro-13-1',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16” 1',
                'name'              =>  'MacBook Pro 16” 1',
                'slug'              =>  'macbook-pro-16-1',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air2',
                'name'              =>  'MacBook Air2',
                'slug'              =>  'macBook-air2',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13” 2',
                'name'              =>  'MacBook Pro 13” 2',
                'slug'              =>  'macbook-pro-13-2',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16” 2',
                'name'              =>  'MacBook Pro 16” 2',
                'slug'              =>  'macbook-pro-16-2',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air3',
                'name'              =>  'MacBook Air3',
                'slug'              =>  'macBook-air3',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13” 3',
                'name'              =>  'MacBook Pro 13” 3',
                'slug'              =>  'macbook-pro-13-3',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16” 3',
                'name'              =>  'MacBook Pro 16” 3',
                'slug'              =>  'macbook-pro-16-3',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air4',
                'name'              =>  'MacBook Air4',
                'slug'              =>  'macBook-air4',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13” 4',
                'name'              =>  'MacBook Pro 13” 4',
                'slug'              =>  'macbook-pro-13-4',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16” 4',
                'name'              =>  'MacBook Pro 16” 4',
                'slug'              =>  'macbook-pro-16-4',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Air5',
                'name'              =>  'MacBook Air5',
                'slug'              =>  'macBook-air5',
                'summary'           =>  'Power. It’s in the Air.',
                'overview'          =>  '<p>Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  89999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 13” 5',
                'name'              =>  'MacBook Pro 13” 5',
                'slug'              =>  'macbook-pro-13-5',
                'summary'           =>  'All systems Pro.',
                'overview'          =>  '<p>The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.</p><ul><li>13.3-inch Retina display</li><li>Apple M1 chip <br>Also available with Intel Core i5 or i7 processor</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 20 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  129999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'MacBook Pro 16” 5',
                'name'              =>  'MacBook Pro 16” 5',
                'slug'              =>  'macbook-pro-16-5',
                'summary'           =>  'The best for the brightest.',
                'overview'          =>  '<p>Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it’s the ultimate pro notebook for the ultimate user.</p><ul><li>16-inch Retina display with True Tone</li><li>Apple M1 chip</li><li>Up to 16GB memory</li><li>Up to 2TB storage</li><li>Up to 18 hours battery life</li></ul>',
                'description'       =>  '<h4>Small chip. Giant leap.</h4><p>It’s here. Our first chip designed specifically for Mac. Packed with an astonishing 16 billion transistors, the Apple M1 system on a chip (SoC) integrates the CPU, GPU, Neural Engine, I/O, and so much more onto a single tiny chip. With incredible performance, custom technologies, and industry-leading power efficiency,1 M1 is not just a next step for Mac — it’s another level entirely.</p> <p><strong>Up to 9x faster. Even for a 16‑core Neural Engine, that’s a lot to process.</strong> Apps on MacBook Air can use machine learning (ML) to automatically retouch photos like a pro, make smart tools such as magic wands and audio filters more accurate at auto‑detection, and so much more. That’s not just brain power — that’s the power of a full stack of ML technologies.</p>',
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  239999,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // dell
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD',
                'name'              =>  'Inspiron 15 3000 AMD',
                'slug'              =>  'inspiron-15-3000-amd',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming',
                'name'              =>  'G15 Ryzen Edition Gaming',
                'slug'              =>  'g15-ryzen-edition-gaming',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510',
                'name'              =>  'Vostro 5510',
                'slug'              =>  'vostro-5510',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD 1',
                'name'              =>  'Inspiron 15 3000 AMD 1',
                'slug'              =>  'inspiron-15-3000-amd-1',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming 1',
                'name'              =>  'G15 Ryzen Edition Gaming 1',
                'slug'              =>  'g15-ryzen-edition-gaming-1',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510 1',
                'name'              =>  'Vostro 5510 1',
                'slug'              =>  'vostro-5510-1',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD 2',
                'name'              =>  'Inspiron 15 3000 AMD 2',
                'slug'              =>  'inspiron-15-3000-amd-2',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming 2',
                'name'              =>  'G15 Ryzen Edition Gaming 2',
                'slug'              =>  'g15-ryzen-edition-gaming-2',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510 2',
                'name'              =>  'Vostro 5510 2',
                'slug'              =>  'vostro-5510-2',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD 3',
                'name'              =>  'Inspiron 15 3000 AMD 3',
                'slug'              =>  'inspiron-15-3000-amd-3',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming 3',
                'name'              =>  'G15 Ryzen Edition Gaming 3',
                'slug'              =>  'g15-ryzen-edition-gaming-3',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510 3',
                'name'              =>  'Vostro 5510 3',
                'slug'              =>  'vostro-5510-3',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD 4',
                'name'              =>  'Inspiron 15 3000 AMD 4',
                'slug'              =>  'inspiron-15-3000-amd-4',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming 4',
                'name'              =>  'G15 Ryzen Edition Gaming 4',
                'slug'              =>  'g15-ryzen-edition-gaming-4',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510 4',
                'name'              =>  'Vostro 5510 4',
                'slug'              =>  'vostro-5510-4',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            
            [
                'brand_id'          =>  2,
                'sku'               =>  'Inspiron 15 3000 AMD 5',
                'name'              =>  'Inspiron 15 3000 AMD 5',
                'slug'              =>  'inspiron-15-3000-amd-5',
                'summary'           =>  'Fuel your connections.',
                'overview'          =>  '<p>15-inch laptop optimized for fast and smooth performance to keep you connected. Ideal for productivity. Featuring 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Runs smooth. Looks sharp.</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  74800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'G15 Ryzen Edition Gaming 5',
                'name'              =>  'G15 Ryzen Edition Gaming 5',
                'slug'              =>  'g15-ryzen-edition-gaming-5',
                'summary'           =>  'Power up your skills.',
                'overview'          =>  '<p>15.6-inch gaming laptop with AMD Ryzen™ 5000 H-Series Mobile Processors, NVIDIA® GeForce® graphics and Game Shift technology.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  150364,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  2,
                'sku'               =>  'Vostro 5510 5',
                'name'              =>  'Vostro 5510 5',
                'slug'              =>  'vostro-5510-5',
                'summary'           =>  'Get down to business.',
                'overview'          =>  '<p>15.6-inch laptop designed to optimize productivity. Features dual heat pipes and up to the latest 11th Gen Intel® Core™ processors.</p>',
                'description'       =>  '<h4>Take every adventure to its peak</h4><p><strong>Power up: </strong>The latest 11th Generation Intel® Core™ processors deliver incredible responsiveness and smooth, seamless multitasking. Enjoy the extra power of optional NVIDIA® GeForce® MX450 discrete graphics with up to 2GB GDDR5 graphics memory.</p><p><strong>Keeps its cool: </strong>A redesigned thermal system unleashes the power of your device while also preserving its thin design. Dual heat pipes move heat away from your CPU and GPU, more fan blades move more air and a drop-hinge allows air to circulate underneath your laptop.</p><p><strong>Peace and quiet: </strong> With a fluid dynamic bearing system, your laptop’s fan is not only long-lasting, but it also runs quietly while keeping your device performing at its best.</p><p><strong>Better performance: </strong>Enjoy up to 512GB PCIe NVMe SSDs for responsive and stable performance on-the-go.</p><p><strong>A does-it-all port: </strong>Available on configurations with an i7 processor, a Thunderbolt™ 4 port over USB Type-C™  supports DisplayPort and Power Delivery, meaning the one port can charge the laptop, connect to peripherals, and supply monitors with a display signal.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125982,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        //　hp laptop
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC',
                'name'              =>  'HP ProBook 430 G8 Notebook PC',
                'slug'              =>  'hp-probook-430-g8-notebook-pc',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC',
                'name'              =>  'HP 250 G7 Notebook PC',
                'slug'              =>  'hp-250-g7-notebook-pc',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC1',
                'name'              =>  'HP ProBook 430 G8 Notebook PC1',
                'slug'              =>  'hp-probook-430-g8-notebook-pc1',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC1',
                'name'              =>  'HP 250 G7 Notebook PC1',
                'slug'              =>  'hp-250-g7-notebook-pc1',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC1',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC1',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc1',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC2',
                'name'              =>  'HP ProBook 430 G8 Notebook PC2',
                'slug'              =>  'hp-probook-430-g8-notebook-pc2',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC2',
                'name'              =>  'HP 250 G7 Notebook PC2',
                'slug'              =>  'hp-250-g7-notebook-pc2',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC2',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC2',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc2',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC3',
                'name'              =>  'HP ProBook 430 G8 Notebook PC3',
                'slug'              =>  'hp-probook-430-g8-notebook-pc3',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC3',
                'name'              =>  'HP 250 G7 Notebook PC3',
                'slug'              =>  'hp-250-g7-notebook-pc3',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC3',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC3',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc3',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC4',
                'name'              =>  'HP ProBook 430 G8 Notebook PC4',
                'slug'              =>  'hp-probook-430-g8-notebook-pc4',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC4',
                'name'              =>  'HP 250 G7 Notebook PC4',
                'slug'              =>  'hp-250-g7-notebook-pc4',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC4',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC4',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc4',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ProBook 430 G8 Notebook PC5',
                'name'              =>  'HP ProBook 430 G8 Notebook PC5',
                'slug'              =>  'hp-probook-430-g8-notebook-pc5',
                'summary'           =>  'Power and style for your growing business',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>With a new compact design, the HP ProBook 430 Laptop PC delivers commercial performance, security, and durability to professionals at growing companies who move from desk to meeting room to home.</p><h4>A new design that fits modern workstyles</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Protected by HP Wolf Security</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  118900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP 250 G7 Notebook PC5',
                'name'              =>  'HP 250 G7 Notebook PC5',
                'slug'              =>  'hp-250-g7-notebook-pc5',
                'summary'           =>  'Affordable notebooks with essential business features',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Get connected with the value-priced HP 250 Laptop PC with the latest technology and a durable chassis that helps protect the PC. Complete business tasks with Intel® processors[2] and essential collaboration tools.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  84900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  3,
                'sku'               =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC5',
                'name'              =>  'HP ZBook Firefly 15.6 inch G8 Mobile Workstation PC5',
                'slug'              =>  'hp-zbook-firefly-g8-mobile-workstation-pc5',
                'summary'           =>  'High-end performance for technical and creative professionals',
                'overview'          =>  '<p><ul><li>Windows 10 Pro 64</li><li>11th Generation Intel® Core™ i7 processor</li><li>16 GB memory; 512 GB SSD storage; 32 GB CPIe NVMe Intel® Optane</li><li>13.3" diagonal FHD display</li><li>Intel® Iris® Xᵉ Graphics</li></ul></p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  179900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Acer laptop
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 500',
                'name'              =>  'Predator Triton 500',
                'slug'              =>  'predator-triton-500',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 311',
                'name'              =>  'Acer Chromebook Spin 311',
                'slug'              =>  'acer-chromebook-spin-311',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 5',
                'name'              =>  'Aspire 5',
                'slug'              =>  'aspire-5',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 5001',
                'name'              =>  'Predator Triton 5001',
                'slug'              =>  'predator-triton-5001',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 3111',
                'name'              =>  'Acer Chromebook Spin 3111',
                'slug'              =>  'acer-chromebook-spin-3111',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 51',
                'name'              =>  'Aspire 51',
                'slug'              =>  'aspire-51',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 5002',
                'name'              =>  'Predator Triton 5002',
                'slug'              =>  'predator-triton-5002',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 3112',
                'name'              =>  'Acer Chromebook Spin 3112',
                'slug'              =>  'acer-chromebook-spin-3112',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 52',
                'name'              =>  'Aspire 52',
                'slug'              =>  'aspire-52',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 5003',
                'name'              =>  'Predator Triton 5003',
                'slug'              =>  'predator-triton-5003',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 3113',
                'name'              =>  'Acer Chromebook Spin 3113',
                'slug'              =>  'acer-chromebook-spin-3113',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 53',
                'name'              =>  'Aspire 53',
                'slug'              =>  'aspire-53',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 5004',
                'name'              =>  'Predator Triton 5004',
                'slug'              =>  'predator-triton-5004',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 3114',
                'name'              =>  'Acer Chromebook Spin 3114',
                'slug'              =>  'acer-chromebook-spin-3114',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 54',
                'name'              =>  'Aspire 54',
                'slug'              =>  'aspire-54',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Predator Triton 5005',
                'name'              =>  'Predator Triton 5005',
                'slug'              =>  'predator-triton-5005',
                'summary'           =>  'FORGED THIN',
                'overview'          =>  '<p>Model Name: PT515-51-73Z5</p><p>Part Number: NH.Q4WAA.006</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  269900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Acer Chromebook Spin 3115',
                'name'              =>  'Acer Chromebook Spin 3115',
                'slug'              =>  'acer-chromebook-spin-3115',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: CP311-3H-K23X</p><p>Part Number: NX.HUVAA.005</p><p>The Acer Chromebook Spin 311 is the ideal laptop for all ages from the very young upwards. With its safety certification, state-of-the-art low-energy consuming processor, military standard specs and a long battery life, it can stand up to the daily rigors and intense usage of students inside or outside the classroom.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  29900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  4,
                'sku'               =>  'Aspire 55',
                'name'              =>  'Aspire 55',
                'slug'              =>  'aspire-55',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Model Name: A515-43-R6DE</p><p>Part Number: NX.HG8AA.002</p><p>AMD Ryzen 7 (3700U, 2.30 GHz, 4 MB) - 15.6" LED - 16:9 Full HD - LCD - ComfyView - AMD Radeon™ RX Vega 10 - 8 GB DDR4 SDRAM - No - Color Pure Silver - Weight (Approximate) 4.19 lb - Maximum Battery Run Time 7 Hour</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  64900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // lenovo laptop
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 2080',
                'name'              =>  'Legion 7i (15") with RTX 2080',
                'slug'              =>  'legion-7i-with-rtx-2080',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 20801',
                'name'              =>  'Legion 7i (15") with RTX 20801',
                'slug'              =>  'legion-7i-with-rtx-20801',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel1',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel1',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel1',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel1',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel1',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel1',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 20802',
                'name'              =>  'Legion 7i (15") with RTX 20802',
                'slug'              =>  'legion-7i-with-rtx-20802',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel2',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel2',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel2',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel2',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel2',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel2',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 20803',
                'name'              =>  'Legion 7i (15") with RTX 20803',
                'slug'              =>  'legion-7i-with-rtx-20803',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel3',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel3',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel3',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel3',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel3',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel3',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 20804',
                'name'              =>  'Legion 7i (15") with RTX 20804',
                'slug'              =>  'legion-7i-with-rtx-20804',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel4',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel4',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel4',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel4',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel4',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel4',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'Legion 7i (15") with RTX 20805',
                'name'              =>  'Legion 7i (15") with RTX 20805',
                'slug'              =>  'legion-7i-with-rtx-20805',
                'summary'           =>  'keeps up with you and your life all day long.',
                'overview'          =>  '<p>Team SoloMid Partnership</p><p>Legion gaming accessories are crafted to help you win, delivering legendary performance, reliability, and aesthetics. Whether you need an armored bag to protect your gear, a precision mouse to improve your aim, or a tactile keyboard for fearlessly commanding your siege, each addition makes a powerful ally on your path to victory</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  271900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad X1 Extreme Gen 3 Intel5',
                'name'              =>  'ThinkPad X1 Extreme Gen 3 Intel5',
                'slug'              =>  'thinkpad-x1-extreme-gen-3-intel5',
                'summary'           =>  '10th Generation Intel® Core™ i7-10750H Processor.',
                'overview'          =>  '<p>10th Gen Intel® H Core™ processors are a powerhouse perfect for creators, gaming enthusiasts and other demanding multitaskers. Creators appreciate the lightweight portability and stunning graphics performance from the ThinkPad X1 Extreme’s NVIDIA® GeForce® GTX 1650TI GPU. IT admins love the ThinkPad name and all that it produces—robust security and privacy features, trusted reliability, and craftsmanship renowned throughout the world.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  148900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  5,
                'sku'               =>  'ThinkPad P1 Workstation Gen 4 Intel5',
                'name'              =>  'ThinkPad P1 Workstation Gen 4 Intel5',
                'slug'              =>  'thinkpad-p1-workstation-gen-4-intel5',
                'summary'           =>  'Stylish, lightweight, & packed with power.',
                'overview'          =>  '<p>The ThinkPad P1 Gen 4 performance laptop blends form and function with an elegant carbon-fiber weave and lightweight design, starting at just 1.8kg / 3.99lbs. The stylish exterior conceals impressive performance with the latest 11th Gen Intel® Core™ or Xeon® processors. Plus, choose professional NVIDIA® RTX™ graphics—supporting up to the NVIDIA® RTX™ A5000 backed by ISV certifications or the powerful NVIDIA® GeForce RTX™ 3070 or 3080.</p>',
                'description'       =>  '<p>Our lightest 15” ZBook provides true mobility for people who push the typical business PC past its breaking point. In the office or in the field, with pro-level performance and a full-size numeric keypad, you have everything to review work and manage projects from anywhere.</p><h4>Powered for business</h4><p>The compact, light, 16mm chassis with aluminum components is easy to carry from place to place. Enjoy an over 84-percent screen-to-body ratio and a quiet, responsive keyboard.</p><h4>Durable mobile design</h4><p>HP Wolf Security for Business creates a hardware-enforced, always-on, resilient defense. From the BIOS to the browser, above, in, and below the OS, these constantly evolving solutions help protect your PC from modern threats.</p><h4>Power that lasts</h4><p>Equipped with the latest Intel® processor[2] and high- performance memory, the HP ProBook 430 drives performance with long battery life and high-speed solid-state drives.</p><hr><h4>Return & exchange information</h4><p>HP.com will accept returns or exchanges for this product up to 30 days after delivery. A restocking fee may apply. For details, please visit: https://www.hp.com/us-en/shop/cv/returnsandexchanges.</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  339900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Apple phone
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'iPhone XR',
                'name'              =>  'iPhone XR',
                'slug'              =>  'iphone-xr',
                'summary'           =>  '早い話、速いです。',
                'overview'          =>  '<p>iPhone XR (PRODUCT)REDを買うたびに、COVID-19対策のために 「世界エイズ・結核・マラリア対策基金（グローバルファンド）」に 直接寄付されます。</p>',
                'description'       =>  '<p><h4>同梱物</h4>Appleは、環境に関する目標の達成に向けた取り組みを続けています。その一環として、iPhone XRには電源アダプタとEarPodsが付属していません。製品には、USB‑C電源アダプタとコンピュータのポートに対応する、高速充電ができるUSB-C - Lightningケーブルが同梱されています。</p><p>このiPhoneに対応する、今お使いのUSB-A - Lightningケーブル、電源アダプタ、ヘッドフォンを再利用することをおすすめしますが、新しいApple電源アダプタやヘッドフォンが必要な場合は、購入することができます。</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  60280,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'iPhone 11',
                'name'              =>  'iPhone 11',
                'slug'              =>  'iphone-11',
                'summary'           =>  '早い話、速いです。',
                'overview'          =>  '<p>iPhone 11 (PRODUCT)REDを買うたびに、COVID-19対策のために 「世界エイズ・結核・マラリア対策基金（グローバルファンド）」に 直接寄付されます。</p>',
                'description'       =>  '<p><h4>同梱物</h4>Appleは、環境に関する目標の達成に向けた取り組みを続けています。その一環として、iPhone 11には電源アダプタとEarPodsが付属していません。製品には、USB‑C電源アダプタとコンピュータのポートに対応する、高速充電ができるUSB-C - Lightningケーブルが同梱されています。</p><p>このiPhoneに対応する、今お使いのUSB-A - Lightningケーブル、電源アダプタ、ヘッドフォンを再利用することをおすすめしますが、新しいApple電源アダプタやヘッドフォンが必要な場合は、購入することができます。</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  71280,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'iPhone SE',
                'name'              =>  'iPhone SE',
                'slug'              =>  'iphone-se',
                'summary'           =>  '早い話、速いです。',
                'overview'          =>  '<p>iPhone SE (PRODUCT)REDを買うたびに、COVID-19対策のために 「世界エイズ・結核・マラリア対策基金（グローバルファンド）」に 直接寄付されます。</p>',
                'description'       =>  '<p><h4>同梱物</h4>Appleは、環境に関する目標の達成に向けた取り組みを続けています。その一環として、iPhone SEには電源アダプタとEarPodsが付属していません。製品には、USB‑C電源アダプタとコンピュータのポートに対応する、高速充電ができるUSB-C - Lightningケーブルが同梱されています。</p><p>このiPhoneに対応する、今お使いのUSB-A - Lightningケーブル、電源アダプタ、ヘッドフォンを再利用することをおすすめしますが、新しいApple電源アダプタやヘッドフォンが必要な場合は、購入することができます。</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  49280,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'iPhone 12',
                'name'              =>  'iPhone 12',
                'slug'              =>  'iphone-12',
                'summary'           =>  '早い話、速いです。',
                'overview'          =>  '<p>iPhone 12とiPhone 12 mini (PRODUCT)REDを買うたびに、COVID-19対策のために 「世界エイズ・結核・マラリア対策基金（グローバルファンド）」に 直接寄付されます。</p>',
                'description'       =>  '<p><h4>同梱物</h4>Appleは、環境に関する目標の達成に向けた取り組みを続けています。その一環として、iPhone 12とiPhone 12 miniには電源アダプタとEarPodsが付属していません。製品には、USB‑C電源アダプタとコンピュータのポートに対応する、高速充電ができるUSB-C - Lightningケーブルが同梱されています。</p><p>このiPhoneに対応する、今お使いのUSB-A - Lightningケーブル、電源アダプタ、ヘッドフォンを再利用することをおすすめしますが、新しいApple電源アダプタやヘッドフォンが必要な場合は、購入することができます。</p><p><h4>MagSafe。すべてが、ピタッと。</h4>MagSafeは、アクセサリの新しいエコシステムです。装着が簡単で、ワイヤレス充電がよりすばやくできます。組み合わせは数えきれないほど。どんなスタイルにもマッチします。</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  82280,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  1,
                'sku'               =>  'iPhone 12 Pro',
                'name'              =>  'iPhone 12 Pro',
                'slug'              =>  'iphone-12-pro',
                'summary'           =>  '早い話、速いです。',
                'overview'          =>  '<p>iPhone 12 ProとiPhone 12 Pro Max (PRODUCT)REDを買うたびに、COVID-19対策のために 「世界エイズ・結核・マラリア対策基金（グローバルファンド）」に 直接寄付されます。</p>',
                'description'       =>  '<p><h4>同梱物</h4>Appleは、環境に関する目標の達成に向けた取り組みを続けています。その一環として、iPhone 12 ProとiPhone 12 Pro Maxには電源アダプタとEarPodsが付属していません。製品には、USB‑C電源アダプタとコンピュータのポートに対応する、高速充電ができるUSB-C - Lightningケーブルが同梱されています。</p><p>このiPhoneに対応する、今お使いのUSB-A - Lightningケーブル、電源アダプタ、ヘッドフォンを再利用することをおすすめしますが、新しいApple電源アダプタやヘッドフォンが必要な場合は、購入することができます。</p><p><h4>MagSafe。すべてが、ピタッと。</h4>MagSafeは、アクセサリの新しいエコシステムです。装着が簡単で、ワイヤレス充電がよりすばやくできます。組み合わせは数えきれないほど。どんなスタイルにもマッチします。</p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  117480,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Samsung phones
        Product::create(
            [
                'brand_id'          =>  6,
                'sku'               =>  'Galaxy Z Fold3 5G',
                'name'              =>  'Galaxy Z Fold3 5G',
                'slug'              =>  'galaxy-z-fold3-5g',
                'summary'           =>  'Enjoy the highest online instant trade-in values',
                'overview'          =>  '<p>When the 7.6-inch Infinity Flex Display lights up like magic, the front camera disappears — leaving behind nothing but your YouTube video.* With less bezel, no notch and an Under Display Camera, its the worlds first foldable phone with an uninterrupted view.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  114900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  6,
                'sku'               =>  'Galaxy Z Flip3 5G',
                'name'              =>  'Galaxy Z Flip3 5G',
                'slug'              =>  'galaxy-z-flip3-5g',
                'summary'           =>  'A full-sized smartphone that folds to fit small-sized pockets.',
                'overview'          =>  '<p>When the 7.6-inch Infinity Flex Display lights up like magic, the front camera disappears — leaving behind nothing but your YouTube video.* With less bezel, no notch and an Under Display Camera, its the worlds first foldable phone with an uninterrupted view.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  34900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  6,
                'sku'               =>  'Galaxy S21 Ultra 5G',
                'name'              =>  'Galaxy S21 Ultra 5G',
                'slug'              =>  'galaxy-s21-ultra-5g',
                'summary'           =>  'The real metal finish on the main camera adds unity to the design.',
                'overview'          =>  '<p>The New Dual Zoom lens system is faster and sharper than any zoom before, featuring a 10MP Dual telephoto lens4 and enhanced Super Resolution. It even has a Zoom Lock feature so you can stabilize shots while zooming. Now zoom up to 100X with clarity and precision.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  39900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  6,
                'sku'               =>  'Galaxy XCover Pro 64GB',
                'name'              =>  'Galaxy XCover Pro 64GB',
                'slug'              =>  'galaxy-xcover-pro-64gb',
                'summary'           =>  'Work Anywhere. Without Sacrifice.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  42400,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // sony phones
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'Sony Xperia Pro',
                'name'              =>  'Sony Xperia Pro',
                'slug'              =>  'sony-xperia-pro',
                'summary'           =>  'Native Sony Alpha camera support.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  249800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'Sony Xperia 10 III',
                'name'              =>  'Sony Xperia 10 III',
                'slug'              =>  'sony-xperia-10-iii',
                'summary'           =>  'Corning Gorilla Glass 6.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  38700,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'Sony Xperia 5 III',
                'name'              =>  'Sony Xperia 5 III',
                'slug'              =>  'sony-xperia-5-iii',
                'summary'           =>  'Qualcomm SM8350 Snapdragon 888 5G.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  99900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'Sony Xperia 1 III',
                'name'              =>  'Sony Xperia 1 III',
                'slug'              =>  'sony-xperia-1-iii',
                'summary'           =>  'OLED, 1B colors, 120Hz, HDR BT.2020.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  125700,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'Sony Xperia 10 III Lite',
                'name'              =>  'Sony Xperia 10 III Lite',
                'slug'              =>  'sony-xperia-10-iii-lite',
                'summary'           =>  'Li-Po 4500 mAh, non-removable.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  69900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Xiaomi phones
        Product::create(
            [
                'brand_id'          =>  8,
                'sku'               =>  'Xiaomi Redmi Note 10T 5G',
                'name'              =>  'Xiaomi Redmi Note 10T 5G',
                'slug'              =>  'xiaomi-redmi-note-10t-5g',
                'summary'           =>  'Corning Gorilla Glass 3.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  39900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  8,
                'sku'               =>  'Xiaomi Redmi 10',
                'name'              =>  'Xiaomi Redmi 10',
                'slug'              =>  'xiaomi-redmi-10',
                'summary'           =>  'Corning Gorilla Glass 3.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  33900,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  8,
                'sku'               =>  'Xiaomi Redmi Note 8',
                'name'              =>  'Xiaomi Redmi Note 8',
                'slug'              =>  'xiaomi-redmi-note-8',
                'summary'           =>  'Corning Gorilla Glass 5.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  24000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  8,
                'sku'               =>  'Xiaomi Mi 11X Pro',
                'name'              =>  'Xiaomi Mi 11X Pro',
                'slug'              =>  'xiaomi-mi-11x-pro',
                'summary'           =>  'Corning Gorilla Glass 5.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  38000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Canon cameras
        Product::create(
            [
                'brand_id'          =>  9,
                'sku'               =>  'EOS Kiss X10i',
                'name'              =>  'EOS Kiss X10i',
                'slug'              =>  'eos-kiss-x10i',
                'summary'           =>  'Digital AF/AE single-lens reflex camera.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  142000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  9,
                'sku'               =>  'EOS-1D X Mark III',
                'name'              =>  'EOS-1D X Mark III',
                'slug'              =>  'eos-1d-x-mark-iii',
                'summary'           =>  'In addition to smooth, high-resolution 4K/60P video capture.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  720000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  9,
                'sku'               =>  'EOS 90D',
                'name'              =>  'EOS 90D',
                'slug'              =>  'eos-90d',
                'summary'           =>  'In addition to smooth, high-resolution 4K/60P video capture.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  217000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  9,
                'sku'               =>  'EOS REBEL SL3',
                'name'              =>  'EOS REBEL SL3',
                'slug'              =>  'eos-rebel-sl3',
                'summary'           =>  'In addition to smooth, high-resolution 4K/60P video capture.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  62000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Nikon cameras
        Product::create(
            [
                'brand_id'          =>  10,
                'sku'               =>  'D6',
                'name'              =>  'D6',
                'slug'              =>  'd6',
                'summary'           =>  'ニコン史上最強のAF性能と高速連続撮影.',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  713000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  10,
                'sku'               =>  'D850',
                'name'              =>  'D850',
                'slug'              =>  'd850',
                'summary'           =>  'FXフォーマットベース フルフレームの4K',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  304000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  10,
                'sku'               =>  'D810A',
                'name'              =>  'D810A',
                'slug'              =>  'd810a',
                'summary'           =>  '天体撮影に特化した機能',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  376200,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  10,
                'sku'               =>  'D780',
                'name'              =>  'D780',
                'slug'              =>  'd780',
                'summary'           =>  '高感度で実現するノイズを抑制した高い解像感',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  50,
                'shipping_fee'      =>  0,
                'price'             =>  248300,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Accessories
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'SONY WF 1000XM4',
                'name'              =>  'SONY WF 1000XM4',
                'slug'              =>  'sony-wf-1000xm4',
                'summary'           =>  'WF-1000XM3よりもさらに高いノイズキャンセリング性能',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  33000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'SONY WH 1000XM4',
                'name'              =>  'SONY WH 1000XM4',
                'slug'              =>  'sony-wh-1000xm4',
                'summary'           =>  'Extremeがリアルタイムで音楽を解析、最適な音にアップスケーリング。',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  42000,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'SONY WF 1000XM3',
                'name'              =>  'SONY WF 1000XM3',
                'slug'              =>  'sony-wf-1000xm3',
                'summary'           =>  'ワイヤレスでもハイレゾ相当の高音質を実現',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  25800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  7,
                'sku'               =>  'SONY MDR-ZX110NC',
                'name'              =>  'SONY MDR-ZX110NC',
                'slug'              =>  'sony-mdr-zx110nc',
                'summary'           =>  'ノイズキャンセリングヘッドホン',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  3820,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // Sennheiser headphones
        Product::create(
            [
                'brand_id'          =>  11,
                'sku'               =>  'HD 400S',
                'name'              =>  'HD 400S',
                'slug'              =>  'hd-400s',
                'summary'           =>  '密閉型 リモコン付き',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  8655,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  11,
                'sku'               =>  'HD 559',
                'name'              =>  'HD 559',
                'slug'              =>  'hd-559',
                'summary'           =>  'オープン型',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  10791,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  11,
                'sku'               =>  'HD 598',
                'name'              =>  'HD 598',
                'slug'              =>  'hd-598',
                'summary'           =>  'オープン型',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  16800,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );
        Product::create(
            [
                'brand_id'          =>  11,
                'sku'               =>  'HD 600',
                'name'              =>  'HD 600',
                'slug'              =>  'hd-600',
                'summary'           =>  'オープン型',
                'overview'          =>  '<p>This military-grade phone is built to stand up to challenges the real world dishes out, while providing an easy-to-use and familiar environment.</p><p>Built for the future of work with the ability to do more with a single device.</p>',
                'description'       =>  '<p><h4>Easy Multitasking</h4>Your phone delivers PC-like productivity, but folds in your palm for portability. Flex mode provides multidimensional experience, so you can do things faster, better and more efficiency.*</p><p><small>*Certain applications may not support Flex mode.</small></p>',
                // <p><strong></strong></p> ’
                'quantity'          =>  20,
                'shipping_fee'      =>  0,
                'price'             =>  39500,
                'status'            =>  1,
                'featured'          =>  1,
            ]
        );

        // product category
        for($i = 1; $i <= 90; $i++){
            DB::table('product_categories')->insert([
                'category_id'   => 2,
                'product_id'    => $i,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
        for($i = 91; $i <= 108; $i++){
            DB::table('product_categories')->insert([
                'category_id'   => 3,
                'product_id'    => $i,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
        for($i = 109; $i <= 116; $i++){
            DB::table('product_categories')->insert([
                'category_id'   => 4,
                'product_id'    => $i,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
        for($i = 117; $i <= 124; $i++){
            DB::table('product_categories')->insert([
                'category_id'   => 5,
                'product_id'    => $i,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }

        // product images
        $i = 1;
        foreach($slugs as $slug) {
            ProductImage::create([
                'full'          => 'products/'.$slug.'.jpg',
                'product_id'    => $i,
            ]);
            $i = $i + 1;
        }

    }
}
