<script>
    function ConfirmDelete() {
        return confirm('Are you sure?');
    }
</script>

@extends('layout.theme')

@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities_home" class="btn membtn">Go Back</a>
                    <a href="/activities" class="btn membtn">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn">Technical Sessions</a>
                    <a href="/activities_field_excursion" class="btn membtn">Field Excursion</a>
                    <a href="/activities_annual_trip" class="btn membtn_active">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="background-color: #ffffff;padding: 10px;">
            <div><h3>Annual Pleasure Trip</h3></div>

            Geological Society of Sri Lanka annually organizes a pleasure trip to various destinations of geological,
            environmental or cultural importance. The pleasure trip is opened for its members and their families.
            <hr>
            <div style="background-color: #ffffff;padding: 10px;height: auto;">
                <div style="height: auto;">
                    @if(count($annual_trips)>0)
                        @foreach($annual_trips as $annual_trip)
                            <div style="font-weight: bold;font-size:16px; "><a
                                        href="annual_trip/{{$annual_trip->id}}"> {{$annual_trip->title}}</a></div>

                @if(!Auth::guest())
                    @if(Auth::user()->id==$annual_trip->user_id)
                        <div class="row">
                            <div class="col-md-3">

                                <a href="/annual_trip/{{$annual_trip->id}}/edit" class="btn membtn">Edit</a>
                            </div>
                            <div class="col-md-3">
                                {!!Form::open(['action'=>['annualtripcontroller@destroy',$annual_trip->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    @endif
                @endif
                <hr>
                @endforeach
                        {{$annual_trips->render()}}
                @else
                    <p>No Annual Trip found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
