<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">This is Blog Page Content</h3>
    <br>
    {{-- artikel 1 --}}
    <article>
        <h2>Masa Depan Kecerdasan Buatan: Dari Asisten Virtual hingga Simulated Universe</h2>
        <p><strong>Penulis:</strong> {{ $writer1 }} | <strong>Tanggal:</strong> {{ $date1 }}</p>
        <p>
            Kecerdasan buatan (AI) terus berkembang dengan pesat, mengubah cara kita bekerja, berkomunikasi, dan bahkan bermain. 
            Dari chatbot canggih seperti ChatGPT hingga sistem yang mampu mensimulasikan dunia digital, AI kini lebih dari sekadar alat bantu.
        </p>
    </article>
    <br>
    {{-- artikel 2 --}}
    <article>
        <h2>5 Teknologi Web Development yang Wajib Diketahui di 2025</h2>
        <p><strong>Penulis:</strong> {{ $writer2 }} | <strong>Tanggal:</strong> {{ $date2 }}</p>
        <p>
            Dunia web development terus berkembang, dengan tren dan teknologi baru yang muncul setiap tahun. 
            Jika kamu seorang developer atau tertarik di bidang ini, berikut adalah lima teknologi yang wajib kamu ketahui di 2025!
        </p>
    </article>
</x-layout>
