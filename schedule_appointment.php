<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="../css/schedule_appointment.css">
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="../students/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a> <!-- Back arrow icon -->
    </header>

    <div class="form-wrapper">
        <form action="#" method="#">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="input-group">
                <label for="coach">Select Coach</label>
                <select name="coach" id="coach">
                    <option value="">Coach Evvone</option>
                    <option value="">Salim</option>
                    <option value="">Emmanuel Ntow</option>
                    <option value="">Aunty Dianne</option>
                </select>
            </div>
            <div class="input-group">
                <label for="time">Time</label>
                <input type="time" name="time" id="time">
            </div>
            
            <button class="btn">Book Appointment</button>
        </form>
    </div>
</body>
</html>
