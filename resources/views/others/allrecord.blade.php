<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<body>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="width: 100%">
        <table id="example" class="table table-striped table-bordered" style="padding: 20px" >
         <h4> </h4>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Tel</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mai Sokpheak</td>
                    <td>023 880 880</td>
                    <td>12/07/2021</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                  
                </tr>
                <tr>
                    <td>Ly Nary</td>
                    <td>023 880 880</td>
                    <td>12/07/2021</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                 
                </tr>

                <tr>
                    <td>Sao Sokunchannaroth</td>
                    <td>023 880 880</td>
                    <td>12/07/2021</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                   
                </tr>
                
                <tr>
                    <td>Chhunheang</td>
                    <td>023 880 880</td>
                    <td>12/07/2021</td>
                    <td>KPS</td>
                    <td>2020/04/25</td>
                    
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


