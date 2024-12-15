<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <title>Bills</title>
</head>

<style>
    .w-5{
        display: none;
    }
    .paginationWala{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body class="hold-transition sidebar-mini">

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!----------------------add table from row here------------------------------------------>
                <div class="row">
                    <div class="col-12 pt-3">
                        <div class="card">
                            <!-- Display success message if any -->
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <h3 class="card-title pt-2">Invoice Data</h3>
                            <div class="card-header" style="display: flex;justify-content:space-between;align-items:center">

                                <!-- <button type="button" href="/create" class="btn btn-success">Add Invoice</button> -->
                                <a href="/create" class="btn btn-success">Add Invoice</a>
                                <a href="{{ route('export.users') }}" class="btn btn-primary" style="width: 150px;">
                                    Download Excel
                                </a>

                            </div>

                            <form action="{{ route('import.bills') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="file" class="form-label">Upload Excel File</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Import Bills</button>
                            </form>


                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead align="center">
                                        <tr>
                                            <th>Sr_No</th>
                                            <th>Worker Name</th>
                                            <th>Type of worke</th>
                                            <th>Total work day</th>
                                            <th>Sunday/Holiday</th>
                                            <th>OT</th>
                                            <th>Total days</th>
                                            <th>Month Rate</th>
                                            <th>Total Present Amt</th>
                                            <th>OT Amount</th>
                                            <th>Grand Amount</th>
                                            <th>Actions
                                            <th>



                                        </tr>
                                    </thead>

                                    <tbody align="center">
                                        @foreach($allBillData as $index => $bill)
                                        <tr>
                                            <td>{{ $bill->sr_no }}</td> <!-- Display Sr_No -->
                                            <td>{{ $bill->worker_name }}</td> <!-- Worker Name -->
                                            <td>{{ $bill->type_of_worker }}</td> <!-- Type of work -->
                                            <td>{{ $bill->total_work_day }}</td> <!-- Total work days -->
                                            <td>{{ $bill->sunday_holiday }}</td> <!-- Sunday/Holiday -->
                                            <td>{{ $bill->ot }}</td> <!-- OT -->
                                            <td>{{ $bill->total_days }}</td> <!-- Total days -->
                                            <td>{{ $bill->month_rate }}</td> <!-- Month rate -->
                                            <td>{{ $bill->total_present_amt }}</td> <!-- Total Present Amt -->
                                            <td>{{ $bill->ot_amt }}</td> <!-- OT Amount -->
                                            <td>{{ $bill->grand_total }}</td> <!-- Grand Amount -->

                                            <td>
                                                <!-- Actions like Edit/Delete can go here -->

                                                <a href="{{url('/edit/'.$bill->id)}}" class="btn btn-warning p-0 btn-sm mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-edit p-1"></i></a>
                                                <a href="{{url('/delete/'.$bill->id)}}" onclick="return confirm('Do you want to Delete it?')" class="btn btn-danger p-0 btn-sm" data-toggle="tooltip" title="Delete"><i class="fas fa-trash p-1"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination links -->
                            <div class="paginationWala" >
                                {{ $allBillData->links() }}
                            </div>

                           
                        </div>
                    </div>
                </div>
                <!-----------------end table------------------------>
            </div>
        </section>
    </div>

    <!-- DataTables  & Plugins -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>