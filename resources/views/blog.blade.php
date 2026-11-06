<x-layout>
    <x-section>
        <div class="card card-border bg-base-100 w-96">
  <div class="card-body">
            @foreach ($pencapaian as $post)
                <h2>{{ $post['Judul'] }}</h2>
                <h3>{{ $post['Tanggal'] }}</h3>
                <p>{{ $post['Deskripsi'] }}</p>
            @endforeach
        </div>
        </div>
    </x-section>
</x-layout>