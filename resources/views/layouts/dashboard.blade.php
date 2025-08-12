{{-- resources/views/layouts/dashboard.blade.php --}}
<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-72 bg-blue-700 text-white min-h-screen p-6">
            <div class="flex items-center space-x-3 mb-10">
                <img src="{{ asset('images/logo.png') }}" class="w-10 h-10">
                <span class="font-bold text-sm leading-tight">
                    SISTEM INFORMASI SEKSI KESELAMATAN LLAJ KAB. BOGOR
                </span>
            </div>
            <nav class="space-y-2">
                <a href={{ route('dashboard') }} class="flex items-center space-x-2 p-2 bg-blue-900 rounded">
                    <span>🏠</span><span>Beranda</span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-blue-800 rounded">
                    <span>🛣️</span><span>Inspeksi Jalan</span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-blue-800 rounded">
                    <span>📄</span><span>Penilaian PO</span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-blue-800 rounded">
                    <span>👶</span><span>Sosialisasi Anak</span>
                </a>
                <a href="{{ route('laporanmasyarakat.index') }}" class="flex items-center space-x-2 p-2 hover:bg-blue-800 rounded">
                    <span>📢</span><span>Laporan Masyarakat</span>
                </a>
                <a href="#" class="flex items-center space-x-2 p-2 hover:bg-blue-800 rounded">
                    <span>🚪</span><span>Keluar</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-6">
            @yield('content')
        </main>
    </div>
</x-app-layout>
