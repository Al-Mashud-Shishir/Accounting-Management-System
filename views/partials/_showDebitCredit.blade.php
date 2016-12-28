<?php $totalDebit = 0;$totalCredit = 0; ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if($title=='cash')
            {{$title}}
        @elseif($title=='a/p')
            {{"Accounts Payable"}}
        @elseif($title=='a/r')
            {{"Accounts Receivable"}}
        @endif
    </div>
    <div class="panel-body">
        <div class="row" style="width:80%;margin-left:10%">
            <div class="well col-sm-5 pull-left text-center">
                <h2>Debit</h2>
                <hr>
                @foreach($general as $r1)
                    @if($r1->debit==$title)
                        {{"$".$r1->amount}}<br>
                        <?php $totalDebit += $r1->amount; ?>
                    @endif
                @endforeach
                <hr>
                {{"Total: $".$totalDebit}}
            </div>
            <div class="well col-sm-5 pull-right text-center">
                <h2>Credit</h2>
                <hr>
                @foreach($general as $r1)
                    @if($r1->credit==$title)
                        {{"$".$r1->amount}}<br>
                        <?php $totalCredit += $r1->amount; ?>
                    @endif
                @endforeach
                <hr>
                {{"Total: $".$totalCredit}}
            </div>
        </div>

    </div>
</div>