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
                <details>
                    <summary style="color: blue; text-decoration:underline">Create a new reminder</summary>
                    <form action="/reminders/create" method="post">
                        <label for="subject">Reminder: </label>
                        <input type="text" id="subject" name="subject" required>
                        <button type="submit">Submit</button>
                    </form>                    
                </details>
                
            </div>
        </div>
    </div>

  <?php
    foreach ($data['reminders'] as $reminder) {
      echo '<p>'. $reminder['subject']. ' &emsp;&emsp;<a href="/reminder/update">Update</a>&emsp; <a href="/reminder/delete">Delete</a></p>';
    }

  ?>

    <?php require_once 'app/views/templates/footer.php' ?>
