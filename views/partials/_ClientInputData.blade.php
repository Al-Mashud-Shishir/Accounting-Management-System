<div class="panel panel-primary bounceIn">
    <div class="panel-heading">Input New Data</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title" class="control-label col-sm-2">Desciption :</label>
                <div class="col-sm-8">
                    <input id="title" type="text" class=" form-control" name="title"
                           placeholder="Enter One Line Short Description"
                           value="{{ old('tile') }}" required autofocus>
                </div>
            </div>


            <div class="form-group">
                <label for="date" class="control-label col-sm-2">Date :</label>
                <div class="col-sm-8">
                    <input id="date" type="date" class=" form-control" name="date"
                           value="{{ old('date') }}" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="amount" class="control-label col-sm-2">Amount :</label>
                <div class="col-sm-8">
                    <input id="amount" type="number" class=" form-control" name="amount"
                           value="{{ old('amount') }}" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="question" class="control-label col-sm-2">Choose Best Suited</label>
                <div class="col-sm-8">
                    <select class="form-control"  name="question">
                        <option value="1">Invested In Business</option>
                        <option value="2">Draw Money From Share(Dividends)</option>
                        <option value="3">Purchased Asset On Cash</option>
                        <option value="4">Purchased Asset On Loan</option>

                        <option value="5">Provide Service And Got Money</option>
                        <option value="6">Provide Service,But Will Get Money Later</option>
                        <option value="7">Received Pending Money</option>

                        <option value="8">Paid Expense Instantly</option>
                        <option value="9">Will Pay Expense Later</option>
                        <option value="10">Took A Loan</option>
                        <option value="11">Paid Pending Expense</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class=" col-sm-3 col-sm-offset-4 ">
                    <button type="submit" class="btn btn-primary pull-right btn-block">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
