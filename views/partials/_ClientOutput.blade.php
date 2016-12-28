{{--{{isset($request)?"Set".$request->question.Auth::User()->name:"Not Set"}}--}}
@foreach($result as $r)
    {{$r->title." ".$r->amount}}
    @endforeach