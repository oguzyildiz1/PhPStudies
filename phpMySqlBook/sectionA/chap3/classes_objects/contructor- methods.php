<?php

declare(strict_types=1);

class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $type, float $balance = 0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount)
    {

        $this->balance -= $amount;
        return $this->balance;
    }
}

$checking = new Account(43161176, 'Checking', 32.00);
$savings = new Account(201488896, 'Savings', 756.00);
$highInterest = new Account(23443277, "High Interest", 500.00);

?>

<?php include 'includes/header.php' ?>

<p>Balance: <?= $checking->balance ?></p>
// html here

<h2>Account Balances</h2>
<table>
    <tr>
        <th>Date</th>
        <th><?= $checking->type; ?></th>
        <th><?= $savings->type; ?></th>
        <th><?= $highInterest->type; ?></th>
    </tr>
    <tr>
        <td>24th July</td>
        <td>$<?= $checking->balance; ?></td>
        <td>$<?= $savings->balance; ?></td>
    </tr>
    <tr>
        <td><?= date("jS F") ?></td>
        <td>$<?= $checking->deposit(25.00); ?></td>
        <td>$<?= $savings->withdraw(155.00) ?></td>
    </tr>
    <tr>
        <td><?= date("jS F") ?></td>
        <td>$<?= $checking->withdraw(15.00); ?></td>
        <td>$<?= $savings->deposit(200.00) ?></td>
    </tr>
    <tr>
        <td>21th June</td>
        <td></td>
        <td></td>
        <td>$<?= $highInterest->deposit(150.00) ?></td>
    </tr>
    <tr>
        <td>25th June</td>
        <td></td>
        <td></td>
        <td>$<?= $highInterest->deposit(3000.00) ?></td>
    </tr>
</table>
<?php include 'includes/footer.php' ?>