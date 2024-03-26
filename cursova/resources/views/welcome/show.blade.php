<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Tour</title>
    <style>


        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            width: 100%;
            height: 100%;
            font-family: "Open Sans", sans-serif;
            background: #092756;
            background: -moz-radial-gradient(0% 100%,
                    ellipse cover,
                    rgba(104, 128, 138, 0.4) 10%,
                    rgba(138, 114, 76, 0) 40%),
                -moz-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
                -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%,
                    ellipse cover,
                    rgba(104, 128, 138, 0.4) 10%,
                    rgba(138, 114, 76, 0) 40%),
                -webkit-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42,
                        60,
                        87,
                        0.4) 100%),
                -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -o-radial-gradient(0% 100%,
                    ellipse cover,
                    rgba(104, 128, 138, 0.4) 10%,
                    rgba(138, 114, 76, 0) 40%),
                -o-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
                -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -ms-radial-gradient(0% 100%,
                    ellipse cover,
                    rgba(104, 128, 138, 0.4) 10%,
                    rgba(138, 114, 76, 0) 40%),
                -ms-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
                -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%,
                    ellipse cover,
                    rgba(104, 128, 138, 0.4) 10%,
                    rgba(138, 114, 76, 0) 40%),
                linear-gradient(to bottom,
                    rgba(57, 173, 219, 0.25) 0%,
                    rgba(42, 60, 87, 0.4) 100%),
                linear-gradient(135deg, #670d10 0%, #092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
        }

        h1 {
            color: white;
            text-align: center;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        a {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <a href="{{ route('welcome') }}">Back</a>
    <h1>Show Tour</h1>
    <table>
        <tbody>
            <tr>
                <td>
                    <p>Name: {{ $tour->name }}</p>
                </td>
                <td>
                    <p>Description: {{ $tour->description }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Price: ${{ $tour->price }}</p>
                </td>
                <td>
                    <p>Days: {{ $tour->days }} days</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p><img src="{{ asset('/storage/' . $tour->image) }}" alt="{{ $tour->name }}"
            style="width: 300px; height: 300px;"></p>
</body>

</html>