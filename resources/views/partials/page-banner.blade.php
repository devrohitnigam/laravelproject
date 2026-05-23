<section class="text-white d-flex align-items-center"
    style="background: url('{{ asset('images/hero.jpg') }}') center/cover no-repeat; height:250px;">

    <div class="container text-center">
        <h1>{{ $title ?? 'Page Title' }}</h1>

        <!-- Breadcrumb -->
        <nav>
            <ol class="breadcrumb justify-content-center bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="/" class="text-white text-decoration-none">Home</a>
                </li>

                @isset($breadcrumb)
                    @foreach($breadcrumb as $item)
                        @if(!$loop->last)
                            <li class="breadcrumb-item">
                                <a href="{{ $item['url'] }}" class="text-white text-decoration-none">
                                    {{ $item['name'] }}
                                </a>
                            </li>
                        @else
                            <li class="breadcrumb-item active text-white">
                                {{ $item['name'] }}
                            </li>
                        @endif
                    @endforeach
                @endisset
            </ol>
        </nav>

    </div>
</section>