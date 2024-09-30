<?php
session_start();

if (isset($_POST['submitBtn'])) {
    // Get the values of a, b, and c from the form
    $a = $_POST['valueA'];
    $b = $_POST['valueB'];
    $c = $_POST['valueC'];

    // Validate that 'a' is not zero
    if ($a != 0) {
        // Calculate the discriminant (b^2 - 4ac)
        $discriminant = ($b * $b) - (4 * $a * $c);

        // Display the discriminant
        echo $discriminant;
        
        // Check the nature of the roots based on the discriminant
        if ($discriminant >= 0) {
            // Real roots (either two distinct or one repeated)
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);

            if ($root1 == $root2) {
                // Display the repeated root
                echo "<br>Root = $root1";
            } else {
                // Display both distinct roots
                echo "<br>Root 1 = $root1, Root 2 = $root2";
            }
        } 
    } else {
        echo "Invalid input: 'a' must not be zero.";
    }
}
?>

<p><a href="unset.php">Return</a></p>