<x-layout>
    <x-section>
        <div>
            @foreach ($sontent as $contents)
                <h2>{{ $contents['Halaman'] }}</h2>
                <p>{{ $contents['Fungsi'] }}</p>
            @endforeach
        </div>

        <div>
            @foreach ($teknologi as $tekno)
                <h2>{{ $tekno['Teknologi'] }}</h2>
                <p>{{ $tekno['Fungsi'] }}</p>
            @endforeach
        </div>

        <div>
            @foreach ($pembuat as $imt)
                <h2>{{ $imt['Nama'] }}</h2>
                <p>{{ $imt['Nim'] }}</p>
            @endforeach
        </div>
    </x-section>
</x-layout>