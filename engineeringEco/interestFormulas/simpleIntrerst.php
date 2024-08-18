<?php
#simple interest formulas
# I = Pni; I: interest earned; P: principal amount;
declare(strict_types=1);

class Account
{
    public string $type;
    public float $balance;

    public function __construct(string $type, float $balance)
    {
        $this->type = $type;
    }
}

?>

<?php include '../includes/header.php'; ?>

//html

<?php include '../includes/footer.php'; ?>