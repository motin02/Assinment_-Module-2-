<?php

$name1 = "";
$phone1 = "";
$name2 = "";
$phone2 = "";

while (true) {
    echo "\nContact Management Menu:\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option: ";
    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($name1 != "" && $name2 != "") {
            echo "⚠️  Maximum of 2 contacts already saved.\n";
        } else {
            echo "Enter name: ";
            $name = trim(fgets(STDIN));

            echo "Enter phone number: ";
            $phone = trim(fgets(STDIN));

            if ($name1 == "") {
                $name1 = $name;
                $phone1 = $phone;
                echo "✅ Contact 1 saved.\n";
            } elseif ($name2 == "") {
                $name2 = $name;
                $phone2 = $phone;
                echo "✅ Contact 2 saved.\n";
            }
        }
    } elseif ($choice == "2") {
        echo "\n📇 Saved Contacts:\n";
        if ($name1 != "") {
            echo "1. $name1 - $phone1\n";
        }
        if ($name2 != "") {
            echo "2. $name2 - $phone2\n";
        }
        if ($name1 == "" && $name2 == "") {
            echo "No contacts found.\n";
        }
    } elseif ($choice == "3") {
        echo "👋 Exiting. Goodbye!\n";
        break;
    } else {
        echo "❌ Invalid option. Try again.\n";
    }
}
?>