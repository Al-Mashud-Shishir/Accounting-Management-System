<?php $totalDebit = 0;$totalCredit = 0; ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if($title=='rev')
            {{"Revenue"}}
        @elseif($title=='common_share')
            {{"Common Share"}}
        @endif
    </div>
    <div class="panel-body">
            <div class="well text-center">
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