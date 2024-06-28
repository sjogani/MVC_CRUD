<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= ucwords($_SESSION['controller']);?></li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <?php
                    echo '<table>';
                    echo '<tr><th>ID</th><th>Subject</th></tr>';
                    foreach ($data['reminders'] as $reminder) {
                        echo '<tr>';
                        echo '<td>' . $reminder['id'] . '</td>';
                        echo '<td>' . $reminder['subject'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                  ?>
                <details>
                    <summary style="color: blue; text-decoration:underline">Create a new reminder</summary>
                    <form action="/reminders/create" method="post">
                        <label for="subject">Reminder: </label>
                        <input type="text" id="subject" name="subject" required>
                        <button type="submit">Submit</button>
                    </form>       
                </details>
                
                <details>
                    <summary style="color: blue; text-decoration:underline">Update a reminder</summary>
                    <form action="/reminders/update" method="post">
                        <label for="id">ID: </label>
                        <input type="int" id="id" name="id" required><br>
                        <label for="subject">Updated Reminder: </label>
                        <input type="text" id="subject" name="subject" required><br>
                        <button type="submit">Submit</button>
                    </form>
                </details>

                <details>
                    <summary style="color: blue; text-decoration:underline">Delete a reminder</summary>
                    <form action="/reminders/delete" method="post">
                        <label for="id">ID: </label>
                        <input type="int" id="id" name="id" required>
                        <button type="submit">Submit</button>
                    </form> 
                </details>
            </div>
        </div>
    </div>

  

    <?php require_once 'app/views/templates/footer.php' ?>
