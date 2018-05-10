<div class="users form">
    <?php
    echo $this->Form->create();
    ?>
    <fieldset>
        <legend>Por favor insira seu email e senha</legend>
        <?php
        echo $this->Form->control('email');
        echo $this->Form->control('password');
        ?>
    </fieldset>
    <?php
    echo $this->Form->button('Login');
    echo $this->Form->end();
    ?>
</div>
