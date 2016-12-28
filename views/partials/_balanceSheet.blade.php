<?php $totalAsset = 0;$totalLiability = 0;$totalOwnerEquity = 0; ?>
<div class="well bg-success">
    <h2 class="text-center with-3d-shadow ">Balance Sheet</h2>
    <hr>
    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h2 class="card-title">Asset</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6"><h5>Desciption</h5></div>
                <div class="col-sm-6 text-right"><h5>Amount</h5></div>
            </div>
            @foreach($bsheet as $r1)
                @if(($r1->debit=='cash'|| $r1->debit=='equipment')&&($r1->credit=='cash'||$r1->credit=='a/p'||$r1->credit=='common_share'))
                    <div class="row">
                        <div class="col-sm-6">
                            {{$r1->title}}
                        </div>
                        <div class="col-sm-6 text-right">
                            {{"$".$r1->amount}}
                        </div>
                    </div>
                    <?php $totalAsset += $r1->amount; ?>
                @endif
            @endforeach
            <hr>
            <div class="row">
                <div class="col-sm-6">Total Asset</div>
                <div class="col-sm-6 text-right"> {{"$".$totalAsset}}</div>
            </div>

        </div>
    </div>
    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h2 class="card-title">Liability</h2>
        </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6"><h5>Desciption</h5></div>
                    <div class="col-sm-6 text-right"><h5>Amount</h5></div>
                </div>
                @foreach($bsheet as $r1)
                    @if(($r1->debit=='cash'|| $r1->debit=='equipment')&&$r1->credit=='a/p')
                        <div class="row">
                            <div class="col-sm-6">
                                {{$r1->title}}
                            </div>
                            <div class="col-sm-6 text-right">
                                {{"$".$r1->amount}}
                            </div>
                        </div>
                        <?php $totalLiability += $r1->amount; ?>
                    @endif
                @endforeach
                <hr>
                <div class="row">
                    <div class="col-sm-6">Total Liability</div>
                    <div class="col-sm-6 text-right"> {{"$".$totalLiability}}</div>
                </div>

            </div>
    </div>
    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h2 class="card-title">Owner's Equity</h2>
        </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6"><h5>Desciption</h5></div>
                    <div class="col-sm-6 text-right"><h5>Amount</h5></div>
                </div>
                @foreach($bsheet as $r1)
                    @if(($r1->debit=='cash'|| $r1->debit=='equipment')&&($r1->credit=='cash'||$r1->credit=='common_share'))
                        <div class="row">
                            <div class="col-sm-6">
                                {{$r1->title}}
                            </div>
                            <div class="col-sm-6 text-right">
                                {{"$".$r1->amount}}
                            </div>
                        </div>
                        <?php $totalOwnerEquity += $r1->amount; ?>
                    @endif
                @endforeach
                <hr>
                <div class="row">
                    <div class="col-sm-6">Total Owners Equity</div>
                    <div class="col-sm-6 text-right"> {{"$".$totalOwnerEquity}}</div>
                </div>

            </div>
    </div>

    <div class="panel panel-default ">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3"><h5> Total Asset = <br>{{"(".$totalAsset.")"}} </h5></div>
                    <div class="col-sm-3"><h5> Total Liability <br> {{"(".$totalLiability.")"}}</h5></div>
                    <div class="col-sm-3"><h5> + </h5></div>
                    <div class="col-sm-3"><h5> Total Owners Equity {{"(".$totalOwnerEquity.")"}}</h5></div>
                </div>
            </div>
    </div>
</div>