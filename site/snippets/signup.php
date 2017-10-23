<div class="signup">
    <div class="signup__container">
        <div class="signup__title text blue">
            <?php echo $data->headline(); ?>
        </div>

        <form class="signup__form">
            <input
                class="signup__form-item"
                name="company"
                type="text"
                placeholder="<?php echo $data->company(); ?>"
            />

            <input
                class="signup__form-item"
                name="email"
                type="text"
                placeholder="<?php echo $data->email(); ?>"
            />

            <input
                class="signup__form-item"
                name="phone"
                type="text"
                placeholder="<?php echo $data->phone(); ?>"
            />

            <textarea
                class="signup__form-item"
                name="message"
                placeholder="<?php echo $data->message(); ?>"
            ></textarea>

            <button class="signup__button" type="submit"><?php echo $data->submit(); ?></button>
        </form>
    </div>
</div>
