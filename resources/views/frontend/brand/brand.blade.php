@extends('frontend.master')

@section('content')
    @include('frontend.header')
    <!-- banner single page start -->
    <section class="banner_single_page"
        style="background-image:url('{{ asset('assets/frontend/image/buy-brand-hero1.jpg') }}');
    ">
        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading">Shop by brand</h1>
                <p class="single_banner_text">Through our deep relationships with leading technology partners, we provide
                    hardware, software and custom solutions to manage today and prepare for the future.</p>
            </div>
        </div>
    </section>

    <!-- banner single page end-->
    <section class="top_brand section_padding">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Top brands</h3>
            </div>

            <div class="top_brand_wrapper">
                <!-- item -->
                @foreach ($topBrands as $item)
                    <a href="{{ url('hardware', ['brand' => $item->title]) }}" class="top_brand_image">
                        <img src="{{ asset('storage/Brand/' . $item->image) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="all_barnd section_padding">
        <div class="container">
            <div class="section_title">
                <h3 class="title_top_heading">Featured brands</h3>
            </div>
            <div class="all_barnd_wrapper">
                <!-- item -->
                @foreach ($featuredBrands as $item)
                    <a href="{{ url('hardware', ['brand' => $item->title]) }}" class="top_brand_image">
                        <img src="{{ asset('storage/Brand/' . $item->image) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>


    <section class="brand_char">
        <div class="container">
            <div class="section_title" style="margin: 0; text-align: left;">
                <h3 class="title_top_heading">Explore all the brands Insight has to offer.</h3>
            </div>
            <!-- brand char link -->
            <div class="brand_char_link">
                <ul>
                    <li><a href="#A"> A
                        </a></li>
                    <li><a href="#B"> B </a></li>
                    <li><a href="#C">C
                        </a></li>
                    <li><a href="#D">D
                        </a></li>
                    <li><a href="#E">E
                        </a></li>
                    <li><a href="#F">F
                        </a></li>
                    <li><a href="#G"> G </a></li>
                    <li><a href="#H"> H
                        </a></li>
                    <li><a href="#I"> I</a></li>
                    <li><a href="#J">J
                        </a></li>
                    <li><a href="#K">K
                        </a></li>
                    <li><a href="#L"> L </a></li>
                    <li><a href="#M">M
                        </a></li>
                    <li><a href="#N"> N </a></li>
                    <li><a href="#O">O
                        </a></li>
                    <li><a href="#P">P
                        </a></li>
                    <li><a href="#Q">Q
                        </a></li>
                    <li><a href="#R">R
                        </a></li>
                    <li><a href="#S"> S </a></li>
                    <li><a href="#T"> T </a></li>
                    <li><a href="#U">U
                        </a></li>
                    <li><a href="#V">V
                        </a></li>
                    <li><a href="#W">W
                        </a></li>
                    <li><a href="#X"> X </a></li>
                    <li><a href="#Y"> Y </a></li>
                    <li><a href="#Z"> Z
                        </a></li>
                </ul>
            </div>

            <!-- brand by char -->
            <div class="brand_bychar" id="A">
                <div class="brand_bycha_title">
                    <h3>A</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'A')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="B">
                <div class="brand_bycha_title">
                    <h3>B</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'B')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="C">
                <div class="brand_bycha_title">
                    <h3>C</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'C')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="D">
                <div class="brand_bycha_title">
                    <h3>D</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'D')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="E">
                <div class="brand_bycha_title">
                    <h3>E</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'E')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="F">
                <div class="brand_bycha_title">
                    <h3>F</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'F')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="G">
                <div class="brand_bycha_title">
                    <h3>G</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'G')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="H">
                <div class="brand_bycha_title">
                    <h3>H</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'H')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="I">
                <div class="brand_bycha_title">
                    <h3>I</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'I')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="J">
                <div class="brand_bycha_title">
                    <h3>J</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'J')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="K">
                <div class="brand_bycha_title">
                    <h3>K</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'K')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="L">
                <div class="brand_bycha_title">
                    <h3>L</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'L')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="M">
                <div class="brand_bycha_title">
                    <h3>M</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'M')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="N">
                <div class="brand_bycha_title">
                    <h3>N</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'N')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="O">
                <div class="brand_bycha_title">
                    <h3>O</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'O')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="P">
                <div class="brand_bycha_title">
                    <h3>P</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'P')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="Q">
                <div class="brand_bycha_title">
                    <h3>Q</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'Q')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="R">
                <div class="brand_bycha_title">
                    <h3>R</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'R')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="S">
                <div class="brand_bycha_title">
                    <h3>S</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'S')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="T">
                <div class="brand_bycha_title">
                    <h3>T</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'T')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="U">
                <div class="brand_bycha_title">
                    <h3>U</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'U')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="V">
                <div class="brand_bycha_title">
                    <h3>V</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'V')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="W">
                <div class="brand_bycha_title">
                    <h3>W</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'W')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="X">
                <div class="brand_bycha_title">
                    <h3>X</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'X')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="Y">
                <div class="brand_bycha_title">
                    <h3>Y</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'Y')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brand_bychar" id="Z">
                <div class="brand_bycha_title">
                    <h3>Z</h3>
                </div>

                <div class="brand_bychar_list">
                    <ul>
                        @foreach ($othersBrands as $item)
                            @if ($item->title[0] == 'Z')
                                <li><a href="{{ url('hardware', ['brand' => $item->title]) }}"
                                        id="firstWord">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
