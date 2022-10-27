<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Your Tools</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/todo.js"></script>
    </head>
    <body>

        <div class="header">

            <h1>to do list</h1>

        </div>

        <div class="nav">

            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="todo.php">To-Do List</a></li>
                <li><a href="calc.php">calculator</a></li>
                <li><a href="calendar.php">calendar</a></li>
            </ul>

        </div>

        <div class="main">

        <div class="content">

        <div id="add">
        <input type="text" id="input" placeholder="Add Item...">
        <span onclick="newElement()" class="addbtn">Add</span>
        </div>

        <ul id="list">

        <li class="checked">item 1</li>
        <li>item 2</li>
        <li>item 3</li>

        </ul>

        </div>

        </div>

        <div class="footer">
            <p class="author">author: david kirby</p>
        </div>

        <script>

            closebtn();

            hideitem();

            hide();

            checkmrk();

            newElement();

        </script>

    </body>
</html>