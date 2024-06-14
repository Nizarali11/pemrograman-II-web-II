<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Page</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a, #333333);
        }

        .container {
            background: linear-gradient(135deg, #444, #888);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            animation: gradientContainer 5s ease infinite;
            color: #fff;

        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

        .container table {
            border-collapse: collapse;
            width: 100%;
        }

        .container td {
            border: none;
            padding: 10px;
        }

        .container td a {
            text-decoration: none;
            color: inherit;
            display: block;
            text-align: center;
            background: linear-gradient(135deg, #444, #888);
            border-radius: 5px;
            padding: 10px;
            transition: background 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }

        .container td a:hover {
            background: linear-gradient(135deg,  #444, #888);
            transition: background 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }

        .container td button {
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #444, #888);
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            transition: background 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }

        .container td button:hover {
            background: linear-gradient(135deg,   #444, #888);
            transition: background 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td><a href="Member.php">Member</a></td>
                <td><a href="Buku.php">Buku</a></td>
                <td><a href="Peminjaman.php">Peminjaman</a></td>
            </tr>
        </table>
    </div>
</body>
</html>
