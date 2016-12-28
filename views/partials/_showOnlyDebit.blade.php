<?php $totalDebit = 0;$totalCredit = 0; ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if($title=='exp')
            {{"Expense"}}
        @elseif($title=='dividends')
            {{"Dividends"}}
        @elseif($title=='equipment')
            {{"Equipment"}}
        @endif
    </div>
    <div class="panel-body">
            <div class="well text-center">
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
    </div>
</div>