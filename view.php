<?php

class UserView
{
    public function renderUsers($users)
    {
        echo "<h2>User list:</h2>";
        echo "<ul>";
        if($users) {
            foreach ($users as $user) {
                echo "<li>{$user['username']} - {$user['email']}";
            }
            echo "</ul>";
        } else {
            echo "<p>No users found!</p>";
        }

    }

    public function renderForm()
    {
        echo "
            <h2>Add User:</h2>
            <form method='post' action='index.php'>
                <label for='username'>Username:</label>
                <input type='text' name='username' id='username' required>
                <label for='email'>Eamil:</label>
                <input type='email' name='email' id='email' required>
                <button type='submit'>Add user</button>
             </form>
        ";
    }
}