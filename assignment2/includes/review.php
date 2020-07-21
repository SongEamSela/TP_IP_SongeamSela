<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
    .comment {
        border: solid black 2px;
        width: 800px;
        height: 200px;
    }
    </style>
</head>
<body>
<div>
    <p><b>Comment</b></p>
    </div>
    <div>
        <div class="comment">
            <div style="display: inline-flex; margin-top: 10px; margin-left: 10px;">
                <div><i class="fas fa-user-circle" style="font-size: 3em;"></i></div>
                <div><p><span style="color: blue;">Anonymous </span><br>Today 4:21pm - 12.06.2020</p></div>
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when on unknown printer took a galley of type and scramble it to make a type spaceimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining esssentially enchanged.</p>
            </div>
        </div>
        <div class="comment">
            <div style="display: inline-flex; margin-top: 10px; margin-left: 10px;">
                <div><i class="fas fa-user-circle" style="font-size: 3em;"></i></div>
                <div><p><span style="color: blue;">Anonymous </span><br>Today 4:21pm - 12.06.2020</p></div>
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when on unknown printer took a galley of type and scramble it to make a type spaceimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining esssentially enchanged.</p>
            </div>
        </div>
    </div><br>
    <fieldset><legend>Write your review here</legend>
        <textarea name="review" id="review" cols="100" rows="10"></textarea>
    </fieldset><br>
    <div style="margin-left: 500px;">
        <button type="submit" style="background-color: green; color: white; box-shadow: 4px 4px black;"><i class="fas fa-reply"></i>Send</button>
        <button type="submit" style="background-color: rgb(253, 36, 36); color: white; box-shadow: 4px 4px black;"><i class="fas fa-times"></i>Discard</button> <br>
    </div>
</body>
</html>