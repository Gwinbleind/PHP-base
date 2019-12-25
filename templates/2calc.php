<style>
    .button {
        margin: 5px;
        width: 24px;
    }
    .container3 {
        display: flex;
        flex-wrap: wrap;
        width: 102px;
    }
    .container4 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        height: 124px;
        align-items: flex-start;
        max-width: 136px;
    }
</style>
<form action="" method="post">
    <input type="number" name="num">
    <div class="container4">
        <div class="container3">
            <?php for ($i = 1; $i <= 9; $i++):?>
                <input type="button" value="<?=$i?>" class="button">
            <?endfor;?>
        </div>
        <div class="container3">
            <input type="button" value="." class="button">
            <input type="button" value="0" class="button">
            <input type="submit" value="=" class="button">
        </div>
        <div class="container4">
            <input type="button" value="/" class="button">
            <input type="button" value="x" class="button">
            <input type="button" value="+" class="button">
            <input type="button" value="-" class="button">
        </div>
    </div>
</form>
