@extends('layouts.landing')

@section('title', 'About Us')

@section('content')
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">About Us</h1>
            <p class="text-gray-600 text-lg">Discover who we are and what we stand for.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Section -->
            <div>
                <img src="{{ asset('images/macam-macam-kandungan-pada-skincare-dan-manfaatnya.jpg') }}" alt="About Us" class="rounded-lg shadow-lg w-full">
            </div>

            <!-- Text Section -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. 
                    Nam vestibulum, arcu vitae elementum dignissim, sapien eros bibendum elit, nec luctus est eros sed libero. 
                    Suspendisse potenti. Vivamus luctus diam id sapien rhoncus, a fermentum ipsum volutpat.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                    Integer eget arcu eget turpis sollicitudin suscipit. Cras quis nulla id orci malesuada porttitor a vitae nunc. 
                    Ut eget nulla sed ligula efficitur venenatis non et eros.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Mission</h2>
            <p class="text-gray-600 text-lg">To deliver quality products and services that make a difference.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/pngtree-quality-icon-certified-check-mark-vector-sign-award-and-warranty-png-image_6076769.jpg') }}" alt="Quality" class="w-16 h-16 mx-auto">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Quality</h3>
                <p class="text-gray-600">We strive to provide the highest quality products to our customers.</p>
            </div>
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/912278.png') }}" alt="Innovation" class="w-16 h-16 mx-auto">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Innovation</h3>
                <p class="text-gray-600">We embrace creativity and innovation in all that we do.</p>
            </div>
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/images (2).png') }}" alt="Community" class="w-16 h-16 mx-auto">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Community</h3>
                <p class="text-gray-600">We are committed to giving back and making a positive impact.</p>
            </div>
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/images (3).png') }}" alt="Sustainability" class="w-16 h-16 mx-auto">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Sustainability</h3>
                <p class="text-gray-600">We prioritize sustainable practices to protect our planet.</p>
            </div>
        </div>
    </div>
</section>
@endsection
