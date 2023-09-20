<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
</head>
<body>
<table id="example" class="table rwd-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Bill No.</th>
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th>Amount</th>
                        <th>Products</th>
                        <th>Agent Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Payment Type</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody class="records">
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Nia</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Ashish</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Rakesh</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Mira</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Aarohi</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Rajesh</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Priyanshu</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Stavya</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Rakesh</td>
                        <td data-header="Address">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th>51000</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
<script>
    $(document).ready(function() {
        document.title='Simple DataTable';
        $('#example').DataTable(
            {
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
            'csvHtml5',
                    'excelHtml5',
            'pdfHtml5',
                    'print'
                ]
            }
        );
    });
</script>
</body>
</html>