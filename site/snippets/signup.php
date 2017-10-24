<div class="signup">
    <div class="signup__container">
        <div class="signup__title text blue">
            <?php echo $data->headline(); ?>
        </div>

        <form class="signup__form">
            <input
                class="signup__form-item"
                name="company"
                required
                type="text"
                placeholder="<?php echo $data->company(); ?>"
            />

            <input
                class="signup__form-item"
                name="firstname"
                required
                type="text"
                placeholder="<?php echo $data->firstname(); ?>"
            />

            <input
                class="signup__form-item"
                name="lastname"
                required
                type="text"
                placeholder="<?php echo $data->lastname(); ?>"
            />

            <input
                class="signup__form-item"
                name="email"
                required
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

            <button type="submit"><?php echo $data->submit(); ?></button>
        </form>

        <div class="signup__loader"></div>

        <div class="signup__success">
            <?php echo $data->success(); ?>

            <button><?php echo $data->close(); ?></button>
        </div>
    </div>
</div>
