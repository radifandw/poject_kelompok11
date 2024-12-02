<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-zinc-800">
    <div class="container mx-auto px-4">

        <!-- Navigation -->
        <nav class="flex justify-between items-center py-4">
            <div class="text-white text-3xl font-bold font-['Montserrat Alternates']">LOGO</div>
            <div class="flex space-x-6 items-center">
                <a href="#" class="text-white text-sm font-semibold">Home</a>
                <a href="#" class="text-white text-sm">Daftar Produk</a>
                <a href="#" class="text-white text-sm">Riwayat Transaksi</a>
                <a href="#" class="text-white text-sm">About us</a>
                <button class="bg-amber-500 text-white text-sm font-semibold px-6 py-2.5 rounded-2xl shadow">
                    Get started
                </button>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="flex items-center mt-10">
            <div class="w-1/2 space-y-6">
                <p class="text-amber-500 text-xl uppercase tracking-widest">Selamat Datang</p>
                <h1 class="text-6xl text-white font-[Poppins-Bold]">
                Restoran Nasi <br> <span class="text-amber-500">Goreng Nusantara.</span>
                </h1>

                <p class="text-stone-50 text-base">
                "Nasi Goreng Nusantara, lebih dari sekadar hidangan—ini adalah perpaduan sempurna cita rasa tradisional Indonesia dengan sentuhan modern yang memanjakan lidah. Dari aroma rempah khas hingga kelezatan setiap suapan, setiap piring menceritakan kekayaan budaya Nusantara yang penuh warna."
                </p>
                <div class="flex space-x-4">
                    <button class="bg-amber-500 text-white text-base font-semibold px-8 py-3.5 rounded-3xl shadow">
                        About Us
                    </button>
                    <button class="border border-gray-400 text-gray-400 text-base font-semibold px-8 py-3.5 rounded-full">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="w-1/2 flex justify-end space-x-4">
                <img src="https://via.placeholder.com/325x599"
                    class="transform rotate-[4.96deg] rounded-3xl shadow w-80 h-96">
                <img src="https://via.placeholder.com/339x415"
                    class="transform -rotate-[7.55deg] rounded-3xl shadow w-80 h-96">
            </div>
        </section>

        <!-- Services Section -->
        <section class="mt-20 text-center">
            <p class="text-amber-500 text-xl uppercase tracking-widest">Our Service</p>
            <h2 class="text-4xl text-white mt-4">We Are More Than Multiple Service</h2>
        </section>

        <!-- Dishes Section -->
        <section class="grid grid-cols-3 gap-6 mt-10">
            <div class="bg-amber-500 rounded-3xl p-6 text-center">
                <div class="w-60 h-60 bg-stone-500 rounded-full mx-auto mb-6"></div>
                <h3 class="text-5xl font-bold text-gray-900">Minced Meat</h3>
                <p class="text-xl text-gray-900 mt-4">
                    Made with the best quality beef and local peanut sauce sprinkled with vegetables
                </p>
            </div>
            <div class="relative">
                <div class="bg-stone-300 rounded-3xl overflow-hidden">
                    <img src="https://via.placeholder.com/625x600" class="w-full h-96 object-cover">
                </div>
                <div class="bg-zinc-800 rounded-3xl p-6 text-center mt-6">
                    <h3 class="text-5xl font-bold text-white">Extra Lunch</h3>
                    <p class="text-xl text-white mt-4">
                        Some combinations of french fries, toast and sunny side up egg that are very appetizing
                    </p>
                </div>
            </div>
            <div class="bg-zinc-800 rounded-3xl p-6 text-center">
                <div class="w-60 h-60 bg-stone-600 rounded-full mx-auto mb-6"></div>
                <h3 class="text-5xl font-bold text-white">Bread Egg</h3>
                <p class="text-xl text-white mt-4">
                    The food that is devoted to breakfast this morning consists of bread stuffed with various kinds
                </p>
            </div>
        </section>

        <!-- Blog Section -->
        <section class="mt-20">
            <div class="text-center">
                <p class="text-amber-500 text-xl uppercase tracking-widest">OUR BLOG</p>
                <h2 class="text-4xl text-white mt-4">Latest Post Blog</h2>
            </div>
            <div class="grid grid-cols-3 gap-6 mt-10">
                <!-- Blog Post -->
                <!-- Repeatable Structure for Each Blog Post -->
                <div class="bg-stone-300 rounded-3xl overflow-hidden">
                    <div class="relative">
                        <div class="bg-stone-300 h-56"></div>
                        <div class="absolute top-[201px] right-4 bg-amber-500 rounded-3xl px-6 py-2.5">
                            <span class="text-white text-xs font-semibold">Food</span>
                        </div>
                    </div>
                    <div class="p-4 text-white">
                        <div class="flex justify-between text-xs font-bold mb-4">
                            <span>July 23, 2022 Admin</span>
                            <span>By Admin</span>
                        </div>
                        <h3 class="text-xl font-bold mb-4">The Best Chicken Tinga Tacos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="mt-20 bg-zinc-800 text-white py-10">
            <class="container mx-auto grid grid-cols-3 gap-10">
            <div class="text-center">
    <h4 class="text-2xl font-bold mb-6">About Us</h4>
    <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="#" class="text-sm font-bold uppercase mt-4 block">Read More</a>
</div>

<br>

            <div class="text-center">
                <h4 class="text-2xl font-bold mb-6">Contact</h4>
                <div class="flex items-center justify-center mb-6">
                    <div class="w-14 h-14 bg-zinc-300 rounded-full mr-4"></div>
                    <div>
                        <div class="text-base font-bold">Smith Newd</div>
                        <div class="text-sm text-amber-500">FOUNDER</div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
</body>

</html>
