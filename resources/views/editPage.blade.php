<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Bill</title>
</head>

<body>
    <div class="container">
        <h1>Edit Bill</h1>

        <form method="POST" action="{{ url('/update/'.$bill->id) }}" autocomplete="off">
            @csrf
            <!-- @method('POST') Use PUT method to update -->
            
            <div class="form-row">
                <div class="col">
                    <label for="worker_name">Worker Name</label>
                    <input type="text" name="worker_name" class="form-control" id="worker_name" placeholder="Worker Name" value="{{ old('worker_name', $bill->worker_name) }}">
                </div>
                <div class="col">
                    <label for="type_of_worker">Type of Worker</label>
                    <input type="text" name="type_of_worker" class="form-control" id="type_of_worker" placeholder="Type of Worker" value="{{ old('type_of_worker', $bill->type_of_worker) }}">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="total_work_day">Total Work Day</label>
                    <input type="text" name="total_work_day" class="form-control" id="total_work_day" placeholder="Total Work Day" value="{{ old('total_work_day', $bill->total_work_day) }}">
                </div>
                <div class="col">
                    <label for="sunday_holiday">Sunday/Holiday</label>
                    <input type="text" name="sunday_holiday" class="form-control" id="sunday_holiday" placeholder="Sunday/Holiday" value="{{ old('sunday_holiday', $bill->sunday_holiday) }}">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="ot">OT</label>
                    <input type="text" name="ot" class="form-control" id="ot" placeholder="OT" value="{{ old('ot', $bill->ot) }}">
                </div>
                <div class="col">
                    <label for="total_days">Total Days</label>
                    <input type="number" name="total_days" class="form-control" id="total_days" placeholder="Total Days" value="{{ old('total_days', $bill->total_days) }}">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="month_rate">Month Rate</label>
                    <input type="text" name="month_rate" class="form-control" id="month_rate" placeholder="Month Rate" value="{{ old('month_rate', $bill->month_rate) }}">
                </div>
                <div class="col">
                    <label for="total_present_amt">Total Present Amount</label>
                    <input type="text" name="total_present_amt" class="form-control" id="total_present_amt" placeholder="Total Present Amount" value="{{ old('total_present_amt', $bill->total_present_amt) }}">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="ot_amt">OT Amount</label>
                    <input type="text" name="ot_amt" class="form-control" id="ot_amt" placeholder="OT Amount" value="{{ old('ot_amt', $bill->ot_amt) }}">
                </div>
                <div class="col">
                    <label for="grand_total">Grand Total</label>
                    <input type="text" name="grand_total" class="form-control" id="grand_total" placeholder="Grand Total" value="{{ old('grand_total', $bill->grand_total) }}">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <label for="sr_no">SR_NO</label>
                    <input type="text" name="sr_no" class="form-control" id="sr_no" placeholder="SR_NO" value="{{ old('sr_no', $bill->sr_no) }}" >
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
