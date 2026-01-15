 
 <?php
require_once 'classes/Account.php';
require_once 'classes/Customer.php';

$accounts = [
    new Account('102-445-001', 'Savings', 45000.50),
    new Account('102-445-002', 'Checking', -1200.00),
    new Account('102-445-003', 'Business', 150200.75),
    new Account('102-445-004', 'Emergency Fund', 5000.00)
];

$customer = new Customer('Andrei', 'Tuazon', $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<<head>
    <meta charset="UTF-8">
    <title>Qube Bank | Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="bank-container">
    <div class="logo">QUBE // BANK</div>
    
    <h1>USER_ID: <?php echo strtoupper($customer->getFullName()); ?></h1>

    <table>
        <thead>
            <tr>
                <th>Account String</th>
                <th>Category</th>
                <th>Balance_PHP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customer->accounts as $account): 
                $class = ($account->balance >= 0) ? 'credit' : 'overdrawn';
            ?>
            <tr>
                <td style="color: #888;"><?php echo $account->number; ?></td>
                <td><?php echo strtoupper($account->type); ?></td>
                <td class="<?php echo $class; ?>">
                    ₱<?php echo number_format($account->balance, 2); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>