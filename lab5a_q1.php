<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>

    <body>
        <?php
            $name = "Tan Peck Shan";
            $matricNo = "AI240159";
            $course = "Bachelor of Computer Science (Information Security)";
            $year = "Year 3";
            $address = "Jalan Mawar, Taman Maju Baru, Parit Raja, Batu Pahat, Johor";
        ?>

        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo "$matricNo"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo "$year"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>
    </body>
</html>