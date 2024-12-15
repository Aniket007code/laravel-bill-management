<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>create Bills</title>
</head>

<body>
    <div class="container">
        <h1>Create your Bills</h1>

        <form method="POST" action="/store"  autocomplete="off">
            @csrf
            <div class="form-row">
                <div class="col">
                    <input type="text" name="worker_name" class="form-control" placeholder="Worker Name">
                </div>
                <div class="col">
                    <input type="text" name="type_of_worker" class="form-control" placeholder="Type of Worker">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="text" name="total_work_day" class="form-control" placeholder="Total Work Day">
                </div>
                <div class="col">
                    <input type="text" name="sunday_holiday" class="form-control" placeholder="Sunday/Holiday">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="text" name="ot" class="form-control" placeholder="OT">
                </div>
                <div class="col">
                    <input type="number" name="total_days" class="form-control" placeholder="Total Days">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="text" name="month_rate" class="form-control" placeholder="Month Rate">
                </div>
                <div class="col">
                    <input type="text" name="total_present_amt" class="form-control" placeholder="Total Present Amount">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="text" name="ot_amt" class="form-control" placeholder="OT Amount">
                </div>
                <div class="col">
                    <input type="text" name="grand_total" class="form-control" placeholder="Grand Total">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="text" name="sr_no" class="form-control" placeholder="SR_NO">
                </div>
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>