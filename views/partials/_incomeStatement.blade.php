<?php $totalExpense = 0;$totalRevenue = 0;$netIncome = 0; ?>
<div class="well ">
    <h2 class="text-center">Income Statement</h2>
    <hr>
    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h2>Expense</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6"><h5>Desciption</h5></div>
                <div class="col-sm-6 text-right"><h5>Amount</h5></div>
            </div>
            @foreach($r as $r1)
                <div class="row">
                    <div class="col-sm-6">
                        {{$r1->title}}
                    </div>
                    <div class="col-sm-6 text-right">
                        {{"$".$r1->amount}}
                    </div>
                </div>
                <?php $totalExpense += $r1->amount; ?>
            @endforeach
            <hr>
            <div class="row">
                <div class="col-sm-6">Total Expense</div>
                <div class="col-sm-6 text-right"> {{"$".$totalExpense}}</div>
            </div>

        </div>
    </div>
    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h2>Revenue</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6"><h5>Desciption</h5></div>
                <div class="col-sm-6 text-right"><h5>Amount</h5></div>
            </div>
            @foreach($r2 as $r3)
                <div class="row">
                    <div class="col-sm-6">
                        {{$r3->title}}
                    </div>
                    <div class="col-sm-6 text-right">
                        {{"$".$r3->amount}}
                    </div>
                </div>
                <?php $totalRevenue += $r3->amount; ?>
            @endforeach
            <hr>
            <div class="row">
                <div class="col-sm-6">Total Revenue</div>
                <div class="col-sm-6 text-right"> {{"$".$totalRevenue}}</div>
            </div>

        </div>
    </div>
    <?php $netIncome = $totalRevenue - $totalExpense?>
    <div class="panel panel-default ">

        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6"><h5>Net Income</h5></div>
                <div class="col-sm-6 text-right"><h5>{{"$".$netIncome}}</h5></div>
            </div>

        </div>
    </div>
</div>