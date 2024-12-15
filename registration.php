<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="register.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br><br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="password">Password:</label>
        <input type="text" name="password" id="password" required><br><br>
        
        <label for="role">Role:</label><br>
        <select id="role" name="role" required>
            <option value="" disabled selected>Please select</option>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>

        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>