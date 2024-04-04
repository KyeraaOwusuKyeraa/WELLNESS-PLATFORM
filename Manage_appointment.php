<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="../css/manage_appointment.css">
</head>
<body>

    <header>
        <h1>Manage Your Appointments</h1>
        <a href="../students/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a> <!-- Back arrow icon -->
    </header>
    <a href="../students/schedule_appointment.php" class="book-appointment">New Appointment</a>
    <main>
        <div class="calendar">
            
        </div>
        <div class="appointments">
            <h2>Your Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Coach Name</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                            <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                            <a href="#" class="delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- More rows for other appointments -->
                </tbody>
            </table>

            <h2>Past Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Coach Name</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <a href="#" class="delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- More rows for other appointments -->
                </tbody>
            
        </div>
    </main>
    
</body>
</html>
