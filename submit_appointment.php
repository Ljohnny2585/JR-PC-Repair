<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    // Save to a file or database (example: saving to a file)
    $file = fopen("appointments.txt", "a");
    fwrite($file, "$name | $email | $service | $date | $time\n");
    fclose($file);

    echo "Appointment booked successfully! We will contact you soon.";
}
?>
