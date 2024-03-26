<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Panel</title>

<style>
        body {
            width: 100%;
            height: 100%;
            font-family: "Open Sans", sans-serif;
            background: #092756;
            background: -moz-radial-gradient(
                0% 100%,
                ellipse cover,
                rgba(104, 128, 138, 0.4) 10%,
                rgba(138, 114, 76, 0) 40%
            ),
            -moz-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4)
                    100%),
            -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(
                0% 100%,
                ellipse cover,
                rgba(104, 128, 138, 0.4) 10%,
                rgba(138, 114, 76, 0) 40%
            ),
            -webkit-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(
                    42,
                    60,
                    87,
                    0.4
                )
                100%),
            -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -o-radial-gradient(
                0% 100%,
                ellipse cover,
                rgba(104, 128, 138, 0.4) 10%,
                rgba(138, 114, 76, 0) 40%
            ),
            -o-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4)
                    100%),
            -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -ms-radial-gradient(
                0% 100%,
                ellipse cover,
                rgba(104, 128, 138, 0.4) 10%,
                rgba(138, 114, 76, 0) 40%
            ),
            -ms-linear-gradient(top, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4)
                    100%),
            -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(
                0% 100%,
                ellipse cover,
                rgba(104, 128, 138, 0.4) 10%,
                rgba(138, 114, 76, 0) 40%
            ),
            linear-gradient(
                to bottom,
                rgba(57, 173, 219, 0.25) 0%,
                rgba(42, 60, 87, 0.4) 100%
            ),
            linear-gradient(135deg, #670d10 0%, #092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }

        html, body {
            width: auto;
            min-width: 100%;
            height: 100%;
            margin: 0;
            overflow: auto;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 30px;
            text-align: center;
            box-sizing: border-box;
        }

        button {
            width: 30%;
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            background-color:rgba(255, 221, 221, 0.7);;
            color: #721c24;
            padding: 8px;
            margin-bottom: 8px;
            border-radius: 20px;
           text-align: center;
        }

        .foot-btn{
          text-align: center;
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        }

        .foot-btn a{
          width: 27%;
          padding: 8px;
          margin-right: 15px;
          text-decoration: none;
          font-size: 14px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 15px;
          cursor: pointer;
        }

        .foot-btn a:hover {
            background-color: #0056b3;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            
        }

        input[type="file"] {
            display: none; 
        }

        .custom-file-upload {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            overflow: hidden;

        }

        .custom-file-upload input {
            font-size: 100px;
            position: absolute;
            display: flex;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

        .custom-file-upload:hover {
            background-color: #0056b3;
        }

        label {
            text-align: center;
        }


</style>

</head>
<body>
<form action="{{ route('welcome.post.store') }}" method="post">
      @csrf
      @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif
      <label for="name">Create Post</label>
      <input type="text" name="name" placeholder = 'Назва'>
      <input type="text" name="description" placeholder = 'Опис'>
      <div class = "foot-btn">
        <a href="{{ route('welcome') }}">Cancel</a>
       <button type="submit" value="Submit">Save</button>
      </div>
      
</form>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>