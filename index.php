
<style>
    .sim_image_wrapper {
        width: 100%;
        display: flex;
        gap: var(--gap);
    }

    .sim_image_placeholder {
        background-color: gainsboro;
        width: 100%;
        flex: 1;
        aspect-ratio: 4/3;
        position: relative;
        display: grid;
        place-content: center;
        border-radius: 5px;
        overflow: hidden;
    }

    .sim_image_placeholder i {
        font-size: 100px;
        color: gray;
        grid-row: 1/1;
        grid-column: 1/1;
    }

    .sim_image_placeholder img {
        width: 100%;
        height: 100%;
        grid-row: 1/1;
        grid-column: 1/1;
        z-index: 2;
    }
</style>


<div class="bounnding_box" onclick="make_box_active(this)">
    <div class="sim_image_wrapper whiteDiv">
        <div class="sim_image_placeholder">
            <img src="" alt="" class="">
            <i class="fa fa-image"></i>
        </div>

        <div class="sim_image_placeholder add_image" onclick="add_image_wrapper(this)">
            <i class="fa fa-plus"></i>
        </div>
    </div>
</div>


<?= 'this code is from php'; ?>
<script>

</script>
