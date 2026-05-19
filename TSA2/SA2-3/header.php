<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resume Portfolio</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #429090; 
            margin: 0; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            min-height: 100vh; 
        }
        table { 
            width: 750px; 
            margin: 40px auto; 
            border-collapse: collapse; 
            background-color: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        td { 
            border: 2px solid black; 
            padding: 20px; 
        }
        .menu-cell {
            padding: 0;
        }
        .menu-link { 
            display: block; 
            padding: 15px;
            text-decoration: none; 
            color: black; 
            font-size: 16px;
            text-align: center;
            font-weight: bold;
            transition: background 0.2s;
        }
        .menu-link:hover { 
            background-color: #f0f0f0; 
            color: #2980b9; 
        }
        .photo-cell { 
            width: 220px; 
            text-align: center; 
        }
        .photo-cell img { 
            width: 140px; 
            border-radius: 50%; 
            object-fit: cover; 
        }
        .page-container { 
            width: 750px; 
            background-color: white; 
            border: 2px solid black; 
            padding: 40px; 
            box-sizing: border-box;
            margin: 40px auto;
            min-height: 400px;
        }
        .back-btn { 
            display: inline-block; 
            background-color: #333; 
            color: white; 
            padding: 8px 15px; 
            text-decoration: none; 
            border-radius: 4px; 
            margin-bottom: 20px; 
            font-size: 14px; 
        }
        .back-btn:hover { 
            background-color: #555; 
        }
    </style>
</head>
<body>