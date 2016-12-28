<?php $cashDebit = $cashCredit = $apDebit = $apCredit = $arDebit = $arCredit = 0;
        $expDebit=$divDebit=$equipDebit=$revCredit=$cmnCredit=0;
$netCash =$netAr=$netAp= 0;
$totalDebit = $totalCredit = 0;
?>
<div class="well">
    <div class="panel panel-primary">
        <div class="panel-heading text-center"><h3>Trial Balance</h3></div>
        <div class="panel-body"><table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Accounts</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td>Cash</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='cash')
                            <?php $cashDebit += $r1->amount; ?>
                        @endif
                        @if($r1->credit=='cash')
                            <?php $cashCredit += $r1->amount; ?>
                        @endif
                    @endforeach
                    <?php $netCash = $cashDebit - $cashCredit?>
                    @if($netCash>0)
                        <?php $totalDebit += $netCash?>
                        <td>{{$netCash}}</td>
                        <td>0</td>
                    @elseif($netCash<0)
                        <?php $totalCredit += abs($netCash)?>
                        <td>0</td>
                        <td>{{abs($netCash)}}</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Accounts Receivable</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='a/r')
                            <?php $arDebit += $r1->amount; ?>
                        @endif
                        @if($r1->credit=='a/r')
                            <?php $arCredit += $r1->amount; ?>
                        @endif
                    @endforeach
                    <?php $netAr = $arDebit - $arCredit?>
                    @if($netAr>0)
                        <?php $totalDebit += $netAr?>
                        <td>{{$netAr}}</td>
                        <td>0</td>
                    @elseif($netAr<0)
                        <?php $totalCredit += abs($netAr)?>
                        <td>0</td>
                        <td>{{abs($netAr)}}</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Accounts Payable</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='a/p')
                            <?php $apDebit += $r1->amount; ?>
                        @endif
                        @if($r1->credit=='a/p')
                            <?php $apCredit += $r1->amount; ?>
                        @endif
                    @endforeach
                    <?php $netAp = $apDebit - $apCredit?>
                    @if($netAp>0)
                        <?php $totalDebit += $netAp?>
                        <td>{{$netAp}}</td>
                        <td>0</td>
                    @elseif($netAp<0)
                        <?php $totalCredit += abs($netAp)?>
                        <td>0</td>
                        <td>{{abs($netAp)}}</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Expense</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='exp')
                            <?php $expDebit += $r1->amount; ?>
                        @endif
                    @endforeach
                    @if($expDebit>0)
                        <?php $totalDebit += $expDebit?>
                        <td>{{$expDebit}}</td>
                        <td>0</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Dividends</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='dividends')
                            <?php $divDebit += $r1->amount; ?>
                        @endif
                    @endforeach
                    @if($divDebit>0)
                        <?php $totalDebit += $divDebit?>
                        <td>{{$divDebit}}</td>
                        <td>0</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Equipment</td>
                    @foreach($trial as $r1)
                        @if($r1->debit=='equipment')
                            <?php $equipDebit += $r1->amount; ?>
                        @endif
                    @endforeach
                    @if($equipDebit>0)
                        <?php $totalDebit += $equipDebit?>
                        <td>{{$equipDebit}}</td>
                        <td>0</td>
                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Revenue</td>
                    @foreach($trial as $r1)
                        @if($r1->credit=='rev')
                            <?php $revCredit += $r1->amount; ?>
                        @endif
                    @endforeach
                    @if($revCredit>0)
                        <?php $totalCredit += $revCredit?>
                        <td>0</td>
                        <td>{{$revCredit}}</td>

                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Common Share</td>
                    @foreach($trial as $r1)
                        @if($r1->credit=='common_share')
                            <?php $cmnCredit += $r1->amount; ?>
                        @endif
                    @endforeach
                    @if($cmnCredit>0)
                        <?php $totalCredit += $cmnCredit?>
                        <td>0</td>
                        <td>{{$cmnCredit}}</td>

                    @else
                        <td>0</td>
                        <td>0</td>
                    @endif
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{$totalDebit}}</td>
                    <td>{{$totalCredit}}</td>
                </tr>
                </tbody>

            </table></div>
    </div>
</div>