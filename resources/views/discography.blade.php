<div class="col-md-4 col-md-push-1">
    <aside class="sidebar">
        <div class="widget">
            <h3 class="widget-title">Discography</h3>
            <ul class="discography-list">
                @foreach($albums as $album)
                <li>
                    <figure class="cover">
                        <img src="/images/{{$album->logo}}" alt="{{$album->title}}">
                    </figure>

                    <div class="detail">
                        <h3><a href="/album/{{preg_replace('/\s+/', '-', $album->title)}}">{{$album->title}}</a></h3>
                        <span class="year">{{$album->released->year}}</span>
                        <span class="track">{{$album->tracks()}} tracks</span>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </aside>
</div>