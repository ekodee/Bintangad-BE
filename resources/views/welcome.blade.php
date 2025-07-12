<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Portal - Sistem Percetakan</title>
        
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            'sans': ['Inter', 'system-ui', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 min-h-screen font-sans">
        <!-- Main Content -->
        <main class="flex items-center justify-center px-6 py-12">
            <div class="max-w-4xl w-full">
                
                <!-- Welcome Card -->
                <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl">
                    
                    <!-- Logo & Brand -->
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <!-- Printer Icon -->
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM16 19H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/>
                            </svg>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">
                            Bintang Advertising
                        </h1>
                        <p class="text-xl text-white/80">
                            Sistem Manajemen Percetakan
                        </p>
                    </div>

                    <!-- Welcome Message -->
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                            Selamat Datang, Admin!
                        </h2>
                        <p class="text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">
                            Portal administrasi untuk mengelola seluruh operasional percetakan Anda. 
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        
                        <!-- Feature 1 -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-white mb-2">Manajemen Pesanan</h3>
                            <p class="text-sm text-white/70">Kelola semua pesanan printing</p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-white mb-2">Kontrol Kualitas</h3>
                            <p class="text-sm text-white/70">Monitor kualitas hasil print</p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22,21H2V3H4V19H6V10H10V19H12V6H16V19H18V14H22V21Z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-white mb-2">Laporan & Analitik</h3>
                            <p class="text-sm text-white/70">Dashboard performa bisnis</p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.22,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.22,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.68 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-white mb-2">Pengaturan</h3>
                            <p class="text-sm text-white/70">Konfigurasi sistem</p>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="text-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" 
                                   class="inline-flex items-center gap-3 px-8 py-4 bg-white text-purple-600 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"/>
                                    </svg>
                                    Masuk ke Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" 
                                   class="inline-flex items-center gap-3 px-8 py-4 bg-white text-purple-600 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
                                    </svg>
                                    Login Admin
                                </a>
                            @endauth
                        @else
                            <a href="/admin/login" 
                               class="inline-flex items-center gap-3 px-8 py-4 bg-white text-purple-600 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
                                </svg>
                                Login Admin
                            </a>
                        @endif
                    </div>
                </div>

                <!-- System Status -->
                <div class="flex justify-center items-center gap-8 mt-8 flex-wrap">
                    <div class="flex items-center gap-2 text-white/80">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm">Sistem Online</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/80">
                        <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
                        <span class="text-sm">Database Aktif</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/80">
                        <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse"></div>
                        <span class="text-sm">Keamanan Terjaga</span>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>