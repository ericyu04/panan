<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Stories</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #429090;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        .grid-container {
            background-color: #429090;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 5px;
            width: 90%;
            max-width: 1200px;
            height: 25vh;
        }
        .story-box {
            border: 1px solid #A53373;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #50002D;
            font-size: 18px;
            transition: background-color 0.3s ease;
            padding: 10px;
        }
        .story-box:hover {
            background-color: #267B7B;
        }
        .story-box img {
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .story-content {
            background-color: #6AAFAF;
            color: #A53373;
            padding: 40px;
            width: 80%;
            max-width: 800px;
            border-radius : 8px;
            box-shadow : 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .back-btn {
            display: inline-block;
            background-color : #429090;
            color: #A53373;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
        }
        .back-btn:hover {
            background-color: #267B7B;
        }
        img {
            display: block;
            margin: auto;
            max-height: 450px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
        <h2 style="color: #50002D">Short Stories Collection</h2>