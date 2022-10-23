<a href="{{ route('page-builder') }}">Add New</a>
@foreach ($pages as $page) 
    <li><a href="{{url('/page', $page->id)}}">{{$page->title}}</a></li>
@endforeach