@extends('template.template')
@section('content')
<main id="site-main">
    {{-- Section Berita Top--}}
    <section class="article-area container mx-auto pt-10">
        <div class="area-title text-center font-poppins slide-in">
            <span class="text-red">Berita Terbaru kami</span>
            <h1 class="text-lg text-dark">Berita diupdate setiap Minggu</h1>
        </div>
    
    <div class="grid cols-1 lg-cols-3 font-poppins py-10">
        <div class="card animate__animated animate__fadeInLeft">
            <article class="btn-shadow">
                <div class="imgContainer">
                    <img src="{{$latest[0]->image}}" class="w-100" alt="" style="object-fit: 1/1">
                </div>
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Di post {{$latest[0]->created_at->diffForHumans()}}</span>
                    <a href="/blog/{{$latest[0]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[0]->title)}}</h2>
                    </a>
                    <p class="overflow no-white elipsis"> Ditulis oleh {{$latest[0]->user->name}}</p>
                </div>
            </article>
        </div>
        
        <div class="card animate__animated animate__fadeIn">
            <article class="btn-shadow">
                <img src="{{$latest[1]->image}}" class="w-100" alt="" style="aspect-ratio : 1/1">
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Di post {{$latest[1]->created_at->diffForHumans()}} </span>
                    <a href="{{$latest[1]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[1]->title)}}</h2>
                    </a>
                    <p class="overflow no-white elipsis">Ditulis oleh {{$latest[1]->user->name}}</p>
                </div>
            </article>
        </div>
        <div class="card animate__animated animate__fadeInRight">
            <article class="btn-shadow">
                <img src="{{$latest[2]->image}}" class="w-100" alt="" style="aspect-ratio : 1/1">
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Di post {{$latest[2]->created_at->diffForHumans()}}</span>
                    <a href="{{$latest[2]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[2]->title)}}</h2>
                    </a>
                    <p class="overflow no-white elipsis">Ditulis oleh {{$latest[2]->user->name}}</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="article-area container mx-auto pt-5">
    <div class="area-title text-center font-poppins slide-in">
        <span class="text-red">List Berita lainnya</span>
        <h1 class="text-lg text-dark">Berita berita lainnya</h1>
        <ul id="beritaSpot" class="mt-3">
            @foreach ($latest2 as $item)
                <li>
                    <a href="/blog/{{$item->slug}}">{{strtoupper($item->title)}}</a>
                    <span class="text-sm text-dark">Di pos {{$item->created_at->diffForHumans()}}</span>
                    <span class="text-sm text-gray">Di tulis oleh {{$item->user->name}}</span>
                </li>
            @endforeach
        </ul>
        <button id="load-more-btn">Berita Lainnya</button>
    </div>

</section>

@endsection
@section('script')
    <script>
        let offset = 8;
        let url = '{{route('load.loadData')}}';
        let itemUrl = '/blog/';
        $('#load-more-btn').on('click', function() {
            $.ajax({
                url: `${url}?offset=${offset}`,
                method: 'GET',
                success: function(data) {
                    let items = '';
                    console.log(data);
                    data.forEach(item => {
                        console.log(item);
                        let title = item.title.toUpperCase();
                        var linkHtml = `<a class="d-block" href="${itemUrl}${item.slug}">${title}</a> </hr> 
                        <span class="text-sm text-dark">Di pos ${item.carbon_date}</span>
                        <span class="text-sm text-gray">Di tulis oleh ${item.user.name}</span>`;

                        var itemHtml = `<li>${linkHtml}</li>`;
                        items += itemHtml;
                    });
                $('#beritaSpot').append(items);
                offset += 5;

                if (data.length < 5) {
                    $('#load-more-btn').hide();
                }
                
                },
                error: function() {
                alert('Terjadi Error!, Tolong coba lagi');
            }
            });
        });
    </script>
@endsection