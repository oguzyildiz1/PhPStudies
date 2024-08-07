<?php

class Account
{
    public int $number;
    public string $type;
    public float $balance;

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

$account = new Account();
$account->balance = 100.00; // dolars
?>

<?php include 'includes/header.php'; ?>
<p>$<?= $account->deposit(50.00) ?></p>
<p>$<?= $account->withdraw(75.00) ?></p>
<?php include 'includes/footer.php'; ?>