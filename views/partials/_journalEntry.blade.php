<div class="well">

    <div class="panel panel-primary">
        <div class="panel-heading text-center"><h2>Journal Entry</h2></div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead class="thead-inverse">
                <tr>
                    <th>Date</th>
                    <th colspan="2">Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($journal as $r1)
                    <tr>
                        <td>{{$r1->date}}</td>
                        <td colspan="2">{{$r1->title}}</td>
                        <td>{{strtoupper($r1->debit)}}</td>
                        <td>{{strtoupper($r1->credit)}}</td>
                        <td>{{$r1->amount}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>