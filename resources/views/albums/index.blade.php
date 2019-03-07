{{--In video tutorial explain starts @ time- 53m 43sec--}}

@extends('layouts.app')

@section('content')

    {{--checking if there are any albums available.--}}
    @if(count($albums) > 0)

        <?php
        $colcount = count($albums); //counting total number of albums
        $i = 1; //iteration set default value as 1
        ?>

        <div id="albums">
            <div class="row text-center">
                {{--Below foreach looping through the albums--}}
                @foreach($albums as $album)
                    @if($i == $colcount)
                        <div class="medium-4 columns end">
                            <a href="/albums/{{ $album->id }}">
                                <img class="thumbnail" src="storage/album_covers/{{ $album->cover_image }}"
                                     alt="{{ $album->name }}">
                            </a>
                            <br>
                            <h4>{{ $album->name }}</h4>
                            @else
                                <div class="medium-4 columns">
                                    <a href="/albums/{{ $album->id }}">
                                        <img class="thumbnail" src="storage/album_covers/{{ $album->cover_image }}"
                                             alt="{{ $album->name }}">
                                    </a>
                                    <br>
                                    <h4>{{ $album->name }}</h4>
                                    @endif
                                    @if($i % 3 == 0)
                                </div>
                        </div>
                        <div class="row text-center">
                            @else
                        </div>
                    @endif
                    <?php $i++; ?>
                @endforeach
            </div>
        </div>
    @else
        {{--if there are no albums which is above top if condition fails below message will display--}}
        <p>No Albums to Display.</p>
    @endif

@endsection
