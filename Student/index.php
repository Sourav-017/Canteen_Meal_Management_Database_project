<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMeal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-green-100 font-sans">
    
    <div style = "background-color : #4c9173"; class=" text-white h-screen w-64 fixed left-0 top-0 overflow-y-auto">
        <div class="px-11 py-1 w-45 h-45">
            <img src="D Meal (Logo) (2).png" alt="Image" class="w-full h-full object-contain" />
        </div>
        <ul id="sidebarMenu" class="mt-8">
            <li class="px-5 py-3 hover:bg-green-300">
                <a href="index.php" class="block">Profile</a>
                
            </li>
            
            <li class="px-5 py-3 hover:bg-green-300">
                <a href="order.php" class="block">Order</a>
            </li>

            
            <li class="px-5 py-3 hover:bg-green-300">
                <a href="help.php" class="block">Help</a>
            </li>
            
        </ul>
    </div>

    <div class="right-side w-full ml-64 p-8">   
    <h1 class="text-3xl font-bold mb-8 flex justify-between items-center">
Profile details
</h1>

<div class="grid grid-cols-2 gap-8 mb-8">
        <?php
        include 'db.php';

        $sql = "SELECT Student_id, Student_name, Mobile_No, Email, Password FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='border rounded-lg shadow-md bg-white p-6'>";
                echo "<p class='font-semibold text-lg mb-2'>ID: " . $row["Student_id"]. "</p>";
                echo "<p class='font-semibold text-base mb-2'>Name: " . $row["Student_name"]. "</p>";
                echo "<p class='font-semibold text-base mb-2'>Phone No: " . $row["Mobile_No"]. "</p>";
                echo "<p class='font-semibold text-base mb-2'>Email: " . $row["Email"]. "</p>";
                echo "<p class='font-semibold text-base mb-2'>Password: " . $row["Password"]. "</p>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-red-500 text-xl text-center mt-8'>0 results</p>";
        }
        $conn->close();
        ?> 
    </div>
</div>




    <footer class="bg-yellow-500 text-white py-4 fixed bottom-0 w-full">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Daining Meal Management System</p>
        </div>
    </footer>
</body>
</html>
