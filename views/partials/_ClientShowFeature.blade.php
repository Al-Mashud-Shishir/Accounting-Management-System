<div class="panel panel-primary">
    <div class="panel-heading">Get Accounting Features</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/feature') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="startdate" class="control-label col-sm-2">Start Date :</label>
                <div class="col-sm-8">
                    <input id="startdate" type="date" class=" form-control" name="startdate"
                           value="{{ old('startdate') }}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="enddate" class="control-label col-sm-2">End Date :</label>
                <div class="col-sm-8">
                    <input id="enddate" type="date" class=" form-control" name="enddate"
                           value="{{ old('enddate') }}" required autofocus>
                </div>
            </div>
            @yield('options')


            <div class="form-group">
                <div class=" col-sm-3 col-sm-offset-4 ">
                    <button type="submit" class="btn btn-primary pull-right btn-block" id="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
