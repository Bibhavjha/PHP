
<html>
<head>
    <title></title>
</head>
<body>
    <form method="POST">
        <!-- Text field with default value -->
        Name:
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : 'John Doe'; ?>">

        <!-- Dropdown menu with default selected option
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
            <option value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
        </select>

        Checkbox with default checked status 
        <label for="newsletter">Subscribe to Newsletter:</label>
        <input type="checkbox" id="newsletter" name="newsletter" <?php echo (isset($_POST['newsletter']) && $_POST['newsletter'] == 'on') ? 'checked' : ''; ?>>

        <input type="submit" value="Submit"> -->
    </form>
</body>
</html>
