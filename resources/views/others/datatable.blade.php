<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<body>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="width: 100%">
        <table id="example" class="table table-striped table-bordered" style="padding: 20px" >
         <h4> </h4>
            <thead>
                <tr>
                    <th>Room Detail</th>
                    <th>Room ID</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Garrett Winters</td>
                    <td>T2003</td>
                    <td>$101</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                    <td>Family</td>
                    <td><button type="button" class="btn btn-danger">Cancel</button></td>

                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>T2003</td>
                    <td>$103</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                    <td>Dorm</td>
                    <td><button type="button" class="btn btn-danger">Cancel</button></td>

                </tr>

                <tr>
                    <td>Garrett Winters</td>
                    <td>T2003</td>
                    <td>$105</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                    <td>Solo</td>
                    <td><button type="button" class="btn btn-danger">Cancel</button></td>

                </tr>
                
                <tr>
                    <td>Garrett Winters</td>
                    <td>T2003</td>
                    <td>$104</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                    <td>Family</td>
                    <td><button type="button" class="btn btn-danger">Cancel</button></td>

                </tr>
            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>


