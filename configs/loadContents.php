<?php
if(isset($_POST['component'])) {
    $component = $_POST['component'];

    // You can include the corresponding HTML component based on the value of $component
    if($component === 'agents') {
        include('../pages/agents.php');
    } elseif($component === 'customers') {
        include('../pages/customer.php');
    } elseif($component === 'home') {
        include('../pages/home.php');
    } elseif($component === 'add-agent') {
        include('../pages/add-agent.php');
    } elseif($component === 'add-customers') {
        include('../pages/add-customer.php');
    } else {
        echo 'Component not found';
    }
}
?>