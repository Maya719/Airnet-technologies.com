<!DOCTYPE html>
<html>

<head>
    <title>INVOICE</title>
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        .header,
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }


        /**    17. Panel
 *************************************************** **/
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="card panel-default">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-condensed nomargin">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div><strong>{{ $product->title }}</strong></div>
                                </td>
                                <td>AED {{$product->price}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="nomargin-top">
                <div class="row">
                    <div class="col-sm-4 text-right">
                        <ul class="list-unstyled">
                            <li><strong>Sub - Total Amount:</strong> AED {{$product->price}}</li>
                            <li><strong>Grand Total:</strong> AED {{$product->price}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <a class="btn btn-success" href="{{ $Data["invoiceURL"] }}" target="_blank"><i class="fa fa-print"></i>
                    Pay Now</a>
            </div>
        </div>
    </div>
</body>

</html>
