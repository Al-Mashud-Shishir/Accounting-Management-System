<div class="well">
    <h2 class="text-center">General Ledger</h2>
    <hr>
    @include('Partials._showDebitCredit',['title'=>'cash'])
    @include('Partials._showDebitCredit',['title'=>'a/p'])
    @include('Partials._showDebitCredit',['title'=>'a/r'])
    <div class="row">
        <div class="col-sm-4 ">
            @include('Partials._showOnlyDebit',['title'=>'exp'])
        </div>
        <div class="col-sm-4 ">
            @include('Partials._showOnlyDebit',['title'=>'dividends'])
        </div>
        <div class="col-sm-4 ">
            @include('Partials._showOnlyDebit',['title'=>'equipment'])
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 ">
            @include('Partials._showOnlyCredit',['title'=>'rev'])
        </div>
        <div class="col-sm-6 ">
            @include('Partials._showOnlyCredit',['title'=>'common_share'])
        </div>
    </div>
</div>